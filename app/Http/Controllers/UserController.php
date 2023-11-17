<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        //create user
        $incomingFields = $request->validate([
            'name' => ['required','min:3', Rule::unique('users','name')],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' =>['required','min:4','max:45']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
    
        auth()->login($user);
        //create user details
        $userDetailsFields = $request->validate([
            'age' => 'required',
            'programme' => 'required',
        ]);
        $userDetailsFields['credit'] = 0;
        $userDetailsFields['coach'] = '';
        $userDetailsFields['user_id'] = auth()->user()->id;
        UserDetails::create($userDetailsFields);

        
        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginName' => ['required','min:3'],
            'loginPassword' =>'required'
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginName'],
                            'password' => $incomingFields['loginPassword']]))
        {
            $request->session()->regenerate();
        }
        
        return redirect('/');
    }


}
