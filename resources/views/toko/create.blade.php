@extends('toko.templates.admin-template')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Buat Permintaan Donasi</h1>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">Detail Permintaan</h2>
        </div>

        <form action="{{ route('toko.storeRequest') }}" method="POST" class="p-6">
            @csrf

            <div class="mb-6">
                <label for="food_item" class="block text-sm font-medium text-gray-700 mb-2">Nama Makanan</label>
                <input type="text" name="food_item" id="food_item" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
                    Kirim Permintaan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Add any additional custom styles here */
</style>
@endpush
