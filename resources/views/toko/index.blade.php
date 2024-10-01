@extends('toko.templates.admin-template')

@section('content')
{{-- analytics --}}
<div class="flex flex-wrap justify-between gap-4">
    <div class="bg-white rounded-lg border p-6 flex-1 min-w-[250px]">
      <h2 class="text-xl font-semibold text-gray-800 mb-2">Donated Food</h2>
      <p class="text-3xl font-bold text-green-600">1,234</p>
      <p class="text-sm text-gray-600 mt-2">Total items donated</p>
    </div>

    <div class="bg-white rounded-lg border p-6 flex-1 min-w-[250px]">
      <h2 class="text-xl font-semibold text-gray-800 mb-2">Ready to Pick Up</h2>
      <p class="text-3xl font-bold text-blue-600">567</p>
      <p class="text-sm text-gray-600 mt-2">Items available for collection</p>
    </div>

    <div class="bg-white rounded-lg border p-6 flex-1 min-w-[250px]">
      <h2 class="text-xl font-semibold text-gray-800 mb-2">In Distribution</h2>
      <p class="text-3xl font-bold text-orange-600">89</p>
      <p class="text-sm text-gray-600 mt-2">Items currently being distributed</p>
    </div>
  </div>


<div class="flex justify-between items-center my-6">
    <h2 class="text-3xl font-bold">Donations</h2>
    <a href="{{ route('toko.create') }}" @click="isDialogOpen = true" class="bg-black text-white hover:bg-gray-900  px-4 py-2 rounded-lg flex items-center">
        <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Add Donation
    </a>
</div>

  <!-- Table -->
<div class="bg-white dark:bg-gray-900 rounded-lg overflow-hidden border">
    <table class="min-w-full text-left">
        <thead class="border-b border-gray-200 dark:border-gray-800">
            <tr>
                <th class="px-4 py-2">Food Item</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Expiry Date</th>
                <th class="px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donations as $donation)
                <tr>
                    <td class="px-4 py-2">{{ $donation->food_item }}</td>
                    <td class="px-4 py-2">{{ $donation->quantity }}</td>
                    <td class="px-4 py-2">{{ $donation->expiry_date }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded-full text-xs bg-green-200 text-green-800 dark:bg-green-900 dark:text-green-200">{{ ucfirst($donation->status) }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
