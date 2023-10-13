<?php

namespace App\Http\Controllers;

use App\Models\RoleForAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleForAdminController extends Controller
{

    public function index(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $rolesForAdmins = RoleForAdmin::paginate(15);
            return Response()->json(['success' => true, 'data' => $rolesForAdmins]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $roleForAdmin = RoleForAdmin::find($id);
            return Response()->json(['success' => true, 'data' => $roleForAdmin]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    } 
    function store(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $roleForAdmin = RoleForAdmin::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }

    /**
     * Display the specified by admin.
     */
    function showByAdmin($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $admins = RoleForAdmin::admin($id)->get();
            return Response()->json(['success' => true, 'data' => $admins]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by rol.
     */
    function showByRol($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $admins = RoleForAdmin::rol($id)->get();
            return Response()->json(['success' => true, 'data' => $admins]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $roleForAdmin = RoleForAdmin::find($id);
            if (!$roleForAdmin) {
                return Response()->json(['success' => false, 'message' => 'Rol de Administrador no encontrado.', 'error' => '']);
            }
            $roleForAdmin->admin_id = $request->admin_id;
            $roleForAdmin->rol_id   = $request->rol_id;
            $roleForAdmin->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(RoleForAdmin $roleForAdmin)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $roleForAdmin->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }


    public static function validateAdmin(){

        if ( Auth::guard('admin')->user()->id != 1 ) {
            return true;
        };
        return false;
    }

}
