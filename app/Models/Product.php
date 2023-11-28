<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'available_quantity',
        'subcategory_id',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function productServiceableAreas()
    {
        return $this->hasMany(ProductServiceableArea::class);
    }

    public function addons()
    {
        return $this->belongsToMany(Addon::class)->withPivot('quantity');
    }

}
