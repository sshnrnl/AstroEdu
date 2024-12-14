@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div class="card-body text-center">
            <h4 class="card-title">Quiz Result</h4>
            <p class="card-text" style="font-size: 1.2rem;">
                You scored <strong>{{ $score }}</strong> out of <strong>{{ $totalQuestions }}</strong>!
            </p>
            <a href="{{ route('courses.index') }}" class="btn btn-primary mt-3">Back to Courses</a>
        </div>
    </div>
</div>
@endsection