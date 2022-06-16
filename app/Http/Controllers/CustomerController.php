<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Country;
use App\Models\State;
use App\Models\Customer;
use App\Models\StateAccess;
use App\Models\ClassAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index()
    {
        $title = 'Approved Visitors';
        $customers = Customer::select(['id', 'first_name', 'last_name', 'email', 'phone'])->whereStatus('1')->get();
        return view('admin.customers.index', compact('title', 'customers'));
    } */

    public function approvedIndex()
    {
        $title = 'Approved Visitors';
        $customers = Customer::select(['id', 'first_name', 'last_name', 'email', 'phone'])->whereStatus('1')->get();
        return view('admin.customers.index', compact('title', 'customers'));
    }

    public function pendingIndex()
    {
        $title = 'Approval Pending Visitors';
        $customers = Customer::select(['id', 'first_name', 'last_name', 'email', 'phone'])->whereStatus('0')->get();
        return view('admin.customers.pending', compact('title', 'customers'));
    }

    public function deniedIndex()
    {
        $title = 'Access Denied Visitors';
        $customers = Customer::select(['id', 'first_name', 'last_name', 'email', 'phone'])->whereStatus('2')->get();
        return view('admin.customers.denied', compact('title', 'customers'));
    }

    public function getApprovedCustomers(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::select('customers')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actions = 
                        '<a href="' . route('customers.show', $row->id) . '" class="btn btn-primary p-2" rel="tooltip" data-original-title="" title="View"><i class="material-icons">visibility</i></a>
                        <a href="' . route('customers.edit', $row->id) . '" class="btn btn-warning p-2" rel="tooltip" data-original-title="" title="Edit"><i class="material-icons">edit</i></a>
                        <form action="' . route('customers.destroy',$row->id) . '" method="POST">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger p-2" onclick="return confirm(\'Are you sure you want to permanently DELETE Customer #' . $row->id . '?\')" rel="tooltip" data-original-title="" title="Delete"><i class="material-icons">delete</i></button>
                        </form>';
                    return $actions;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function login()
    {
        return view('customer.auth.login');
    }

    public function handleLogin(Request $req)
    {
        if(Auth::guard('customer')->attempt($req->only(['email', 'password'])))
        {
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        return view('pages.subscription', compact('countries', 'states'));
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
            'email' => 'email|unique:customers|regex:/(.+)@(.+)\.(.+)/i|required',
            'password' => 'required|string|min:8|confirmed'
        ];

        if(!$request->state_alt) {
            $rules['state'] = 'required';
        }

        $this->validate($request, $rules);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'state_alt' => $request->state_alt,
            'country' => $request->country,
            'zip' => $request->zip,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ];

        $customer = Customer::create($data);
        if(!$customer) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

        return redirect()->back()->with('success', 'Your request has been sent successfully. Admin will contact you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $states = StateAccess::whereCustomerId($id)->first();
        $classes = ClassAccess::whereCustomerId($id)->first();
        
        return view('admin.customers.show', compact('customer', 'states', 'classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = __('Edit Customer');
        $customer = Customer::find($id);

        $states = State::select('state')->get();
        $countries = Country::select('country')->get();

        $state_access = StateAccess::whereCustomerId($id)->first();
        $class_access = ClassAccess::whereCustomerId($id)->first();
        
        $available_states = Athlete::select('state')->distinct()->orderBy('state')->get();
        $available_classes = Athlete::select('class')->distinct()->orderBy('class')->get();
        return view('admin.customers.edit', compact('title', 'customer', 'state_access', 'class_access', 'states', 'countries'));
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
}
