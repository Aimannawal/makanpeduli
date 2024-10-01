@extends('toko.templates.admin-template')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold">Donations</h2>
    <a href="{{ route('toko.create') }}" @click="isDialogOpen = true" class="bg-blue-500 text-white hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-800 px-4 py-2 rounded-lg flex items-center">
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
          <th class="px-4 py-2 text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($donations as $donation)
        <tr>
          <td class="px-4 py-2">{{ $donation->food_item }}</td>
          <td class="px-4 py-2">{{ $donation->quantity }}</td>
          <td class="px-4 py-2">{{ $donation->expiry_date }}</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 rounded-full text-xs bg-green-200 text-green-800 dark:bg-green-900 dark:text-green-200">Active</span>
          </td>
          <td class="px-4 py-2 text-right">
            <button class="focus:outline-none">
              <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            <button class="focus:outline-none">
              <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v8m-4-4h8"></path>
              </svg>
            </button>
            <button class="focus:outline-none">
              <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
              </svg>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
