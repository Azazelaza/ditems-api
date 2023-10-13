<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $cities = City::paginate(15);
            return Response()->json(['success' => true, 'data' => $cities]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $city = City::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $city = City::find($id);
            return Response()->json(['success' => true, 'data' => $city]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by state.
     */
    function showByState($id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $cities = City::state($id)->get();
            return Response()->json(['success' => true, 'data' => $cities]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $city = City::find($id);
            if (!$city) {
                return Response()->json(['success' => false, 'message' => 'Ciudad no encontrada.', 'error' => '']);
            }
            $city->name        = $request->name;
            $city->state_id  = $request->state_id;
            $city->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $city->delete();
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
