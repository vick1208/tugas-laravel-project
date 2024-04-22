@extends('layout.main')
@section('title')
Mengedit Data Cast
@endsection

@section('content')
<form action="/cast/{{ $cast->id }}" method="post">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $cast->name }}" placeholder="Nama cast">

    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" id="age" class="form-control" value="{{ $cast->age }}" min="0" max="90" placeholder="Umur cast">

    </div>
    <div class="form-group">
        <label for="bio">Biodata</label>
        <textarea class="form-control" name="bio" id="bio" rows="4">{{ $cast->bio }}</textarea>

    </div>
    <button type="submit" class="btn btn-secondary">
        Edit
    </button>
</form>
@endsection
