<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function barber(Request $request)
    {
        try {
            return response()->json([
                'barbers' => User::where('type_user','barber')->get()
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function client(Request $request)
    {
        try {
            return response()->json([
                'clients' => User::where('type_user','client')->get()
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }
    }
}
