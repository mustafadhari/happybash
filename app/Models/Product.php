<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'available_quantity', 'subcategory_id', 'price_per_day', 'rating', 'times_booked', 'included_items', 'not_included_items', 'additional_information', 'terms_conditions'];

    protected $casts = ['included_items' => 'array', 'not_included_items' => 'array', 'additional_information' => 'array', 'terms_conditions' => 'array'];

    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function productServiceableAreas() {
        return $this->hasMany(ProductServiceableArea::class);
    }

    public function addons() {
        return $this->belongsToMany(Addon::class)->withPivot('quantity');
    }

    public function bookings() {
        return $this->belongsToMany(Booking::class);
    }

    public function isAvailableForDates($startDate, $endDate) {
        // Implement availability logic
    }
}
