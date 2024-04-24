<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Other validations as necessary
        ]);

        $category = Category::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('category_images', 'public');
                $url = Storage::disk('public')->url($path);

                $category->images()->create(['image_url' => $url]);
            }
        }

        return response()->json($category, 201);
    }

    public function update(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            // Other validations as necessary
        ]);

        $category->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('category_images', 'public');
                $url = Storage::disk('public')->url($path);

                $category->images()->create(['image_url' => $url]);
            }
        }

        return response()->json($category);
    }
}
