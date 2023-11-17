<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function show (UserDetails $userDetails){
        if(auth()->user()->id !== $userDetails['user_id']){

            return redirect('/');
        }else{
            
            return view('student',[
                'student' => $userDetails
            ]);
           
        }
    }
}
