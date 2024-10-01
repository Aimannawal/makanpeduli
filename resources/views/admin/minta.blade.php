@extends('layouts.app')

@section('title', 'Permintaan Makanan')

@section('content')
    <h1>Permintaan Makanan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mintas as $minta)
                <tr>
                    <td>{{ $minta->id }}</td>
                    <td>{{ $minta->nama }}</td>
                    <td>{{ $minta->deskripsi }}</td>
                    <td>{{ $minta->status }}</td>
                    <td>
                        <form action="{{ route('admin.markAsDone', $minta->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Selesai</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
