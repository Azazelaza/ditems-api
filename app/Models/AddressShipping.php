<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'city',
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

    protected $with = [
        'state'
    ];

    public function scopeUser($q, $id)
    {
        $q->where('user_id', $id);
    }
    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
}
