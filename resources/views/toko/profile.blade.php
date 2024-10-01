<!-- resources/views/toko/profile.blade.php -->

@extends('toko.templates.admin-template')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-3xl font-bold mb-6">Lengkapi Profil Anda</h2>

    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('toko.profile.update') }}" method="POST" class="bg-white shadow-md rounded-lg p-8">
        @csrf
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" readonly>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
            <input type="text" name="address" id="address" value="{{ old('address', auth()->user()->address) }}" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label for="restaurant_name" class="block text-sm font-medium text-gray-700">Nama Restoran (Opsional)</label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="{{ old('restaurant_name', auth()->user()->restaurant_name) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-md">Simpan</button>
        </div>
    </form>
</div>
@endsection
