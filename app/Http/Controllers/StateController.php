<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;


class StateController extends Controller
{
    public function show(){
        
        $StateList['data'] = State::orderby("name","asc")
        			   ->select('id','name')
        			   ->get();

        
        return view('address-option\address-option')->with("StateList",$StateList);
        
        //return State::all("name", "initials");
    }
}
