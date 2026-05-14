<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productImages as ModelsProductImages;

class productImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        foreach ($request->file('image') as $image) {

            $path = $image->store('productImage', 'public');

            ModelsProductImages::create([
                'product_id' => $request->product_id,
                'image' => $path,
            ]);
        }

        return back()->with('success', 'Images berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
