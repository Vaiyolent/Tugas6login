@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </div>
@endif
