<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
use DB;

class AccountabilityController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $accountabilities = \App\Accountability::all();
        $accountabilities = DB::table('accountabilities')->join('inventories', 'accountabilities.id','=','inventories.id')->get();
        // dd($accountabilities);
        $inventories = \App\Inventory::all();
        $logs = \App\Log::all();
        return view('accountability.index2', compact('accountabilities', 'logs', 'inventories'));
    }

    public function store(Request $request)
    {
        // dd($request->designation);
      $request->validate([
        'name'=>'required',
        'company'=>'required',
        'designation'=>'required',
        'location'=>'required',
        'email'=>'required',
        'status'=>'required'
      ]);
      // $request->merge(['local_password' => Hash::make($request->local_password)]);
      // dd($request->all());
      \App\Accountability::create($request->all());
      \App\Inventory::create();
      Alert::success('Success!', $request->name.' has been successfully added');
      return redirect()->back();
    }

    public function update(Request $request, \App\Accountability $accountability){
        // dd($request->domain_acc);
        $data = request()->validate([
            'name'=>'required',
            'company'=>'required',
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
            'status'=>'required'
          ]);

          $data2 = request()->validate([
            'id' =>'required',
            'remark' =>'required'
          ]);
          // dd($data2);
          $accountability->update($data);
          \App\Log::create($data2);
          Alert::success('Edit Success!');
          return redirect()->back();
    }
}
