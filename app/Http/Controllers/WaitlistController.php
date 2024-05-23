<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waitlist;

class WaitlistController extends Controller
{
    //
    public function addToWaitlist($productId, Request $request) {
        $waitlist = Waitlist::create([
            'user_id' => auth()->id(), // Assuming user is authenticated
            'product_id' => $productId,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date')
        ]);

        return response()->json($waitlist, 201);
    }

    public function removeFromWaitlist($productId) {
        Waitlist::where('product_id', $productId)
                ->where('user_id', auth()->id()) // Assuming user is authenticated
                ->delete();

        return response()->json(['message' => 'Product removed from waitlist']);
    }

    public function getWaitlist() {
        $waitlist = Waitlist::where('user_id', auth()->id())
            ->with(['product' => function ($query) {
                $query->select('id', 'name', 'price_per_day'); // Select specific columns from products table
                $query->with('images:image_url,alt_text'); // Eager load images relationship with specific attributes
            }])
            ->get();
    
        return response()->json($waitlist);
    }
}
