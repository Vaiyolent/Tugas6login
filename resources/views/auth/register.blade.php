@extends('layouts.template')
@section('title', 'Register')
@section('isi')

<div class="container">
    <div class="py-3">
        @include('layouts.message')
    </div>
    <div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">
        <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back</a>
        <h1 style="color: #3F497F" >Sign Up</h1>
        <form action="/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" name="submit" class="btn btn-dark" style="background-color: #3F497F">Register</button>
            </div>
        </form>
    </div>
</div>

@endsection
