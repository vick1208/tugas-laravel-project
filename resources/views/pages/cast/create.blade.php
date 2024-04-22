@extends('layout.main')

@section('title')
Menambah Cast
@endsection

@section('content')
<form action="/cast" method="post">
    @csrf
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
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama cast">

    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" id="age" class="form-control" min="0" max="90" placeholder="Umur cast">

    </div>
    <div class="form-group">
        <label for="bio">Biodata</label>
        <textarea class="form-control" name="bio" id="bio" rows="4"></textarea>

    </div>
    <button type="submit" class="btn btn-success">
        Submit
    </button>
</form>
@endsection
