<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Invoice extends Model
{
    use HasFactory;
    const SIN_CARGAR        = 1;
    const CARGADA           = 2;
    const CARGADAYDESCARGADA = 3;

    protected $fillable = [
        'address_invoice',
        'rfc',
        'cfdi',
        'tax_certificate',
        'status',
        'order_id',
        'user_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'idOrder', 'order_id');
    }
}
