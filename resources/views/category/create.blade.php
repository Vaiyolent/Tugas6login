@extends('layouts.template')
@section('title','Create Category')
@section('isi')
@include('layouts.navbar')

<div class="container">
    <div class="py-2">
        @include('layouts.message')
    </div>
    <div class="flex">
        <form action='{{ url('category') }}' method='post'>
            @csrf
            <div class="my-3 p-3 bg-light rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='name' id="name" value="{{ Session::get('name') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="category_id" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 d-md-flex justify-content-md-end"><button type="submit" class="btn btn-success" name="submit">SIMPAN</button></div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
