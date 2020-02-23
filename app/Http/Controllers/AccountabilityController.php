<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AccountabilityController extends Controller
{
    //
    public function index()
    {
        $accountabilities = \App\Accountability::all();
        return view('accountability.index', compact('accountabilities'));
    }

    public function store(Request $request)
    {
        // dd($request->designation);
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
      \App\Accountability::create($data);
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
          $accountability->update($data);
          Alert::success('Edit Success!', $request->name.' has been successfully edited');
          return redirect()->back();
    }
}
