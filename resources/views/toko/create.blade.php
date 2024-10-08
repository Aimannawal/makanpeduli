@extends('toko.templates.admin-template')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <!-- Card -->
    <div class="bg-white rounded-lg border  p-6">
      <div class="mb-6">
        <h2 class="text-2xl font-bold mb-1">Create New Donation</h2>
        <p class="text-gray-600">Fill out the form below to submit a new food donation.</p>
      </div>

      <!-- Form -->
      <form method="POST" action="{{ route('toko.store') }}">
        @csrf
        @method('POST')
        <div class="space-y-4">

        <!-- Food Item -->
        <div class="space-y-2">
            <label for="food-item" class="block font-medium text-gray-700">Food Item</label>
            <input name="food_item" type="text" id="food-item" placeholder="Enter food item name" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-blue-500">
        </div>

        <input type="text" name="status" hidden id="status" value="ready to pick up">
        <input type="text" name="address" hidden id="address" value="{{ Auth::user()->address }}">
        <input type="text" name="restaurant_name" hidden id="restaurant_name" value="{{ Auth::user()->restaurant_name }}">
        {{-- user_id --}}
        <input type="text" name="user_id" hidden id="user_id" value="{{ Auth::user()->id }}">

          <!-- Quantity and Unit -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Quantity -->
            <div class="space-y-2">
                <label for="quantity" class="block font-medium text-gray-700">Quantity</label>
                <input name="quantity" type="number" id="quantity" placeholder="Enter quantity" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-blue-500">
            </div>
            <!-- Unit -->
            <div class="space-y-2">
                <label for="unit" class="block font-medium text-gray-700">Unit</label>
                <select name="unit" id="unit" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-blue-500">
                    <option value="" disabled selected>Select unit</option>
                    <option value="kg">Kilograms (kg)</option>
                    <option value="lbs">Pounds (lbs)</option>
                    <option value="pcs">Pieces</option>
                    <option value="boxes">Boxes</option>
                </select>
            </div>
        </div>

          <!-- Expiry Date -->
          <div class="space-y-2">
            <label for="expiry-date" class="block font-medium text-gray-700">Expiry Date</label>
            <input name="expiry_date" type="date" id="expiry-date" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-blue-500">
          </div>

          <!-- Description -->
          <div class="space-y-2">
            <label for="description" class="block font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" placeholder="Enter any additional details about the donation" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-blue-500"></textarea>
          </div>

        </div>

        <div class="mt-6">
          <button type="submit" id="submit-button" class="w-full bg-black text-white hover:bg-gray-950 px-4 py-2.5 rounded-lg">
            Submit Donation
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function handleFormSubmit(event) {
      event.preventDefault();
      const submitButton = document.getElementById("submit-button");
      submitButton.disabled = true;
      submitButton.textContent = "Submitting...";

      // Simulating an API call
      setTimeout(() => {
        alert("Donation Submitted: Your donation has been successfully submitted.");
        submitButton.disabled = false;
        submitButton.textContent = "Submit Donation";
        // Optionally reset the form here
        event.target.reset();
      }, 1000);
    }
  </script>
@endsection
