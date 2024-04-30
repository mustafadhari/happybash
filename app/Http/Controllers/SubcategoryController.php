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
        $category = Category::find($category_id);

        if (!$category) {
            throw new NotFoundHttpException('Category not found');
        }

        $subcategories = $category->subcategories()->with('images')->get();

        $formattedSubcategories = $subcategories->map(function ($subcategory) {
            return [
                'id' => $subcategory->id,
                'name' => $subcategory->name,
                'image_url' => $subcategory->images->isNotEmpty() ? $subcategory->images->first()->image_url : null,
                'created_at' => $subcategory->created_at,
                'updated_at' => $subcategory->updated_at,
            ];
        });

        return response()->json($formattedSubcategories);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|string',
            'name' => 'required|max:255',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'category_id' => 'required|string',
            'name' => 'sometimes|max:255',
            'images' => 'sometimes|array',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
