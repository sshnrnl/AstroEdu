@extends('layouts.app')

@section('content')
<div class="course_container-fluid px-5">
    <h1 class="text-center">Courses</h1>

    <!-- Filter buttons -->
    <div class="button-container d-flex justify-content-center mb-4">
        <form method="GET" action="{{ route('courses.index') }}">
            <input type="hidden" name="category" value="">
            <button type="submit" class="btn btn-outline-secondary me-2 {{ request('category') ? '' : 'active' }}">
                All
            </button>
        </form>

        @foreach ($categories as $category)
            <form method="GET" action="{{ route('courses.index') }}">
                <input type="hidden" name="category" value="{{ $category->category }}">
                <button type="submit" 
                        class="btn btn-outline-secondary me-2 {{ request('category') === $category->category ? 'active' : '' }}">
                    {{ $category->category }}
                </button>
            </form>
        @endforeach
    </div>


    <!-- Courses grid -->
    <div class="row">
        @foreach ($courses as $course)
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <img src="{{ asset($course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <span class="badge bg-primary">{{ $course->category }}</span>
                    <span class="badge bg-secondary">{{ $course->duration }}</span>
                    <form action="{{ route('courses.show', $course->id) }}" method="GET">
                        <button type="submit" class="btn btn-outline-secondary mb-3">Details</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
    <style>
        /* Active Button Styling */
        .btn-outline-dark.active, .btn-outline-secondary.active {
            background-color: #343a40;
            color: white;
            border-color: #343a40;
        }

        /* Card Image Styling */
        .card-img-top {
            width: 100%; /* Sesuaikan dengan lebar card */
            height: 200px; /* Tetapkan tinggi tetap */
            object-fit: cover; /* Potong gambar agar pas dengan dimensi */
            
        }

        /* Card Styling */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none; /* Hapus border */
        }

        /* Card Title */
        .card-title {
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
@endsection
