<?php

namespace App\Http\Controllers;

use App\Models\Arsenal;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class ArsenalController extends Controller

{
    public function showAll (UserDetails $userDetails){
        if(auth()->user()->id !== $userDetails['user_id']){

            return view('student',[
                'student' => $userDetails
            ]);
        }else{

            $arsenals = $userDetails->arsenal()->latest()->get();

            return view('arsenal',[
                'arsenals' => $arsenals,
                'userDetails' => $userDetails
            ]);
           
        }
    }

    public function showAdd(UserDetails $userDetails){
        return view('add-arsenal',[
            'userDetails' => $userDetails
        ]);
    }


    public function deleteArsenal(UserDetails $userDetails, Arsenal $arsenal){
        if(auth()->user()->id === $userDetails->user->id){
            $arsenal->delete();
         }
         $id = $userDetails['id'];
         return redirect("/students/{$id}/equipments/");
    }

    public function createArsenal(UserDetails $userDetails,Request $request){


        $incomingFields = $request->validate([
            'tournament' => 'required',
            'date' => 'required',
            'oiling_lenght' => 'required',
            'remarks' => 'required',
            'atl_centre' => 'required',
            'atl_track' => 'required',
            'atl_outside' => 'required',
            'btf_back' => 'required',
            'btf_middle' => 'required',
            'btf_front' => 'required',
            'sanding' => 'required',
            'polishing' => 'required',
            'img' => 'image'
        ]);

        if(request()->has('img')){
            $imagePath = request()->file('img')->store('arsenal','public');
            $incomingFields['img'] = $imagePath;
        }
        $incomingFields['user_details_id'] = $userDetails['id'];
        Arsenal::create($incomingFields);

        $id = $userDetails['id'];
        return redirect("/students/{$id}/equipments/");

    }
}
