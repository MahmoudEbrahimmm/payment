@extends('layouts.dashboard')
@section('content')
    <div class="row g-3">
    @foreach ($course as $item)
        <div class="col-md-4">
            <div class="card h-100">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <a href="{{ route('course.show', $item->slug) }}" class="nav-link"><h5 class="card-title">{{ $item->name }}</h5></a>
                    <p class="card-text">{{ $item->description }}</p>
                    <h5 class="text-success">Price {{ $item->price }}$</h5>
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
