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
        'email'
    ];

    protected $appends = [
        'status_name',
    ];

    public function scopeUser($q, $id)
    {
        $q->where('request_user_id', $id);
    }

    public function scopeCompany($q, $id)
    {
        $q->where('company_id', $id);
    }
    public function scopeActive($q, $id)
    {
        $q->whereIn('status', [1, 2, 4]);
    }

    public function getStatusNameAttribute()
    {
        $status_name = "Ticket Activo";

        if ($this->status == 2) {
            $status_name = "En proceso";
        } else if ($this->status == 3) {
            $status_name = "Completado";
        } else if ($this->status == 4) {
            $status_name = "En espera";
        } else if ($this->status == 5) {
            $status_name = "Cancelado";
        }
        return $status_name;
    }
}
