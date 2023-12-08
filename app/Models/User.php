<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Add 'role' attribute
        'phone', // Add 'phone' attribute
        'address', // Add 'address' attribute
        'avatar', // Add 'avatar' or 'profile_picture' attribute for profile picture
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Define a method to check if the user is an admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Define a method to check if the user is a vendor
    public function isVendor()
    {
        return $this->role === 'vendor';
    }

    // Define a method to retrieve the user's role
    public function getRole()
    {
        return $this->role;
    }

    // Define a method to check if the user has completed their profile
    public function hasProfile()
    {
        return $this->role === 'vendor' && $this->vendor()->exists();
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id'); // 'location_id' is the foreign key in the users table.
    }
}



