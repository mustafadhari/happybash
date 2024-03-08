<?php

use App\Models\LabelTranslation;
use Illuminate\Http\Request;

class LabelTranslationController extends Controller
{
    public function insert(Request $request)
    {
        $request->validate([
            'en' => 'required|string',
            'ar' => 'required|string',
        ]);

        $label = LabelTranslation::create($request->only(['en', 'ar']));

        return response()->json($label, 201);
    }

    public function get($label_id)
    {
        $label = LabelTranslation::find($label_id);

        if (!$label) {
            return response()->json(['message' => 'Label not found'], 404);
        }

        return response()->json($label);
    }
}

