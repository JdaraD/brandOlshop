@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-linear-to-br from-indigo-500 via-purple-500 to-pink-500">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">

        <h2 class="text-3xl font-bold text-center mb-6">Register</h2>

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-400 text-red-200 px-4 py-2 rounded mb-4 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('registerasi.store') }}" class="space-y-5">
            @csrf

            <div>
                <label class="text-sm">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Nama lengkap">
            </div>

            <div>
                <label class="text-sm">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Email">
            </div>

            <div>
                <label class="text-sm">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Nomor telepon">
            </div>

            <div>
                <label class="text-sm">Address</label>
                <input type="text" name="address" value="{{ old('address') }}"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Alamat">
            </div>

            <div>
                <label class="text-sm">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Email">
            </div>

            <div>
                <label class="text-sm">Password</label>
                <input type="password" name="password"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Password">
            </div>

            <div>
                <label class="text-sm">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-white/60"
                    placeholder="Ulangi password">
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 transition duration-300 py-2 rounded-lg font-semibold shadow-md">
                Daftar
            </button>

        </form>

        <p class="text-center text-sm mt-4 text-white/70">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="underline">Login</a>
        </p>

    </div>
</div>
@endsection