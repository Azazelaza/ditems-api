<?php

namespace App\Http\Controllers;

use App\Models\RoleForAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try{
            $users = User::active()->paginate(15);
            if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->users()->exists() && Auth::guard('admin')->user()->id != 1) {
                return Response()->json(['success' => false, 'message' => 'No autorizado', 'error' => '']);
            }
            return Response()->json(['success' => true, 'data' => $users]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $user = User::find($id);
            if( Auth::guard('admin')->check() ){
                if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->users()->exists() && Auth::guard('admin')->user()->id != 1) {
                    return Response()->json(['success' => false, 'message' => 'No autorizado', 'error' => '']);
                }
            }
            return Response()->json(['success' => true, 'data' => $user]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    public function update(Request $request, $idUser)
    {
        try{
            $user = User::find($idUser);
            if (!$user) {
                return Response()->json(['success' => false, 'message' => 'Usuario no encontrado..', 'error' => '']);
            }
            if( Auth::guard('admin')->check() ){
                if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->users()->exists() && Auth::guard('admin')->user()->id != 1) {
                    return Response()->json(['success' => false, 'message' => 'No autorizado', 'error' => '']);
                }
            }
            $user->name         = $request->name;
            $user->username     = $request->username;
            $user->last_name    = $request->last_name;
            $user->phone        = $request->phone;
            $user->email        = $request->email;
            $user->password     = $request->password;
            $user->birthday     = $request->birthday;
            $user->gender       = $request->gender;
            $user->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(User $user)
    {
        try{
            if( !Auth::guard('admin')->check() ){
                return Response()->json(['success' => false, 'message' => 'No autorizado', 'error' => '']);
            }
            if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->users()->exists() && Auth::guard('admin')->user()->id != 1) {
                return Response()->json(['success' => false, 'message' => 'No autorizado', 'error' => '']);
            }
            $user->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }
}
