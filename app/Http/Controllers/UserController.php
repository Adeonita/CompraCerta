<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidOrderException;
use Throwable;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Session;
use App;

class UserController extends Controller
{

    public function index()
    {
        try {

            $users = User::all();

            return $users;
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }

    public function getClients()
    {
        try {

            $users = User::where('user_type', '=', 'CLIENT')->get();

            return response()->json([
                'success' => true,
                'message' => $users
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function getEmployees()
    {
        try {

            $users = User::where('user_type', '=', 'EMPLOYEE')->get();

            return response()->json([
                'success' => true,
                'message' => $users
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "cpf" => "required",
            "email" => "required",
            "password" => "required",
            "birth_date" => "required|date_format:Y-m-d",
        ]);
        try {
            $newuser = User::create($request->all());
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => $newuser
        ], 200);
    }

    public function getById(Request $request, $id)
    {
        try {

            $user = User::where('id', $id)->get();

            if (count($user) == 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not Found'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => $user
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function getByEmail(Request $request)
    {
        $data = $request->all();

        try {

            $user = User::where('email', $request->email)->get();

            if (count($user) == 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not Found'
                ], 204);
            }
            return response()->json([
                'success' => true,
                'message' => $user
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function updateUserByEmail(Request $request)
    {

        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "cpf" => "required",
            "email" => "required",
            "birth_date" => "required",
        ]);

        try {

            $user = User::where('email', $request->email)->first();

            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->last_name = $request->last_name;
            $user->birth_date = $request->birth_date;

            $user->save();

            return response()->json([
                'success' => true,
                'message' => $user
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function updateUserPassword(Request $request)
    {
        $request->validate([
            "password" => "required",
            "email" => 'required',
            "new_password" => "required"
        ]);
        try {

            $user = User::where('email', $request->email)->first();
            if ($user->password == $request->password) {
                $user->password = $request->new_password;
                $user->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Senha alterada',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Senha incorreta'
                ], 203);
            }
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 400);
        }
    }

    public function login(Request $request)
    {

        $request->validate([
            "passwordUser" => "required",
            "emailInput" => 'required'
        ]);

        $user = User::where('email', $request->emailInput)
            ->where('password', $request->passwordUser)
            ->first();

        if (!$user) {
            return response()->json([
                "message" => "Invalid Credentials"
            ], 404);
        }

        $now = date('Y-m-d H:i:s');

        Session::create([
            "created_at" => $now,
            "expirated_at" => date('Y-m-d H:i:s', strtotime($now . ' + 2 days')),
            "is_valid" => 1,
            "user_id" => $user->id,
        ]);

        $request->session()->put('userData', $user->id);

        return response()->json([
            "name" => $user->name,
            "type" => $user->user_type,
            "department_id" => $user->department_id,
        ]);
    }

    public function logout(Request $request)
    {
        Session::where([
            "user_id" => $request->user_id,
        ])->update([
            "is_valid" => 0,
        ]);
    }
}
