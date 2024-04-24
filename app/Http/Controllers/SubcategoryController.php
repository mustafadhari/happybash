<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    public function index($category_id)
    {
        // Check if the category exists
        $category = Category::find($category_id);
        if (!$category) {
            throw new NotFoundHttpException('Category not found');
        }

        // Fetch subcategories associated with the category
        $subcategories = $category->subcategories()->get();

        return response()->json($subcategories);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Other validations as necessary
        ]);

        $subcategory = SubCategory::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('subcategory_images', 'public');
                $url = Storage::disk('public')->url($path);

                $subcategory->images()->create(['image_url' => $url]);
            }
        }

        return response()->json($subcategory, 201);
    }

    public function update(Request $request, $subcategoryId)
    {
        $subcategory = SubCategory::findOrFail($subcategoryId);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            // Other validations as necessary
        ]);

        $subcategory->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('subcategory_images', 'public');
                $url = Storage::disk('public')->url($path);

                $subcategory->images()->create(['image_url' => $url]);
            }
        }

        return response()->json($subcategory);
    }
}
