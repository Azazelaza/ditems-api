<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'city_id',
        'country_id',
        'street',
        'suburb',
        'number_outside',
        'number_inside',
        'reference',
        'notes',
        'user_id',
        'main',
    ];

    public function scopeUser($q, $id)
    {
        $q->where('user_id', $id);
    }
}
