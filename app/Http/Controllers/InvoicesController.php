<?php

namespace App\Http\Controllers;

use App\Models\CfdiKeys;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\RoleForAdmin;
use Carbon\Exceptions\Exception as ExceptionsException;
use Exception;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    public function index(Request $request)
    {
        try {
            $invoice = Invoice::paginate(15);
            return Response()->json(['success' => true, 'data' => $invoice]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try {
            $invoice = Invoice::find($id);
            return Response()->json(['success' => true, 'data' => $invoice]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function showCfdi()
    {
        $cfdi = CfdiKeys::all();
        return Response()->json(['success' => true, 'data' => $cfdi]);
    }
    function store(Request $request)
    {
        try {
            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            /* $request->merge(['status' => Invoice::SIN_CARGAR]); */
            $invoice = Invoice::create($request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $Invoice)
    {
        try {

            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $invoice = Invoice::find($Invoice);
            if (!$invoice) {
                return Response()->json(['success' => false, 'message' => 'Factura no encontrada..', 'error' => '']);
            }
            $order = $invoice->order();
            /* if (!in_array($order->status, [Order::RECEIVED, Order::PENDIENTE_PAGO])) {
                return Response()->json(['success' => false, 'message' => 'Estatus de orden inválida.', 'error' => '']);
            } */
            $invoice->address_invoice   = $request->address_invoice;
            $invoice->rfc               = $request->rfc;
            $invoice->cfdi              = $request->cfdi;
            $invoice->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(Invoice $invoice)
    {
        try {

            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };
            $invoice->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }

    /**
     * download the specified by tax_certificate.
     */
    function downloadTaxCertificate($id)
    {
        try {

            if ($this->validateAdmin()) {
                return Response()->json(['success' => false, 'data' => [], 'error' => '', 'message' => 'No autorizado.']);
            };

            $invoice = Invoice::find($id);
            $invoice->status = Invoice::CARGADAYDESCARGADA;
            $invoice->save();
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    public static function validateAdmin()
    {

        if (!RoleForAdmin::admin(Auth::guard('admin')->user()->id)->orders()->exists() && Auth::guard('admin')->user()->id != 1) {
            return true;
        };
        return false;
    }
}
