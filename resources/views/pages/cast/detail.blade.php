@extends('layout.main')

@section('title')
Detail Cast
@endsection

@section('content')
<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>

<h2>
    {{ $cast->name }}
</h2>
<h3>{{ $cast->age }} years old</h3>
<p>{{ $cast->bio }}</p>

@endsection
