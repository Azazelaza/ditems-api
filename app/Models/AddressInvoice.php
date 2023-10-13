<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'city_id',
        'country_id',
        'business_name',
        'rfc',
        'street',
        'suburb',
        'number_outside',
        'number_inside',
        'user_id',
    ];

    public function scopeUser($q, $id)
    {
        $q->where('user_id', $id);
    }
}
