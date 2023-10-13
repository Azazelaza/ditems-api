<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        try{
            $admins = Admin::active()->paginate(15);
            return Response()->json(['success' => true, 'data' => $admins]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $admin = Admin::find($id);
            return Response()->json(['success' => true, 'data' => $admin]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function store(Request $request)
    {
        try{
            $password = $request->password;
            $request->merge(['password' => Hash::make($request->password),'token' => Str::random(60), 'isActive' => 1]);
            $admin = Admin::create($request->all());
            Auth::attempt(['email' => $admin->email, 'password' => $password]);
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.', 'data'=> ['token' => $admin->token]]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $idUser)
    {
        try{
            $admin = Admin::find($idUser);
            if (!$admin) {
                return Response()->json(['success' => false, 'message' => 'Usuario no encontrado..', 'error' => '']);
            }
            $admin->username     = $request->username;
            $admin->email        = $request->email;
            $admin->password     = $request->password;
            $admin->isActive     = $request->isActive;
            $admin->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Admin $admin)
    {
        try{
            $admin->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }
}
