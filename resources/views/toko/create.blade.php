@extends('toko.templates.admin-template')

@section('content')
<div class="container">
    <h1>Buat Permintaan Donasi</h1>

    <form action="{{ route('toko.storeRequest') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="food_item">Nama Makanan</label>
            <input type="text" name="food_item" id="food_item" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Kirim Permintaan</button>
    </form>
</div>
@endsection
