<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
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
            
            $countries = Country::paginate(15);
            return Response()->json(['success' => true, 'data' => $countries]);
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
            
            $country = Country::create($request->all());
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
            
            $country = Country::find($id);
            return Response()->json(['success' => true, 'data' => $country]);
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
            
            $country = Country::find($id);
            if (!$country) {
                return Response()->json(['success' => false, 'message' => 'Pais no encontrado..', 'error' => '']);
            }
            $country->name = $request->name;
            $country->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        try{
            if ( $this->validateAdmin() ) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            
            $country->delete();
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
