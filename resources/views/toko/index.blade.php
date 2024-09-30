@extends('toko.templates.admin-template')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Permintaan Donasi</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
            Tambah Permintaan
        </button>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="flex border-b border-gray-200">
            <button class="px-4 py-2 text-sm font-medium text-blue-600 border-b-2 border-blue-600">Semua</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Aktif</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Draft</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Diarsipkan</button>
        </div>

        <table class="w-full">
            <thead>
                <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <th class="px-6 py-3">Nama Makanan</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Jumlah</th>
                    <th class="px-6 py-3">Total Donasi</th>
                    <th class="px-6 py-3">Dibuat pada</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="{{ asset('images/food-placeholder.jpg') }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500"></td>
                        <td class="px-6 py-4 text-sm text-gray-500">0</td>
                        <td class="px-6 py-4 text-sm text-gray-500"></td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <button class="text-gray-400 hover:text-gray-500">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Add any additional custom styles here */
</style>
@endpush
