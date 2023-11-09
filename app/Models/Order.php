<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const CAPTURA           = 'Captura';
    const PENDIENTE_PAGO    = 'Pendiente de pago';
    const ORDEN_CANCELADA   = 'Orden cancelada';
    const EN_PROCESO        = 'En Proceso';
    const PAGADO            = 'Pagada';

    protected $fillable = [
        'address_shipping',
        'products',
        'price',
        'status',
        'user_id',
        'payment_type',
        'payment_date',
        'cancel_date',
    ];
}
