<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class RoleForAdmin extends Model
{
    use HasFactory;

    public $fillable = [
        'admin_id',
        'rol_id',
    ];
    
    public function scopeAdmin($q, $id)
    {
        $q->where('admin_id', $id);
    }

    public function scopeRol($q, $id)
    {
        $q->where('rol_id', $id);
    }
    
    public function scopeProduct($q)
    {
        $q->where('rol_id', Role::PRODUCTS);
    }

    public function scopeMembership($q)
    {
        $q->where('rol_id', Role::MEMBERSHIP);
    }

    public function scopeTickets($q)
    {
        $q->where('rol_id', Role::TICKETS);
    }

    public function scopeUsers($q)
    {
        $q->where('rol_id', Role::USERS);
    }

    public function scopeOrders($q)
    {
        $q->where('rol_id', Role::ORDERS);
    }

    public function scopeLogs($q)
    {
        $q->where('rol_id', Role::LOGS);
    }
}
