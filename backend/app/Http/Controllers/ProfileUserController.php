<?php

namespace App\Http\Controllers;

use App\Models\profileUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
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
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'gender' => 'nullable|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
        ]);

        // $userData = [];

        // if ($request->filled('name')) {
        //     $userData['name'] = $request->name;
        // }

        // if ($request->filled('email')) {
        //     $userData['email'] = $request->email;
        // }

        // Auth::user()->update($userData);

        // update users table
        Auth::user()->update([
            'name' => $request->name ?? Auth::user()->name,
            'email' => $request->email ?? Auth::user()->email,
        ]);

        $path = $request->file('avatar')->store('avatars', 'public');

        profileUsers::create([
            'user_id' => Auth::id(),
            'avatar' => $path,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
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
