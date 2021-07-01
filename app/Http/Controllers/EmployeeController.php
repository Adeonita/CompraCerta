<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Departments;
use App\Models\Cart;


use DB;

class EmployeeController extends Controller
{
    public function show(){
        return Employee::all();
    }

    public function showAllPurchases(){
        $purchases = DB::table('carts')
        ->join('users', "carts.user_id", '=', 'users.id')
        ->select(
            "carts.id",
            "carts.status",
            "users.name",
        )->get();

        return view('employee/purchasingManagement')->with("purchases", $purchases);
    }

    private function getNextStatus($status) {
        switch($status){
            case 'separação':
                return 'empacotamento';
                break;

            case 'empacotamento':
                return "rota de entrega";
                break;

            case 'rota de entrega':
                return "finalizado";
                break;
            
            case 'finalizado':
                    return "finalizado";
                    break;
            
            default:
                return "finalizado";
                break;
        }
    }

    public function sendToNextDepartment($status, $cartId) {
        $statusId = Departments::where("name", $status)->get()[0]['id'];
        $cart = Cart::where("id", $cartId)
            ->update([
                "status" => $this->getNextStatus($status),
            ]);
    }
}