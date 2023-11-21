<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {

            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
                'data' => null
            ]);
        }

        $token = $user->createToken("api")->plainTextToken;

        return response()->json([
            'status' => 'ok',
            'message' => 'success',
            'data' => $user,
            'token' => $token,
        ]);
    }

    public function currentUser(Request $request)
    {
        return response()->json([
            'status' => 'ok',
            'message' => 'success',
            'data' => $request->user(),
        ]);
    }
    public function signOut(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'ok',
            'message' => 'success',
            'data' => null,
        ]);
    }
}
