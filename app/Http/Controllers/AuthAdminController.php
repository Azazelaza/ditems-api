<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthAdminController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);
        $request->merge(['isActive' => 1, 'password' => Hash::make($request->password)]);
        $user = Admin::create($request->toArray());
        config(['auth.guards.admin.driver' => 'session']);
        Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        $token = $user->createToken('AdminUser', ['admin'])->accessToken;
        $user->token = $token;
        $user->remember_token = Str::random(60);
        $user->save();
        return response()->json(['token' => $token, 'success' => true], 200);
    }

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        config(['auth.guards.admin.driver' => 'session']);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $token = Auth::guard('admin')->user()->createToken('AdminUser', ['admin'])->accessToken;
            $user = Admin::find(Auth::guard('admin')->user()->id);
            $user->token = $token;
            $user->save();
            return response()->json(['user' => $user, 'token' => $token, 'success' => true], 200);
        } else {
            return response()->json(['error' => 'No Autorizado', 'success' => false], 401);
        }
    }
    /**
     * Logout
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->user()->token()->revoke();
        return response()->json(['message' => "Logout", 'success' => true], 200);
    }

    /**
     * Handles Reset Password
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        Validator::make($request->all(), [
            'remember_token' => 'required|string',
            'password' => 'required|string'
        ]);
        if (Admin::where('remember_token', $request->remember_token)->exists()) {
            $user = Admin::where('remember_token', $request->remember_token)->first();
            $user->password = bcrypt($request->password);
            $user->save();
            Auth::guard('admin')->attempt(['email' => $user->email, 'password' => $request->password]);
            $token  = Auth::guard('admin')->user()->createToken('AdminUser', ['admin'])->accessToken;
            $user->token = $token;
            $user->save();
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['message' => "No Autorizado"], 200);
        }
    }

    /**
     * Renew Token
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function renewToken(Request $request)
    {
        /* Validator::make($request->all(), [
            'remember_token' => 'required|string'
        ]); */
        $user = Admin::where('token', $request->remember_token)->first();
        return response()->json(['user' => $user, 'token' => $user->token, 'success' => true], 200);
        /* try {
            $user = Admin::where('token', $request->remember_token)->first();
            config(['auth.guards.user.driver' => 'session']);
            Auth::guard('admin')->attempt(['email' => $user->email, 'password' => $user->password]);
            Auth::guard('admin')->user()->token()->revoke();
            $token = Auth::guard('admin')->user()->createToken('User', ['admin'])->accessToken;
            $user = Admin::find(Auth::guard('admin')->user()->id);
            $user->token = $token;
            $user->save();
            unset($user['password']);
            return response()->json(['user' => $user, 'token' => $token, 'user' => $user, 'success' => true], 200);
        } catch (Exception $e) {
            return response()->json(['message' => "No Autorizado", 'success' => false], 200);
        } */
    }
}
