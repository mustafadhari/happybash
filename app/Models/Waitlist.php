<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'start_date', 'end_date'];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
