<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident',
        'description',
        'request_user_id',
        'status',
        'company_id',
    ];

    public function scopeUser($q, $id)
    {
        $q->where('request_user_id', $id);
    }

    public function scopeCompany($q, $id)
    {
        $q->where('company_id', $id);
    }
}
