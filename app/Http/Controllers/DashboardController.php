<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('only_admin_access')->only('settings');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $title = "Dashboard";
        $athletes = Athlete::select('id')->get()->count();
        $customers = Customer::whereStatus('1')->get()->count();
        return view('admin.dashboard', compact('title', 'athletes', 'customers'));
    }

    /**
     * Show the application settings.
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        $title = "Settings";
        return view('pages.settings', compact('title'));
    }

    public function settingsUpdate(Request $request)
    {
        $tax_rate = Option::whereOptionName('tax_rate')->first();
        $expiration_period = Option::whereOptionName('expiration_period')->first();

        $tax_rate = $tax_rate->update(['option_value' => $request->tax_rating]);
        $expiration_period = $expiration_period->update(['option_value' => $request->expiration_period]);
        return redirect()->back()->with('success', 'Settings has been updated successfully');
    }

    /**
     * Show the available store credits.
     *
     * @return \Illuminate\View\View
     */
    public function availableCredits()
    {
        $title = "Total Available Store Credit";
        $available_store_credit = Customer::where('available_credit', '!=', 0)->sum('available_credit');
        $customers_with_credit =  Customer::where('available_credit', '!=', 0)->get();
        return view('pages.available_credits', compact('title', 'available_store_credit', 'customers_with_credit'));
    }
}
