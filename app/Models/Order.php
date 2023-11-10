<?php

namespace App\Models;

use Carbon\Carbon;
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
        'info_mp',
        'payment_date',
        'cancel_date',
    ];

    protected $casts = [
        'address_shipping' => 'json',
        'products' => 'json',
        'info_mp' => 'json',
    ];

    public $with = [
        'user'
    ];

    /* public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d H:i');
    } */

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
