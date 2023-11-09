<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use MercadoPago\Item;
use MercadoPago\Payer;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;

class MercadoPagoController extends Controller
{
    //USERID 1395469848
    //NUM APP 4448855768717681
    //public-key TEST-9f69ef54-f8aa-4ca2-b12d-dd823f1766ff
    function create(Request $request)
    {
        SDK::setAccessToken('TEST-4448855768717681-060914-eb532ab893d72ec38890ab9ec1a97133-1395469848');
        $transaction = $request->transaction;

        if ($transaction) {
            $payment = new Payment();
            $payment->transaction_amount = $transaction['transaction_amount'];
            $payment->token = $transaction['token'];
            $payment->installments = $transaction['installments'];
            $payment->payment_method_id = $transaction['payment_method_id'];
            $payment->issuer_id = $transaction['issuer_id'];
            $payer = new Payer();
            $payer->email = $transaction['payer']['email'];
            $payment->payer = $payer;
            $payment->save();
            $response = array(
                'status' => $payment->status,
                'status_detail' => $payment->status_detail,
                'id' => $payment->id
            );
        }

        $order = Order::create([
            'address_shipping' => json_encode($request->address),
            'products' => json_encode($request->product),
            'price' => $request->product['price'],
            'status' => Order::CAPTURA,
            'user_id' => $request->user()->id,
            'payment_date' => date('l')
        ]);

        return Response()->json(['success' => true, 'data' => $order, 'payment' => $response]);
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
