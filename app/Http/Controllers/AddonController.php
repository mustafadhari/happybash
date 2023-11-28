<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addon;

class AddonController extends Controller
{
    public function index()
    {
        $addons = Addon::all();
        return view('addons.index', ['addons' => $addons]);
    }

    public function create()
    {
        return view('addons.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add other fields as necessary
        ]);

        $addon = Addon::create($request->validated());
        return redirect()->route('addons.index');
    }

    public function show(Addon $addon)
    {
        return view('addons.show', ['addon' => $addon]);
    }

    public function edit(Addon $addon)
    {
        return view('addons.edit', ['addon' => $addon]);
    }

    public function update(Request $request, Addon $addon)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add other fields as necessary
        ]);

        $addon->update($request->validated());
        return redirect()->route('addons.index');
    }

    public function destroy(Addon $addon)
    {
        $addon->delete();
        return redirect()->route('addons.index');
    }
}
