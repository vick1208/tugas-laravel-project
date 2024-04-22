@extends('layout.main')

@section('title')
Cast list table
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm my-4">Menambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Biodata</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($casts as $index => $cast)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $cast->name }}</td>
            <td>{{ $cast->age }}</td>
            <td>{{ $cast->bio }}</td>
            <td class="d-flex">
                <a href="/cast/{{ $cast->id }}" class="btn btn-info mx-2">Detail</a>
                <a href="/cast/{{ $cast->id }}/edit" class="btn btn-secondary mx-2">Edit</a>
                <form action="/cast/{{ $cast->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="10" class="text-center">No data</td>
        @endforelse
    </tbody>
</table>
@endsection
