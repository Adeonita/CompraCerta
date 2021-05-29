<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    function index(){
        return view(address.address-option);
    }

    function save(Request $request){
        $validator = Validator::make($request->all(),[
            'userCep' => 'required|min:8|max:8',
            'userRua' => 'required',
            'userNumero' => 'required',
            'userBairro' => 'required',
            'userCidade' => 'required',
        ]);
        
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=> $validator -> errors()->toArray()]);
        
        }/*else{        QUANDO TIVER BANCO DE DADOS ADICIONAR ESSA PARTE
            $values = [                             
                'userCep'=>$request->userCep,
                'userRua'=>$request->userRua,
                'userNumero'=>$request->userNumero,
                'userBairro'=>$request->userBairro,
                'userCidade'=>$request->userCidade,
            ];

            $query = DB::table('userAddress')->insert($values);

            if($query){
                return response() -> json(['status'=>1, 'msg'=> 'Endereço inserido corretamente']);
            }

        }   
        */
    }
}
