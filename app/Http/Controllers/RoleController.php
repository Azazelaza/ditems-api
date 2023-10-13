<?php 

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    public function __construct() {
        if ( !Auth::guard('admin')->check() || Auth::guard('admin')->user()->id != 1 ) {
            return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
        };
    }

    public function index(Request $request)
    {
        try{
            $role = Role::paginate(15);
            return Response()->json(['success' => true, 'data' => $role]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $role = Role::find($id);
            return Response()->json(['success' => true, 'data' => $role]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function store(Request $request)
    {
        try{
            $role = Role::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $Role)
    {
        try{
            $role = Role::find($Role);
            if (!$role) {
                return Response()->json(['success' => false, 'message' => 'Rol no encontrado..', 'error' => '']);
            }
            $role->section = $request->section;
            $role->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Role $role)
    {
        try{
            $role->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }
}
