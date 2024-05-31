<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('quantity');
    }
    
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_addon');
    }
}
