@extends('layouts.app')

@section('content')
<div class="course-detail-container py-5">
    <!-- Header -->
    <div class="course-header text-center mb-4">
        <h1 class="fw-bold">{{ $course->title }}</h1>
    </div>

    <!-- Video Section -->
    <div class="video-section text-center mb-5">
        <video class="course-video" autoplay muted controls loop>
            <source src="{{ asset('AboutUs/Vid.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- About Section -->
    <div class="about-section mb-5">
        <h2 class="section-title">About this course</h2>
        <p>{{ $course->details }}</p>
    </div>

    <!-- Learning Points Section -->
    <div class="learning-section mb-5">
        <h2 class="section-title">What You'll Learn</h2>
        <ul>
            @foreach (json_decode($course->learning_points, true) as $point)
                <li>{{ $point }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Instructor Section -->
    <div class="instructor-section d-flex align-items-center">
        <img src="{{ asset($course->instructor_image) }}" alt="{{ $course->instructor_name }}" class="instructor-image me-4">
        <div>
            <h3 class="fw-bold">{{ $course->instructor_name }}</h3>
            <h5>{{ $course->category }} | {{ $course->instructor_scope }}</h5>
            <p>{{ $course->instructor_bio }}</p>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Container Styling */
    .course-detail-container {
        background-color: #fff;
        padding: 20px 40px;
        border-radius: 8px;
    }

    /* Video Section */
    .course-video {
        width: 100%;
        max-width: 800px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Section Titles */
    .section-title {
        font-size: 1.75rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    /* About and Learning Section */
    .about-section, .learning-section {
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .learning-section ul {
        list-style: none;
        padding: 0;
    }

    .learning-section ul li {
        margin-bottom: 10px;
        padding-left: 20px;
        position: relative;
    }

    .learning-section ul li::before {
        content: "✔";
        color: #0d6efd;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    /* Instructor Section */
    .instructor-section {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        border-top: 1px solid #ddd;
        padding-top: 20px;
    }

    .instructor-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
