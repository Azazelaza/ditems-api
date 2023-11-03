<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\RoleForAdmin;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        try{
            $products = Product::active()->paginate(15);
            return Response()->json(['success' => true, 'data' => $products]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try{
            $product = Product::findOrFail($id);
            return Response()->json(['success' => true, 'data' => $product]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function showByCompany($id)
    {
        try{
            $product = Product::active()->company($id)->get();
            return Response()->json(['success' => true, 'data' => $product]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function store(Request $request)
    {
        try{
            Product::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $idProduct)
    {
        try{
            $product = Product::find($idProduct);
            if (!$product) {
                return Response()->json(['success' => false, 'message' => 'Producto no encontrado..', 'error' => '']);
            }
            $product->name          = $request->name;
            $product->subtitle      = $request->subtitle;
            $product->description   = $request->description;
            $product->price         = $request->price;
            $product->image         = $request->image;
            $product->company_id    = $request->company_id;
            $product->isActive      = $request->isActive;
            $product->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }

    /**
     * Upload Image Product.
     */
    function uploadImageProduct(Request $request)
    {
        try{
            $product = Product::find(($request->all()['id']));
            $uuidDocumento      = Uuid::uuid4();
            $extension          = $request->File('image')->getClientOriginalExtension();
            if (Storage::disk('uploadImageProduct')->exists("{$product->image}")) {
                Storage::disk('uploadImageProduct')->delete("{$product->image}");             
            }
            
            Storage::disk('uploadImageProduct')->put("/{$product->id}/{$uuidDocumento}.{$extension}",File::get($request->File('image')));
            $product->image     = "/{$product->id}/{$uuidDocumento}.{$extension}";
            $product->gallery   = storage_path("/{$product->id}");
            $product->save();
            return Response()->json(['success' => true]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    /**
     * Upload Image Product.
     */
    function uploadGalleryProduct(Request $request)
    {
        try{
            $uuidDocumento      = Uuid::uuid4();
            $extension          = $request->File('image')->getClientOriginalExtension();
            Storage::disk('uploadImageProduct')->put("/{$request->all()['id']}/{$uuidDocumento}.{$extension}",File::get($request->File('image')));
            return Response()->json(['success' => true]);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function destroy(Product $product)
    {
        try{            
            $product->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }
    function destroyGalleryProduct(Request $request)
    {
        try{            
            if (Storage::disk('uploadImageProduct')->exists("/{$request->all()['id']}/{$request->all()['image_name']}")) {
                Storage::disk('uploadImageProduct')->delete("/{$request->all()['id']}/{$request->all()['image_name']}");             
            }
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        }catch(Exception $error){
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }

    public static function validateAdmin(){

        if ( !RoleForAdmin::admin(Auth::guard('admin')->user()->id)->product()->exists() && Auth::guard('admin')->user()->id != 1 ) {
            return true;
        };
        return false;
    }
}
