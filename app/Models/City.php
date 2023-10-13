<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'state_id'
    ];

    public function scopeState($q, $id)
    {
        $q->where('state_id', $id);
    }
}
