<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function links()
    {
        return view('pages.links');
    }

    public function fans()
    {
        return view('pages.fans');
    }

    public function combines()
    {
        return view('pages.combines');
    }

    public function marketing()
    {
        return view('pages.marketing');
    }

    public function stats()
    {
        return view('pages.stats');
    }

    public function highschools()
    {
        return view('pages.highschools');
    }

    public function teams()
    {
        return view('pages.teams');
    }

    public function coaches()
    {
        return view('pages.coaches');
    }
}
