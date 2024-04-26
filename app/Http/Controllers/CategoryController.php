<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function showCategories()
    {
        $categories = Category::all();
        return view('index', ['categories' => $categories]);
    }

    public function showSubcategories($categoryId) {
        $category = Category::with(['subcategories.images'])
                             ->findOrFail($categoryId);
    
        return view('subcategories', ['category' => $category]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'name' => 'sometimes|max:255',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
