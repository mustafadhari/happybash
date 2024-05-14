<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    //
    public function addToWishlist($productId) {
        // Logic to add product to wishlist
        $wishlist = Wishlist::create(['product_id' => $productId]);
        return response()->json($wishlist, 201);
    }

    public function removeFromWishlist($productId) {
        // Logic to remove product from wishlist
        Wishlist::where('product_id', $productId)->delete();
        return response()->json(['message' => 'Product removed from wishlist']);
    }

    public function getWishlist() {
        // Logic to retrieve wishlist items
        $wishlist = Wishlist::all();
        return response()->json($wishlist);
    }
}
