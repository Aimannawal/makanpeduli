@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Selamat datang, {{ auth()->user()->name }}!</h1>
    <a href="{{ route('toko.create') }}" class="btn btn-primary">Buat Permintaan Donasi</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
