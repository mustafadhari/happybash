<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    public function uploadDocument(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vendor_id' => 'required|exists:vendors,id',
            'document_type' => 'required|string|in:civil_card,other_document_1,other_document_2',
            'document' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $path = $request->file('document')->store('documents');

        Document::create([
            'vendor_id' => $request->vendor_id,
            'document_type' => $request->document_type,
            'document_path' => $path,
        ]);

        return response()->json(['message' => 'Document uploaded successfully.', 'path' => $path]);
    }
}