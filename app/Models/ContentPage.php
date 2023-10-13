<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPage extends Model
{
    use HasFactory;
    public $fillable = [
        'data',
        'company_id'
    ];

    public $casts = [
        'data' => 'json'
    ];
}
