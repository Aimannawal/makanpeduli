@extends('toko.templates.admin-template')

@section('content')
<div class="container mx-auto p-6 bg-gray-50">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Permintaan Donasi</h1>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left border-b border-gray-200">
                        <th class="py-3 px-4 font-semibold text-sm text-gray-600">ID</th>
                        <th class="py-3 px-4 font-semibold text-sm text-gray-600">Makanan</th>
                        <th class="py-3 px-4 font-semibold text-sm text-gray-600">Jumlah</th>
                        <th class="py-3 px-4 font-semibold text-sm text-gray-600 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($donationRequests as $request) --}}
                        <tr class="border-b border-gray-100 last:border-b-0">
                            <td class="py-3 px-4 text-sm text-gray-700"></td>
                            <td class="py-3 px-4 text-sm text-gray-700"></td>
                            <td class="py-3 px-4 text-sm text-gray-700"></td>
                            <td class="py-3 px-4 text-center">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-blue-500 text-white text-sm font-medium py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                        Setujui
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {{-- @empty --}}
                        <tr>
                            <td colspan="4" class="py-6 text-center text-gray-500">Tidak ada permintaan donasi saat ini.</td>
                        </tr>
                    {{-- @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>

    {{-- @if ($donationRequests->hasPages()) --}}
        <div class="mt-6">
            {{-- {{ $donationRequests->links() }} --}}
        </div>
    {{-- @endif --}}
</div>
@endsection

@push('styles')
<style>
    /* Custom styles for pagination */
    .pagination {
        @apply flex justify-center items-center space-x-2 mt-4;
    }
    .pagination > * {
        @apply px-3 py-1 rounded-md text-sm font-medium;
    }
    .pagination > .active {
        @apply bg-blue-500 text-white;
    }
    .pagination > *:not(.active) {
        @apply bg-white text-gray-700 hover:bg-gray-100;
    }
</style>
@endpush
