<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subtitle',
        'description',
        'price',
        'company_id',
        'image',
        'isActive',
    ];
    protected $appends = [
        'principal_image',
        'gallery'
    ];
    public function scopeActive($q)
    {
        $q->where('isActive', 1);
    }
    public function scopeCompany($q, $id)
    {
        $q->where('company_id', $id);
    }
    public function getPrincipalImageAttribute()
    {
        return $this->image;
    }
    public function getGalleryAttribute()
    {
        return $this->image;
    }
}
