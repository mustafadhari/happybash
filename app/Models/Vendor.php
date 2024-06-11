<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'business_name',
        'date_of_birth',
        'primary_mobile_number',
        'whatsapp_number',
        'email',
        'business_category',
        'city',
        'address',
        'languages',
        'profile_picture',
        'referral_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }


}
