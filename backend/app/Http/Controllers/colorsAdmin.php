<?php

namespace App\Http\Controllers;

use App\Models\adminColor;
use Illuminate\Http\Request;

class colorsAdmin extends Controller
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
            'header' => 'required',
            'sidebar' => 'required',
            'color_sidebar_judul' => 'required',
            'Button_Active_Sidebar' => 'required',
            'content' => 'required',
        ]);

        adminColor::create([
            'header' => $request->header,
            'sidebar' => $request->sidebar,
            'color_sidebar_judul' => $request->color_sidebar_judul,
            'Button_Active_Sidebar' => $request->Button_Active_Sidebar,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Color settings saved successfully.');
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
