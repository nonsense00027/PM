<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
class ModalController extends Controller
{
    //
    public function remarks($id){
       
        $remark = Log::where('id','=',$id)->get();
        return $remark;
    }
}
