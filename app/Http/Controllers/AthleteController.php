<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\StateAccess;
use App\Models\ClassAccess;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use DB;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Athletes";
        $total = Athlete::select('id')->get()->count();
        return view('admin.athletes.index', compact('title', 'total'));
    }

    public function getAthletes(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('athletes')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actions = 
                        '<a href="' . route('athletes.show', $row->id) . '" class="btn btn-primary p-2" rel="tooltip" data-original-title="" title="View"><i class="material-icons">visibility</i></a>
                        <a href="' . route('athletes.edit', $row->id) . '" class="btn btn-warning p-2" rel="tooltip" data-original-title="" title="Edit"><i class="material-icons">edit</i></a>
                        <form action="' . route('athletes.destroy',$row->id) . '" method="POST">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger p-2" onclick="return confirm(\'Are you sure you want to permanently DELETE Atlete #' . $row->id . '?\')" rel="tooltip" data-original-title="" title="Delete"><i class="material-icons">delete</i></button>
                        </form>';

                    return $actions;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Create New Athlete');
        return view('admin.athletes.create', compact('title'));
    }

    public function import()
    {
        $title = __('Import Athletes');
        return view('admin.athletes.import', compact('title'));
    }

    public function importData(Request $request)
    {
        $file = $request->file('file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes

            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
    
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
    
            // Upload file
            $file->move($location, $filename);
    
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
    
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
    
            //Read the contents of the uploaded file 
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
    
                // Skip first row (Remove below comment if you want to skip the first row)
                /* if ($i == 0) {
                    $i++;
                    continue;
                } */
            
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
    
            fclose($file); //Close after reading
    
            $j = 0;
    
            foreach ($importData_arr as $importData) {
                $token = '';
                try {
                    if ($importData[0] != '' && $importData[0] != 'Name' && $importData[0] != NULL) {
                        $tmp = $importData[0];
                        $tmp .= $importData[2];
                        $tmp .= $importData[5];
                        $tmp .= $importData[6];
                        $token = md5($tmp);
                    }

                    if($token != '') {
                        $athlete = Athlete::whereToken($token)->first();
                    }

                    if (!$athlete) {
                        $athlete = new Athlete();
                    } 

                    $athlete->name = $importData[0];
                    $athlete->position = $importData[1];
                    $athlete->height = $importData[2];
                    $athlete->weight = $importData[3];
                    $athlete->forty = $importData[4];
                    $athlete->city_school = $importData[5];
                    $athlete->state = $importData[6];
                    $athlete->college_commitment = $importData[7];
                    $athlete->synopsis = $importData[8];
                    $athlete->national_honors = $importData[9];
                    $athlete->other_rankings = $importData[10];
                    $athlete->junior_local_honors = $importData[11];
                    $athlete->sophomore_local_honors = $importData[12];
                    $athlete->freshman_local_ranking = $importData[13];
                    $athlete->combines = $importData[14];
                    $athlete->other_comments = $importData[15];
                    $athlete->news_and_notes = $importData[16];
                    $athlete->top_offers = $importData[17];
                    $athlete->projected_college_position = $importData[18];
                    $athlete->national_ranking = $importData[19] == 0 || $importData[19] == '0' ? NULL : $importData[19];
                    $athlete->state_ranking = $importData[20] == 0 || $importData[20] == '0' ? NULL : $importData[20];
                    $athlete->rating = $importData[21];
                    $athlete->class = $importData[22];
                    $athlete->links = $importData[23];
                    $athlete->contact_information = $importData[24];
                    $athlete->token = $token;

                    $athlete = $athlete->save();
                    $j++;
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
    
            return response()->json([
                'message' => "$j records successfully uploaded"
            ]);
            
            return redirect()->back()->with('success', $j . 'records successfully uploaded');
        } else {
            //no file was uploaded
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $athlete = new Athlete();
        
        $input = $request->all();
        $input['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    
        try {
            $athlete->create($input);
            $id = $athlete->id;
            return redirect()->route('athletes.index')->with('success', 'Athlete has been created successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::find($id);

        return view('admin.athletes.show', compact('athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = __('Edit Athlete');
        $athlete = Athlete::find($id);

        return view('admin.athletes.edit', compact('athlete', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $athlete = Athlete::find($id);
        $input = $request->all();

        try {
            $athlete->update($input);
            return redirect()->route('athletes.show', $id)->with('success', 'Athlete has been updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the Athlete Database to Customers.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showFilter()
    {
        $cities = Athlete::select('city_school')->distinct()->get();
        $user = Auth::guard('customer')->user();

        $state_accesses = StateAccess::select('state_access')->whereCustomerId($user->id)->first();
        if($state_accesses) {
            $states = Athlete::select('state')->whereIn('state', json_decode($state_accesses->state_access))->distinct()->get();
        } else {
            $states = Athlete::select('state')->distinct()->get();
        }

        $class_accesses = ClassAccess::select('class_access')->whereCustomerId($user->id)->first();
                if($class_accesses) {
            $classes = Athlete::select('class')->whereIn('class', json_decode($class_accesses->class_access))->distinct()->get();
        } else {
            $classes = Athlete::select('class')->distinct()->get();
        }

        return view('athletes.database-filter', compact('states', 'cities', 'classes'));
    }
    
    public function report(Request $request)
    {
        $data = [
            "report" => $request->report_type,
            "state" => $request->state,
            "city_school" => $request->city_school,
            "city_school_search" => $request->city_school_search,
            "class" => $request->class,
            "position" => $request->position,
            "rating" => $request->rating,
            "name" => $request->name
        ];

        switch ($request->report_type) {
            case '1':
                $title = "National Position Rankings";
                break;
            case '2':
                $title = "State Position Rankings";
                break;
            case '3':
                $title = "State Overall Rankings";
                break;
            case '4':
                $title = "State By City/School";
                break;
            case '5':
                $title = "National Commitments";
                break;
            case '6':
                $title = "National Top Offers";
                break;
            case '7':
                $title = "Contacts Report";
                break;
        }
        
        return view('athletes.athlete-table', compact('data', 'title'));
    }
    
    public function getReport(Request $request)
    {
        if ($request->ajax()) {
            $data = Athlete::query();

            if($request->report == 5 || $request->report == 7) {
                $data->where('college_commitment', '!=', '');
            } 
            if($request->report == 6) {
                $data->where('top_offers', '!=', '')->where('top_offers', '!=', 'x');
            }
            if($request->state != null) {
                $data->whereState($request->state);
            }
            if($request->city_school != null) {
                $data->whereCitySchool($request->city_school);
            }
            if($request->city_school_search != null) {
                $data->where('city_school_search', 'LIKE', '%' . $request->city_school_search . '%');
            }

            if($request->class != null && $request->class != 'All') {
                $data->whereClass($request->class);
            }
            if($request->position != null) {
                $data->where('projected_college_position', '=', $request->position);
            }
            if($request->rating != null && $request->rating != 'All') {
                $data->whereRating($request->rating);
            }
            if($request->name != null) {
                $data->where('name', 'LIKE', '%' . $request->name . '%');
            }

            $user = Auth::guard('customer')->user();

            $state_accesses = StateAccess::select('state_access')->whereCustomerId($user->id)->first();
            if($state_accesses) {
                $data->whereIn('state', json_decode($state_accesses->state_access));
            }

            $class_accesses = ClassAccess::select('class_access')->whereCustomerId($user->id)->first();
            if($class_accesses) {
                $data->whereIn('class', json_decode($class_accesses->class_access));
            } 

            $data->latest()->get();
            // $data = DB::table('athletes')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('athlete_name', function($row){
                    $actions = 
                        '<a href="' . route('athlete.premium_show', $row->id) . '" class="" target="_blank">' . $row->name . '</a>';
                    return $actions;
                })
                ->rawColumns(['athlete_name'])
                ->make(true);
        }
    }

    public function showAthlete($id) 
    {
        $athlete = Athlete::find($id);
        return view('athletes.show', compact('athlete'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $athlete = Athlete::find($id);
        $athlete->delete();

        return redirect()->route('athletes.index')->with('success', 'Customer has been deleted successfully!');
    }

    public function checkUploadedFileProperties($extension, $fileSize)

    {

        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files

        $maxFileSize = 5242880; // Uploaded file size limit is 5mb

        if (in_array(strtolower($extension), $valid_extension)) {

            if ($fileSize <= $maxFileSize) {

            } else {

                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error

            }

        } else {

            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error

        }

    }
}
