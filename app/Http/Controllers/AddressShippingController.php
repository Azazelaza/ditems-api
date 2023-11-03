<?php

namespace App\Http\Controllers;

use App\Models\AddressShipping;
use Exception;
use Illuminate\Http\Request;

class AddressShippingController extends Controller
{
    public function index(Request $request)
    {
        try{
            $shipping = AddressShipping::paginate(15);
            return Response()->json(['success' => true, 'data' => $shipping]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $shipping = AddressShipping::find($id);
            return Response()->json(['success' => true, 'data' => $shipping]);
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
            $shippings = AddressShipping::user($id)->get();
            return Response()->json(['success' => true, 'data' => $Shippings]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    function store(Request $request)
    {
        try{
            $shipping = AddressShipping::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $idAddressShipping)
    {
        try{
            $shipping = AddressShipping::find($idAddressShipping);
            if (!$shipping) {
                return Response()->json(['success' => false, 'message' => 'Dirección de Envío no encontrada..', 'error' => '']);
            }
            $shipping->state_id          = $request->state_id;
            $shipping->country_id        = $request->country_id;
            $shipping->street            = $request->street;
            $shipping->suburb            = $request->suburb;
            $shipping->number_outside    = $request->number_outside;
            $shipping->number_inside     = $request->number_inside;
            $shipping->reference         = $request->reference;
            $shipping->notes             = $request->notes;
            $shipping->main              = $request->main;
            $shipping->city              = $request->city;
            $shipping->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(AddressShipping $shipping)
    {
        try{
            $shipping->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }
}
