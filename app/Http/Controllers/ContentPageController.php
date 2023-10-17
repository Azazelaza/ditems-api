<?php

namespace App\Http\Controllers;

use App\Models\ContentPage;
use Carbon\Exceptions\Exception as ExceptionsException;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentPageController extends Controller
{
    public function show($id)
    {
        try {
            $page = ContentPage::find($id);
            return Response()->json(['success' => true, 'data' => $page]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $page = ContentPage::find($id);
            if (!$page) {
                ContentPage::create([
                    'company_id' => $request->company_id,
                    'data' => $request->data,
                ]);
            } else {
                $page->company_id  = $request->company_id;
                $page->data        = $request->data;
                $page->save();
            }
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        } catch (ExceptionsException $error) {
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function uploadImage(Request $request)
    {
        try {
            $uuidDocumento      = Uuid::uuid4();
            $extension          = $request->File('image')->getClientOriginalExtension();

            Storage::disk('public')->put("/{$request->nombre_imagen}/{$uuidDocumento}.{$extension}", File::get($request->File('image')));
            return Response()->json(['success' => true, 'data' => env("APP_URL") . "/storage/{$request->nombre_imagen}/{$uuidDocumento}.{$extension}"]);
        } catch (ExceptionsException $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
}
