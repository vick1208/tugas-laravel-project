@extends('layout.main')
@section('title')
    Register
@endsection
@section('content')
<h1>Buat Account Baru</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="POST">
    @csrf
    <label for="first-name">First name:</label>
    <div>
        <input type="text" name="first-name" id="first-name" required>
    </div>
    <label for="last-name">Last name:</label>
    <div>
        <input type="text" name="last-name" id="last-name" required>
    </div>

    <label>Gender:</label>
    <div>
        <div>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label>
        </div>
        <div>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
        </div>
        <div>
            <input type="radio" name="gender" id="other" value="Other">
            <label for="other">Other</label>
        </div>
    </div>

    <label for="national">Nationality :</label>

    <div>
        <select name="user-nationality" id="national">
            <option value="indonesian">Indonesian</option>
            <option value="british">British</option>
            <option value="american">American</option>
            <option value="singaporean">Singaporean</option>
            <option value="other">Other</option>
        </select>
    </div>
    <br>
    <label for="lang-spoken">Language Spoken:</label>
    <div>
        <input type="checkbox" name="indonesia" id="indonesia">
        <label for="indonesia">Bahasa Indonesia</label>
    </div>
    <div>
        <input type="checkbox" name="english" id="english">
        <label for="english">English</label>
    </div>
    <div>
        <input type="checkbox" name="other" id="other">
        <label for="other">Other</label>
    </div>
    <label for="bio">Bio:</label>
    <div>
        <textarea name="bio" id="bio" cols="20" rows="10">

        </textarea>
    </div>
    <button type="submit">Sign up</button>
</form>
@endsection
