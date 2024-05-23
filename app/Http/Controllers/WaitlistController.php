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
            ->with(['product.images' => function ($query) {
                $query->select('id', 'product_id', 'image_url'); // Select specific columns from product_images table
            }])
            ->get();
    
        return response()->json($waitlist);
    }
}
