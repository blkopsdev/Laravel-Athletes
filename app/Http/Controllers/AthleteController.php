<?php

namespace App\Http\Controllers;

use App\Athlete;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
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
                        <a href="' . route('athletes.edit', $row->id) . '" class="btn btn-warning p-2" rel="tooltip" data-original-title="" title="Edit"><i class="material-icons">edit</i></a>';

                    if(auth()->user()->role == 'admin') {
                        $actions = $actions . '
                        <form action="' . route('athletes.destroy',$row->id) . '" method="POST">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger p-2" onclick="return confirm(\'Are you sure you want to permanently DELETE Atlete #' . $row->id . '?\')" rel="tooltip" data-original-title="" title="Delete"><i class="material-icons">delete</i></button>
                        </form>';
                    }
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
}
