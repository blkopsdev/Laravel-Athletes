<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SubmissionType;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Contact Messages';
        $total = Contact::select('id')->get()->count();

        return view('admin.contacts.index', compact('title', 'total'));
    }

    public function getContacts(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('contacts')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('type', function($row){
                    if ($row->submission_type_id == '1') {
                        $type = "Comment";
                    } else if ($row->submission_type_id == '2') {
                        $type = "Suggestion";
                    } else if ($row->submission_type_id == '3') {
                        $type = "Question";
                    } else if ($row->submission_type_id == '4') {
                        $type = "Personal Appearance Inquiry";
                    } else if ($row->submission_type_id == '5') {
                        $type = "Site Feedback";
                    }
                    return $type;
                })
                ->rawColumns(['type'])
                ->addIndexColumn()
                ->addColumn('messages', function($row){
                    $message = html_entity_decode($row->message);
                    return $message;
                })
                ->rawColumns(['type', 'messages'])
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
            'email' => 'email|unique:contacts|regex:/(.+)@(.+)\.(.+)/i|required'
        ];

        $this->validate($request, $rules);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'submission_type_id' => $request->submission_type,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $contact = Contact::create($data);
        if($contact) {
            return redirect()->back()->with('success', 'Thanks for contacting us! We will be in touch with you shortly.');
        }
        return redirect()->back()->with('error', 'Something went wrong! Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submissionType($id)
    {
        $submission = SubmissionType::find($id);

        return $submission->type;
    }
}
