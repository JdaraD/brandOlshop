@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-linear-to-br from-indigo-500 via-purple-500 to-pink-500">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">

            <h2 class="text-3xl font-bold text-center mb-6">Login</h2>

            @if (session('error'))
                <div class="bg-red-500/20 border border-red-400 text-red-200 px-4 py-2 rounded mb-4 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-500/20 border border-green-400 text-green-200 px-4 py-2 rounded mb-4 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit="login" class="space-y-5">

                <div>
                    <label class="text-sm">Email</label>
                    <input 
                        type="email" 
                        wire:model="email"
                        class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                        placeholder="Masukkan email">
                </div>

                <div>
                    <label class="text-sm">Password</label>
                    <input 
                        type="password" 
                        wire:model="password"
                        class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                        placeholder="Masukkan password">
                </div>

                <button 
                    type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 transition duration-300 py-2 rounded-lg font-semibold shadow-md">
                    Login
                </button>

            </form>

            <p class="text-center text-sm mt-4 text-white/70">
                Belum punya akun? <span class="underline cursor-pointer">Daftar</span>
            </p>

        </div>

    </div>
@endsection