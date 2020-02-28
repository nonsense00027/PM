<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;

class AccountabilityController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $accountabilities = \App\Accountability::all();
        $logs = \App\Log::all();
        return view('accountability.index2', compact('accountabilities', 'logs'));
    }

    public function store(Request $request)
    {
        // dd($request->designation);
      $request->validate([
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
        'email'=>'required'
      ]);
      // $request->merge(['local_password' => Hash::make($request->local_password)]);
      // dd($request->all());
      \App\Accountability::create($request->all());
      Alert::success('Success!', $request->name.' has been successfully added');
      return redirect()->back();
    }

    public function update(Request $request, \App\Accountability $accountability){
        // dd($request->domain_acc);
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
            'email'=>'required'
          ]);

          $data2 = request()->validate([
            'id' =>'required',
            'remark' =>'required'
          ]);
          // dd($data2);
          $accountability->update($data);
          \App\Log::create($data2);
          Alert::success('Edit Success!', $request->name.' has been successfully edited');
          return redirect()->back();
    }
}
