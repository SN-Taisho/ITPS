<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class ArsenalController extends Controller

{
    public function show (UserDetails $userDetails){
        if(auth()->user()->id !== $userDetails['user_id']){

            return view('student',[
                'student' => $userDetails
            ]);
        }else{

            $arsenals = $userDetails->arsenal()->latest()->get();

            return view('arsenal',[
                'arsenals' => $arsenals
            ]);
           
        }
    }
}
