<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter by subcategory_id
        if ($request->has('subcategory_id')) {
            $query->where('subcategory_id', $request->input('subcategory_id'));
        }

        // Filter by start and end date availability
        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereDate('availability_start_date', '<=', $request->input('start_date'))
                ->whereDate('availability_end_date', '>=', $request->input('end_date'));
        }

        // Filter by location_id
        if ($request->has('location_id')) {
            $query->where('location_id', $request->input('location_id'));
        }

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price_per_day', [$request->input('min_price'), $request->input('max_price')]);
        }

        $products = $query->with('subcategory', 'images')->get();

        return response()->json($products);
    }


    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {
         $product = Product::with('subcategory', 'images')->findOrFail($id);
         if (request()->wantsJson()) {
                return response()->json($product);
        } else {
            return response()->view('product-details', ['product' => $product]);
        }
     }

     public function showProducts($subcategoryId) {
        $products = Product::where('subcategory_id', $subcategoryId)->get();
        return view('product-list', ['products' => $products]);
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'available_quantity' => 'required|integer|min:0',
            'subcategory_id' => 'required|exists:subcategories,id',
            'price_per_day' => 'required|numeric|min:0',
            'included_items' => 'required|array',
            'not_included_items' => 'required|array',
            'additional_information' => 'required|array',
            'terms_conditions' => 'required|array',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Retrieve only validated data
        $validatedData = $validator->validated();

        // Create a new product with validated data
        $product = Product::create($validatedData);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public'); // Store images in the 'product_images' directory in public disk
                $url = Storage::disk('public')->url($path); // Get the URL of the stored image
    
                // Create a new ProductImage for each image
                $product->images()->create(['image_url' => $url]);
            }
        }
        // Encode the data to JSON with options to prevent escaping
        $jsonResponse = json_encode($product, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        // Return the JSON response with the appropriate headers
        return response($jsonResponse)->header('Content-Type', 'application/json');
        //return response()->json($product, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|max:255',
            'description' => 'sometimes|required',
            'available_quantity' => 'sometimes|required|integer|min:0',
            'subcategory_id' => 'sometimes|required|exists:subcategories,id',
            'price_per_day' => 'sometimes|required|numeric|min:0',
            'included_items' => 'sometimes|required|array',
            'not_included_items' => 'sometimes|required|array',
            'additional_information' => 'sometimes|required|array',
            'terms_conditions' => 'sometimes|required|array',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Retrieve only validated data
        $validatedData = $validator->validated();

        $product->update($validatedData);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        foreach ($product->images as $image) {
            // Delete the image file if stored in the filesystem
            Storage::delete($image->image_url); 
            $image->delete(); // Delete the record from the database
        }
        $product->delete();
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Product deleted successfully.']);
        }
        return redirect()->route('products.index');
    }
}

