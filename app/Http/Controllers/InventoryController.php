<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('inventory.index');
    }
    public function update(Request $request, \App\Inventory $inventory){
        // dd($request->domain_acc);
        $data = request()->validate([
            'motherboard'=>'required',
            'cpu'=>'required',
            'hdd'=>'required',
            'memory'=>'required',
            'monitor'=>'required',
            'case'=>'required',
            'keyboard'=>'required',
            'mouse'=>'required',
            'video_card'=>'required',
            'power_supply'=>'required',
            'printer'=>'required',
            'telephone'=>'required'
          ]);

          $data2 = request()->validate([
            'id' =>'required',
            'remark' =>'required'
          ]);
          // dd($data2);
          $inventory->update($data);
          \App\Log::create($data2);
          Alert::success('Edit Success!', $request->name.' has been successfully edited');
          return redirect()->back();
    }
}
