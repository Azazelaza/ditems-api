<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Resources\Payment;
use MercadoPago\Resources\Payment\Payer;

class MercadoPagoController extends Controller
{
    function create(Request $request)
    {
        MercadoPagoConfig::setAccessToken('TEST-189768172833294-091811-4551253209d7f6bf373f3f18b0e4c7e4-349598052');
        $transaction = $request->transaction;

        if ($transaction) {
            MercadoPagoConfig::setAccessToken("YOUR_ACCESS_TOKEN");

            $client = new PaymentClient();
            /* $request_options = new MPRequestOptions();
            $request_options->setCustomHeaders(["X-Idempotency-Key: <SOME_UNIQUE_VALUE>"]); */

            $payment = $client->create([
                "transaction_amount" => (float) $_POST['transactionAmount'],
                "token" => $_POST['token'],
                "installments" => $_POST['installments'],
                "payment_method_id" => $_POST['paymentMethodId'],
                "issuer_id" => $_POST['issuer'],
                "payer" => [
                    "email" => $_POST['email'],
                ]
            ]);
        }

        $order = Order::create([
            'address_shipping' => json_encode($request->address),
            'products' => json_encode($request->product),
            'price' => floatval($request->product['product']['price']) + 150,
            'status' => Order::CAPTURA,
            'user_id' => $request->user()->id,
            'payment_date' => date('Y-m-d H:i:s'),
            'payment_type' => "Mercado pago",
            'info_mp' => json_encode($payment),
        ]);

        return Response()->json(['success' => true, 'data' => $order, 'payment' => $payment]);
    }

    function complete(Request $request)
    {
        try {

            $infoMap        = $request->all();

            $order = Order::find($infoMap['external_reference']);
            if ($order->status != Order::PENDIENTE_PAGO) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status          = Order::PAGADO;
            $order->payment_date    = date('Y-m-d H:i:s');
            $order->payment_type    = $this->convertirTipoPago($infoMap['payment_type']);
            $order->payment_id      = $infoMap['payment_id'];
            $order->info_mp         = json_encode($infoMap);
            $order->save();
            return Response()->json(['success' => true]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al completar pago.', 'error' => $error]);
        }
    }


    function cancelate(Request $request)
    {
        try {

            $infoMap        = $request->all();

            $order = Order::find($infoMap['external_reference']);
            if ($order->status != Order::PENDIENTE_PAGO) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status          = Order::ORDEN_CANCELADA;
            $order->cancel_date     = date('Y-m-d H:i:s');
            $order->payment_type    = $this->convertirTipoPago($infoMap['payment_type']);
            $order->payment_id      = $infoMap['payment_id'];
            $order->info_mp         = json_encode($infoMap);
            $order->save();
            return Response()->json(['success' => true]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al cancelar pago.', 'error' => $error]);
        }
    }


    function process(Request $request)
    {
        try {

            $infoMap        = $request->all();

            $order = Order::find($infoMap['external_reference']);
            if ($order->status != Order::PENDIENTE_PAGO) {
                return Response()->json(['success' => false, 'message' => 'Estatus inválido.', 'error' => '']);
            }
            $order->status          = Order::EN_PROCESO;
            $order->payment_type    = $this->convertirTipoPago($infoMap['payment_type']);
            $order->payment_id      = $infoMap['payment_id'];
            $order->info_mp         = json_encode($infoMap);
            $order->save();
            return Response()->json(['success' => true]);
        } catch (Exception $error) {
            return Response()->json(['success' => false, 'message' => 'Error al procesar pago.', 'error' => $error]);
        }
    }



    /* public function notify()
    {

        $datos = request()->all();

        try {

            SDK::setAccessToken('TEST-4448855768717681-060914-eb532ab893d72ec38890ab9ec1a97133-1395469848');

            //INIT************ VARIABLES REQUERIDAS **************

            $orden = Order::where('payment_id', $datos['data']['id'])->first();

            //END************* VARIABLES REQUERIDAS **************


            //INIT****** VALIDACIÓN ERRROR Y REDIRECCIÓN *********

            if (!$orden) {
                return response()->json([
                    'status'    => false,
                    'message'   => 'Error de Notificación, la orden no se encuentra la orden.'
                ]);
            }

            //END******* VALIDACIÓN ERRROR Y REDIRECCIÓN *********


            //INIT****** ACTUALIZACIÓN DE ORDEN Y CARRITO ********

            $jsonInfoMP                    = json_decode($orden->info_mp);
            $jsonInfoMP->collection_status = 'approved';
            $jsonInfoMP->status            = 'approved';

            $orden->status                  = Order::PAGADO;
            $orden->payment_date            = date('Y-m-d H:i:s');
            $orden->info_mp                 = json_encode($jsonInfoMP);
            $orden->save();

            //END******* ACTUALIZACIÓN DE ORDEN Y CARRITO ********


            //INIT**** ENVIAR CORREO ELECTRÓNICO PAGO EXITOSO ****

            Mail::send('email.pedidoPagoRecibido', ['pedido' => $pedido], function ($message) use ($pedido) {

                $message->from(env('MAIL_FROM_ADDRESS'))
                    ->to($pedido->vcClienteCorreo, $pedido->vcClienteNombre)
                    ->cc('ordenes@sdindustrial.com.mx')
                    ->bcc('ngarza@sdindustrial.com.mx')
                    ->subject('SDI> Pedido Pago Recibido - PWEB' . $pedido->idPedido);
            });

            //END***** ENVIAR CORREO ELECTRÓNICO PAGO EXITOSO ****

            return response()->json([
                'status'    => true,
                'message'   => 'Éxito de Notificación'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'    => false,
                'message'   => 'Error de Notificación',
                'error' => $e
            ]);
        }
    } */


    static function convertirTipoPago($tipoPago)
    {
        $arrayTipoPago = [
            'credit_card'       => 'Tarjeta de crédito',
            'debit_card'        => 'Tarjeta de débito',
            'bank_transfer'     => 'Transferencia',
            'atm'               => 'Cajero',
            'ticket'            => 'Efectivo',
            'available_money'   => 'Moneda mercado pago',

        ];
        return $arrayTipoPago[$tipoPago] ?? $tipoPago;
    }
}
