@extends('layouts.template')
@section('title', 'Login')
@section('isi')

<div class="container">
    <div class="py-3">
        @include('layouts.message')
    </div>
    <div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">
        <h1 style="color: #3F497F" >Sign In</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" name="submit" class="btn btn-dark" style="background-color: #3F497F">Sign In</button>
            </div>
        </form>
        <p class="fw-semibold text-center">Doesn't Have an Account yet? <a href="{{ url('/register') }}">Sing Up</a></p>
    </div>
</div>

@endsection
