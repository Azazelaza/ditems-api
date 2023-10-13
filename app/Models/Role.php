<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    const PRODUCTS  = 1;
    const MEMBERSHIP= 2;
    const TICKETS   = 3;
    const USERS     = 4;
    const ORDERS    = 5;
    const LOGS      = 6;

    public $fillable = [
        'section',
    ];

    public function scopeProduct($q)
    {
        $q->where('section', 'Products');
    }

    public function scopeMembership($q)
    {
        $q->where('section', 'Membership');
    }

    public function scopeTickets($q)
    {
        $q->where('section', 'Tickets');
    }

    public function scopeUsers($q)
    {
        $q->where('section', 'Users');
    }

    public function scopeOrders($q)
    {
        $q->where('section', 'Orders');
    }

    public function scopeLogs($q)
    {
        $q->where('section', 'Logs');
    }

}
