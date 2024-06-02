<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    //
    public function addToWishlist($productId) {
        $wishlist = Wishlist::create([
            'product_id' => $productId,
            'user_id' => auth()->id() // Ensure the user is authenticated
        ]);
        return response()->json($wishlist, 201);
    }

    public function removeFromWishlist($productId) {
        Wishlist::where('product_id', $productId)
                ->where('user_id', auth()->id()) // Ensure it's the user's wishlist item
                ->delete();
        return response()->json(['message' => 'Product removed from wishlist']);
    }

    public function getWishlist() {
        $wishlist = Wishlist::where('user_id', auth()->id())
            ->with(['product' => function ($query) {
                $query->select('id', 'name', 'price_per_day'); 
                $query->with(['images' => function ($query) {
                    $query->select('product_id', 'image_url'); 
                }]);
            }])->get();
    
        return response()->json($wishlist);
    }
}
