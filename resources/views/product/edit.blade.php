@extends('layouts.template')
@section('title','Edit Product')
@section('isi')
@include('layouts.navbar')

<div class="container">
    <div class="mt-2">
        @include('layouts.message')
    </div>
    <div class="flex">
        <form action='{{ url('product/'.$payload->id) }}' method='post' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 p-3 bg-light rounded shadow-sm">
                <a href="{{ url('product') }}" class="btn btn-secondary mb-3">Back</a>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='name' id="name" value="{{ $payload->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='stock' id="stock" value="{{ $payload->stock }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='price' id="price" value="{{ $payload->price }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='description' id="description" value="{{ $payload->description }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="category_id" class="col-sm-2 col-form-label" name="category_id" >Category</label>
                    <div class="col-sm-10">
                        <select name="category_id" aria-label=".form-select-sm example" id="category_id">
                            @foreach ($category as $value)
                                <option value="{{ $value->id }}" {{ $value->id == $payload->category->id ? 'selected' : '' }} >{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @if ($payload->image)
                            <div class="mb-3">
                                <img src="{{ url('storage/' . $payload->image) }}" width="70px" alt="">
                            </div>
                        @endif
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name='image' id="image">
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
