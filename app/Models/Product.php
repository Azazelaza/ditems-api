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
        return storage_path("/product/{$this->image}");
    }
    public function getGalleryAttribute()
    {
        $dir1       = storage_path("app/product/{$this->id}/*.{jpg,gif,png}");
        $arrayURL   = glob($dir1, GLOB_BRACE);
        return $arrayURL;
    }

}
