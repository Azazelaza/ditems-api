<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        try{
            $order = Order::paginate(15);
            return Response()->json(['success' => true, 'data' => $order]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $order = Order::find($id);
            return Response()->json(['success' => true, 'data' => $order]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function store(Request $request)
    {
        try{
            $request->merge(['status' => Order::CAPTURA]);
            $order = Order::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $id)
    {
        try{
            $order = Order::find($id);
            if (!$order) {
                return Response()->json(['success' => false, 'message' => 'Orden no encontrada..', 'error' => '']);
            }
            if ($order->status != Order::CAPTURA) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->address_shipping    = $request->address_shipping;
            $order->products            = $request->products;
            $order->price               = $request->price;
            $order->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Order $order)
    {
        try{
            if ($order->status != Order::CAPTURA) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }

    function sendPending(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $order = Order::find($request->id);
            if ($order->status != Order::CAPTURA) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status = Order::PENDIENTE_PAGO;
            $order->save();
            return Response()->json(['success' => true]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al cambiar estatus.', 'error' => $error]);
        }
    }

    function sendCancel(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $order = Order::find($request->id);
            if ($order->status != Order::PENDIENTE_PAGO) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status      = Order::ORDEN_CANCELADA;
            $order->cancel_date = $request->cancel_date;
            $order->save();
            return Response()->json(['success' => true]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al cambiar estatus.', 'error' => $error]);
        }
    }

    function sendPaid(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $order = Order::find($request->id);
            if ($order->status != Order::PENDIENTE_PAGO) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status = Order::PAGADO;
            $order->payment_date = $request->payment_date;
            $order->save();
            return Response()->json(['success' => true]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al cambiar estatus.', 'error' => $error]);
        }
    }

    public static function validateAdmin(){

        if ( !RoleForAdmin::admin(Auth::guard('admin')->user()->id)->tickets()->exists() && Auth::guard('admin')->user()->id != 1 ) {
            return true;
        };
        return false;
    }
}
