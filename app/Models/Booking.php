<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_id', 'start_datetime', 'end_datetime', 'status', 'price'];

    protected $casts = ['start_datetime' => 'datetime', 'end_datetime' => 'datetime'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function addons() {
        return $this->belongsToMany(Addon::class);
    }

    public function calculateTotalPrice() {
        $bookingDays = $this->start_datetime->diffInDays($this->end_datetime) + 1; // +1 to include both start and end days
    
        // Base price calculation for the main product, assuming 'price_per_day' attribute
        $total = $this->products->sum(function ($product) use ($bookingDays) {
            return $product->price_per_day * $bookingDays;
        });
    
        // Add price of each add-on, assuming add-ons also have 'price_per_day'
        $total += $this->addons->sum(function ($addon) use ($bookingDays) {
            return $addon->pivot->quantity * $addon->price_per_day * $bookingDays;
        });
    
        // Add price of each service, assuming services also have 'price_per_day'
        $total += $this->services->sum(function ($service) use ($bookingDays) {
            return $service->price_per_day * $bookingDays;
        });
    
        return $total;
    }
    
}
