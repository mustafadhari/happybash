<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function serviceableAreas()
    {
        return $this->hasMany(ServiceableArea::class);
    }

    public function addons()
    {
        return $this->belongsToMany(Addon::class)->withPivot('quantity');
    }

}
