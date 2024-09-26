@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Permintaan Donasi</h1>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if ($donationRequests->isEmpty())
        <p>Tidak ada permintaan donasi yang menunggu persetujuan.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Makanan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donationRequests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->food_item }}</td>
                        <td>{{ $request->quantity }}</td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#approveModal{{ $request->id }}">Setujui & Berikan Penerima</a>
                            
                            <!-- Modal for approving donation -->
                            <div class="modal fade" id="approveModal{{ $request->id }}" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="approveModalLabel">Setujui Donasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.approve', $request->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="recipient_name">Nama Penerima</label>
                                                    <input type="text" name="recipient_name" id="recipient_name" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="food_photo">Foto Makanan</label>
                                                    <input type="file" name="food_photo" id="food_photo" class="form-control" required>
                                                </div>

                                                <button type="submit" class="btn btn-success mt-3">Setujui Donasi</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
