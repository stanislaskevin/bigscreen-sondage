<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // apiToken
    private $apiToken;
    public function __construct()
    {
        $this->apiToken = uniqid(base64_encode(Str::random(40)));
    }

    //systeme de login
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            $success['token'] = $this->apiToken;
            $success['email'] = $user->email;
            return response()->json([
                'status' => 'success',
                'data' => $success
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'data' => 'Unauthorized Access',
            ]);
        }
    }
}
