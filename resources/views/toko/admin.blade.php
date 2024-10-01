@extends('toko.templates.admin-template')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold">Donations</h2>
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
                <th class="px-4 py-2">Actions</th>
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
                <td class="px-4 py-2 flex space-x-2">
                    <button
                        class="bg-green-500 text-white hover:bg-green-600 px-2 py-1 rounded open-modal"
                        data-id="{{ $donation->id }}"
                        data-toggle="modal"
                        data-target="#statusModal">
                        Update Status
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->


<script>
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', function() {
            const donationId = this.getAttribute('data-id');
            document.getElementById('donation_id').value = donationId;
            document.getElementById('statusModal').classList.remove('hidden');
        });
    });

    function closeModal() {
        document.getElementById('statusModal').classList.add('hidden');
        document.getElementById('statusForm').reset(); // Clear form inputs on close
    }
</script>
@endsection
