<?php

namespace App\Http\Controllers;

use App\Models\profileWebsite;
use Illuminate\Http\Request;

class ProfileWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = profileWebsite::first();

        if (!$profile) {
            return response()->json([
                'message' => 'Profile not found'
            ], 404);
        }

        return response()->json([
            'data' => [
                'id' => $profile->id,
                'name' => $profile->name,
                'email' => $profile->email,
                'logo' => url('storage/' . $profile->logo),
                'sm_facebook' => $profile->sm_facebook,
                'sm_instagram' => $profile->sm_instagram,
                'to_tiktok' => $profile->to_tiktok,
                'to_shoppee' => $profile->to_shoppee,
                'to_tokopedia' => $profile->to_tokopedia,
                'address' => $profile->address,
                'profile_description' => $profile->profile_description,
            ]
        ]);
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
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'sm_facebook' => 'nullable|string',
            'sm_instagram' => 'nullable|string',
            'to_tiktok' => 'nullable|string',
            'to_shoppee' => 'nullable|string',
            'to_tokopedia' => 'nullable|string',
            'address' => 'nullable|string',
            'profile_description' => 'required|string',
        ]);

        $logoPath = $request->file('logo')->store('logos', 'public');

        profileWebsite::create([
            'logo' => $logoPath,
            'name' => $request->name,
            'email' => $request->email,
            'sm_facebook' => $request->sm_facebook,
            'sm_instagram' => $request->sm_instagram,
            'to_tiktok' => $request->to_tiktok,
            'to_shoppee' => $request->to_shoppee,
            'to_tokopedia' => $request->to_tokopedia,
            'address' => $request->address,
            'profile_description' => $request->profile_description,
        ]);
            

        return back()->with('success', 'Profile website created successfully.');
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
