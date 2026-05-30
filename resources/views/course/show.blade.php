@extends('layouts.dashboard')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow border-0 rounded-4">
                
                <div class="card-header bg-primary text-white text-center py-4">
                    <h2 class="mb-0">{{ $course->name }}</h2>
                </div>

                <div class="card-body p-4">

                    {{-- صورة الكورس لو عندك --}}
                    {{-- <img src="{{ $course->image }}" class="img-fluid rounded mb-4" alt="{{ $course->name }}"> --}}

                    <h5 class="text-muted mb-3">Course Description</h5>

                    <p class="card-text fs-5">
                        {{ $course->description }}
                    </p>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-success mb-0">
                            ${{ $course->price }}
                        </h3>

                        <span class="badge bg-info fs-6">
                            Available
                        </span>
                    </div>

                </div>

                <div class="card-footer bg-white border-0 p-4">
                    <div class="d-flex gap-2">
                        <a href="/" class="btn btn-outline-secondary">
                            ← Back
                        </a>

                        <a href="#" class="btn btn-primary">
                            Add To Cart
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection