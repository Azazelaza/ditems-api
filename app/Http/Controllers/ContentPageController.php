<?php

namespace App\Http\Controllers;

use App\Models\ContentPage;
use Carbon\Exceptions\Exception as ExceptionsException;
use Exception;
use Illuminate\Http\Request;

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
}
