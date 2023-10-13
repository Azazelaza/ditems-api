<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'benefits',
        'company_id',
        'isActive',
    ];

    public function scopeActive($q)
    {
        $q->where('isActive', 1);
    }

    public function scopeCompany($q, $id)
    {
        $q->where('company_id', $id);
    }
}
