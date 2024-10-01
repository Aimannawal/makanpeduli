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
                <th class="px-4 py-2">Restaurant name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="overflow-x-scroll">
            @if ($donations->isEmpty())
            <tr>
                <td colspan="4" class="text-center px-4 py-2 text-gray-500">
                    No donations found.
                </td>
            </tr>
            @else
            @foreach ($donations as $donation)
            <tr>
                <td class="px-4 py-2">{{ $donation->food_item }}</td>
                <td class="px-4 py-2">{{ $donation->quantity }}</td>
                <td class="px-4 py-2">{{ $donation->expiry_date }}</td>
                {{-- <td class="px-4 py-2">{{ $donation->user_id->restaurant_name }}</td> --}}
                <td class="px-4 py-2">
                    <span class="px-2 py-1 rounded-full text-xs
                        @if($donation->status == 'rejected')
                            bg-red-200 text-red-800 dark:bg-red-900 dark:text-red-200
                        @elseif($donation->status == 'collected')
                            bg-blue-200 text-blue-800 dark:bg-blue-900 dark:text-blue-200
                        @elseif($donation->status == 'received')
                            bg-green-200 text-green-800 dark:bg-green-900 dark:text-green-200
                        @else
                            bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300
                        @endif
                    ">
                        {{ ucfirst($donation->status) }}
                    </span>
                </td>
                <td class="px-4 py-2"><p>{{ $donation->user->restaurant_name }}</p></td>
                <td class="px-4 py-2 "><p class="truncate max-w-32">{{ $donation->user->address }}</p></td>
                
                <td class="px-4 py-2 flex space-x-2">
                    <button
                        class="bg-black text-white px-4 py-2.5 rounded-lg open-modal"
                        data-id="{{ $donation->id }}"
                        data-toggle="modal"
                        data-target="#statusModal">
                        Update Status
                    </button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

<div id="statusModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50 z-[999]" >
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-1/3">
        <h2 class="text-lg font-bold mb-4">Update Donation Status</h2>
        <form id="statusForm" method="POST" action="{{ route('admin.update.status') }}">
            @csrf
            <input type="hidden" name="donation_id" id="donation_id">
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium mb-1">Select Status</label>
                <select name="status" id="status" class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled selected>Select Status</option>
                    <option value="rejected">Rejected</option>
                    <option value="collected">Collected</option>
                    <option value="received">Received</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2.5" onclick="closeModal()">Cancel</button>
                <button type="submit" class="bg-black text-white hover:bg-gray-900 px-4 py-2.5 rounded-lg">Update</button>
            </div>
        </form>
    </div>
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
