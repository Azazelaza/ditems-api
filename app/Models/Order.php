<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const RECEIVED          = 'Recibida';
    const PROCESS           = 'Procesando';
    const CANCEL            = 'Cancelada';
    const STANDING            = 'En espera';
    const COMPLETE          = 'Completada';
    const SHIP              = 'Enviada';

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
        'user',
    ];

    public $appends = [
        'state'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getStateAttribute()
    {
        return $this->hasOne(State::class, 'id', $this->address_shipping->state_id);
    }
}
