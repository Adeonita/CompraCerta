<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function show(){
        
        $stateList = State::select('id','name')->get();
        return view('address-option',compact('stateList'));


        /*====Colocar no html address-option ESTADOS 
            @foreach ($stateList as $itens) 
                <option value="{{$itens->id}}">{{$itens->name}}</option>            
            @endforeach  
        */
    }
}
