@extends('layouts.app')

@section('content')
<div class="container py-5">

    <!-- Progress Bar -->
    <div class="progress-container mb-4">
        <div class="progress-line">
            @for ($i = 1; $i <= $totalQuestions; $i++)
                <span class="progress-emoji @if($i <= $currentQuestion) completed @endif">
                    @if ($i == $currentQuestion)
                        📜
                    @else
                        📄
                    @endif
                </span>
            @endfor
        </div>
    </div>

    <!-- Question Card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="card-title">Question {{ $currentQuestion }} of {{ $totalQuestions }}</h4>
            <p class="card-text">{{ $questions[$currentQuestion - 1]->question_text }}</p>

            <!-- Answer Options -->
            <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST">
                @csrf
                <input type="hidden" name="currentQuestion" value="{{ $currentQuestion }}">

                <div class="mb-3">
                    <input type="radio" name="answer" id="optionA" value="A"
                        @if(isset($answers[$currentQuestion]) && $answers[$currentQuestion] == 'A') checked @endif required>
                    <label for="optionA">{{ $questions[$currentQuestion - 1]->option_a }}</label>
                </div>
                <div class="mb-3">
                    <input type="radio" name="answer" id="optionB" value="B"
                        @if(isset($answers[$currentQuestion]) && $answers[$currentQuestion] == 'B') checked @endif required>
                    <label for="optionB">{{ $questions[$currentQuestion - 1]->option_b }}</label>
                </div>
                <div class="mb-3">
                    <input type="radio" name="answer" id="optionC" value="C"
                        @if(isset($answers[$currentQuestion]) && $answers[$currentQuestion] == 'C') checked @endif required>
                    <label for="optionC">{{ $questions[$currentQuestion - 1]->option_c }}</label>
                </div>
                <div class="mb-3">
                    <input type="radio" name="answer" id="optionD" value="D"
                        @if(isset($answers[$currentQuestion]) && $answers[$currentQuestion] == 'D') checked @endif required>
                    <label for="optionD">{{ $questions[$currentQuestion - 1]->option_d }}</label>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between">
                    @if ($currentQuestion > 1)
                        <a href="{{ route('quiz.show', ['quizId' => $quiz->id, 'currentQuestion' => $currentQuestion - 1]) }}" class="btn btn-outline-secondary">Previous</a>
                    @else
                        <span></span>
                    @endif

                    @if ($currentQuestion < $totalQuestions)
                        <button type="submit" class="btn btn-primary">Next</button>
                    @else
                        <button type="submit" class="btn btn-success">Submit</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




@section('styles')
    <style>
        /* Progress Container */
        .progress-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Progress Line */
        .progress-line {
            width: 80%;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Garis utama (abu-abu) */
        .progress-line::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 5px;
            background-color: #ccc;
            z-index: 0;
            transform: translateY(-50%);
        }

        /* Garis progress (biru) */
        .progress-line::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            height: 5px;
            background-color: #007bff;
            width: calc(100% / {{ $totalQuestions + 1 }} * {{ $currentQuestion }});
            z-index: 0;
            transform: translateY(-50%);
        }

        /* Emoji progress */
        .progress-emoji {
            position: relative;
            z-index: 1;
            font-size: 1.8rem;
            color: #ccc; /* Warna default emoji */
        }

        /* Emoji aktif/selesai */
        .progress-emoji.completed {
            color: #007bff; /* Warna biru untuk emoji selesai */
        }
    </style>
@endsection