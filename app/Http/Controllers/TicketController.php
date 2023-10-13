<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\RoleForAdmin;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $ticket = Ticket::active()->paginate(15);
            return Response()->json(['success' => true, 'data' => $ticket]);
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
            $ticket = Ticket::find($id);
            return Response()->json(['success' => true, 'data' => $ticket]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by user.
     */
    function showByUser($id)
    {
        try{
            $tickets = Ticket::user($id)->get();
            return Response()->json(['success' => true, 'data' => $tickets]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by company.
     */
    function showByCompany($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $tickets = Ticket::company($id)->get();
            return Response()->json(['success' => true, 'data' => $tickets]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function store(Request $request)
    {
        try{
            $ticket = Ticket::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $Ticket)
    {
        try{
            $ticket = Ticket::find($Ticket);
            if (!$ticket) {
                return Response()->json(['success' => false, 'message' => 'Ticket no encontrado..', 'error' => '']);
            }
            $ticket->incident           = $request->incident;
            $ticket->description        = $request->description;
            $ticket->request_user_id    = $request->request_user_id;
            $ticket->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Ticket $ticket)
    {
        try{
            $ticket->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }

    public static function validateAdmin(){

        if ( !RoleForAdmin::admin(Auth::guard('admin')->user()->id)->tickets()->exists() && Auth::guard('admin')->user()->id != 1 ) {
            return true;
        };
        return false;
    }

}
