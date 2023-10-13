<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthUserController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'phone' => 'required|min:10',
            'birthday' => 'required|string',
            'gender' => 'required|string',
        ]);
        $request->merge(['isActive' => 1, 'password' => Hash::make($request->password)]);
        $user = User::create($request->toArray());
        config(['auth.guards.user.driver' => 'session']);
        Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password]);
        $token = $user->createToken('User', ['user'])->accessToken;
        $user->token = $token;
        $user->remember_token = Str::random(60);
        $user->save();
        return response()->json(['token' => $token], 200);
    }
 
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);
        config(['auth.guards.user.driver' => 'session']);
        if ( Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password]) ){
            $token = Auth::guard('user')->user()->createToken('User', ['user'])->accessToken;
            $user = User::find(Auth::guard('user')->user()->id);
            $user->token = $token;
            $user->save();
            return response()->json(['token' => $token, 'user' => $user['password']], 200);
        } else {
            return response()->json(['error' => 'No Autorizado'], 401);
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
        Auth::guard('user')->user()->token()->revoke();
        return response()->json(['message' => "Logout"], 200);
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
        if(User::where('remember_token', $request->remember_token)->exists()){
            $user = User::where('remember_token', $request->remember_token)->first();
            $user->password = bcrypt($request->password);
            $user->save();
            Auth::guard('admin')->attempt(['email' => $user->email, 'password' => $request->password]);
            $token  = Auth::guard('admin')->user()->createToken('AdminUser', ['admin'])->accessToken;
            $user->token = $token;
            $user->save();
            return response()->json(['token' => $token], 200);
        }else{
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
        Validator::make($request->all(), [
            'remember_token' => 'required|string'
        ]);
        if(User::where('remember_token', $request['remember_token'])->exists()){
            $user = User::where('remember_token', $request['remember_token'])->first();
            config(['auth.guards.user.driver' => 'session']);
            Auth::guard('user')->attempt(['email' => $user->email, 'password' => $user->password]);
            Auth::guard('user')->user()->token()->revoke();
            $token = Auth::guard('user')->user()->createToken('User', ['user'])->accessToken;
            $user = User::find(Auth::guard('user')->user()->id);
            $user->token = $token;
            $user->save();
            return response()->json(['token' => $token, 'user' => $user], 200);
        }else{
            return response()->json(['message' => "No Autorizado"], 200);
        }
    }
}
