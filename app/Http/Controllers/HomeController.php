<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function test(){
      return view('test.index');
    }
    public function index()
    {
        $accountabilities = \App\Accountability::all();
        return view('home', compact('accountabilities'));
    }

    public function register(){
      return view('register.index');
    }
}
