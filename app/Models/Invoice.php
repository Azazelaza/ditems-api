<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Invoice extends Model
{
    use HasFactory;
    const RECEIVED          = 1;
    const PROCESS           = 3;
    const CANCEL            = 6;
    const STANDING            = 4;
    const COMPLETE          = 5;
    const SHIP              = 2;

    protected $fillable = [
        'address_invoice',
        'rfc',
        'cfdi',
        'business_name',
        'tax_certificate',
        'status',
        'order_id',
        'user_id',
    ];

    protected $casts = [
        'address_invoice' => 'json',
    ];

    protected $appends = [
        'status_name'
    ];

    protected $with = [
        'cfdis'
    ];

    function getStatusNameAttribute()
    {
        switch ($this->status) {
            case self::RECEIVED:
                return 'Recibido';
            case self::PROCESS:
                return 'Procesando';
            case self::CANCEL:
                return 'Cancelada';
            case self::STANDING:
                return 'En espera';
            case self::COMPLETE:
                return 'Completada';
            case self::SHIP:
                return 'Enviada';
            default:
                return $this->status;
        }
    }

    public function cfdis()
    {
        return $this->hasOne(CfdiKeys::class, 'id', 'cfdi');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'idOrder', 'order_id');
    }
}
