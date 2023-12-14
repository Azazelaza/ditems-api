<?php

namespace App\Http\Controllers;

use App\Models\AddressInvoice;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AddressInvoiceController extends Controller
{
    public function index(Request $request)
    {
        try {
            $address = AddressInvoice::paginate(15);
            return Response()->json(['success' => true, 'data' => $address]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
    function show($id)
    {
        try {
            $address = AddressInvoice::find($id);
            return Response()->json(['success' => true, 'data' => $address]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    /**
     * Display the specified by user.
     */
    function showByUser($id)
    {
        try {
            $adresses = AddressInvoice::user($id)->get();
            return Response()->json(['success' => true, 'data' => $adresses]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }

    function store(Request $request)
    {
        try {
            $address = AddressInvoice::createOrUpdate(['user_id' => $request->user()->id], $request->all());
            return Response()->json(['success' => true, 'message' => 'Se guardó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al guardar.', 'error' => $error]);
        }
    }
    public function update(Request $request, $idAddressInvoice)
    {
        try {
            $address = AddressInvoice::find($idAddressInvoice);
            if (!$address) {
                return Response()->json(['success' => false, 'message' => 'Dirección de Factura no encontrada..', 'error' => '']);
            }
            $address->state_id          = $request->state_id;
            $address->country_id        = $request->country_id;
            $address->business_name     = $request->business_name;
            $address->rfc               = $request->rfc;
            $address->street            = $request->street;
            $address->suburb            = $request->suburb;
            $address->number_outside    = $request->number_outside;
            $address->number_inside     = $request->number_inside;
            $address->city              = $request->city;
            $address->save();
            return Response()->json(['success' => true, 'message' => 'Se actualizó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al actualizar.', 'error' => $error]);
        }
    }
    function destroy(AddressInvoice $address)
    {
        try {
            $address->delete();
            return Response()->json(['success' => true, 'message' => 'Se eliminó correctamente.']);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al eliminar.', 'error' => $error]);
        }
    }

    /**
     * Store the specified by tax_certificate.
     */
    function uploadTaxCertificate(Request $request)
    {
        $uuidDocumento      = Uuid::uuid4();
        $extension          = $request->File('tax_certificate')->getClientOriginalExtension();
        Storage::disk('uploadInvoiceTaxCertificate')->put("/{$uuidDocumento}.{$extension}", File::get($request->File('tax_certificate')));

        return Response()->json(['success' => true, 'data' => "{$uuidDocumento}.{$extension}"]);
    }

    /**
     * download the specified by tax_certificate.
     */
    function downloadTaxCertificate($id)
    {
        try {
            $address = AddressInvoice::find($id);
            return Storage::disk('uploadAddressTaxCertificate')->download($address->tax_certificate, $address->name_tax_certificate);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'data' => [], 'error' => $error]);
        }
    }
}
