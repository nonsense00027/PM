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
    public function index()
    {
        $accountabilities = \App\Accountability::all();
        return view('home', compact('accountabilities'));
    }

    public function store(Request $request)
    {
      $data = request()->validate([
        'name'=>'required',
        'designation'=>'required',
        'computer_name'=>'required',
        'location'=>'required',
        'local_user'=>'required',
        'local_password'=>'required',
        'domain_acc'=>'required',
        'domain_pass'=>'required',
        'ip_address'=>'required',
        'mac_address'=>'required',
        'email'=>'required',
        'name'=>'required'
      ]);

    //   dd($request);
      \App\Accountability::create($data);
      Alert::success('Success!', $request->name.' has been successfully added');

      // $accountability = new \App\Accountability();
      //
      // $accountability->name = request('name');
      // $accountability->designation = request('designation');
      // $accountability->computer_name = request('computer_name');
      // $accountability->location = request('location');
      // $accountability->local_user = request('local_user');
      // $accountability->local_password = request('local_password');
      // $accountability->domain_acc = request('domain_acc');
      // $accountability->domain_pass = request('domain_pass');
      // $accountability->ip_address = request('ip_address');
      // $accountability->mac_address = request('mac_address');
      // $accountability->email = request('email');
      // $accountability->save();
      return redirect()->back();
    }
}
