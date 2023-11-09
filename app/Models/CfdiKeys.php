<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CfdiKeys extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'key',
        'description'
    ];

    protected $appends = [
        'name'
    ];

    public function getNameAttribute()
    {
        return $this->key . " - " . $this->description;
    }
}
