<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'country_id'
    ];

    public function scopeCountry($q, $id)
    {
        $q->where('country_id', $id);
    }
}
