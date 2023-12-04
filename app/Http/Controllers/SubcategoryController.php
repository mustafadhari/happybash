<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
}
