<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\RoleForAdmin;
use Exception;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function index()
    {
        try {
            $membership = Membership::active()->paginate(15);
            
            return Response()->json(['success' => true, 'data' => $membership]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try {
            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $membership = Membership::find($id);
            return Response()->json(['success' => true, 'data' => $membership]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by company.
     */
    function showByCompany($id)
    {
        try {
            $memberships = Membership::company($id)->get();
            return Response()->json(['success' => true, 'data' => $memberships]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    function store(Request $request)
    {
        try {
            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $membership = Membership::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $Membership)
    {
        try {
            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $membership = Membership::find($Membership);
            if (!$membership) {
                return Response()->json(['success' => false, 'message' => 'Membresía no encontrada..', 'error' => '']);
            }
            $membership->name        = $request->name;
            $membership->description = $request->description;
            $membership->price       = $request->price;
            $membership->benefits    = $request->benefits;
            $membership->isActive    = $request->isActive;
            $membership->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Membership $membership)
    {
        try {
            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $membership->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }


    public static function validateAdmin()
    {

        if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->membership()->exists() && Auth::guard('admin')->user()->id != 1) {
            return true;
        };
        return false;
    }
}
