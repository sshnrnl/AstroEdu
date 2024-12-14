<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function showQuiz(Request $request, $quizId)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('signin'); // Redirect ke halaman login jika belum login
        }
        
        $quiz = Quiz::with('questions')->findOrFail(2);
        $questions = $quiz->questions;

        // Hitung total pertanyaan
        $totalQuestions = $quiz->questions->count();

        // Ambil currentQuestion dari query parameter (default 1 jika tidak ada)
        $currentQuestion = $request->query('currentQuestion', 1);

        // Ambil jawaban yang telah disimpan di session
        $answers = session('quiz_answers_' . $quizId, []);

        return view('quiz.show', [
            'quiz' => $quiz,
            'questions' => $quiz->questions,
            'totalQuestions' => $totalQuestions,
            'currentQuestion' => $currentQuestion,
            'answers' => $answers,
        ]);
    }

    public function submitAnswer(Request $request, $quizId)
    {
        $quiz = Quiz::with('questions')->findOrFail($quizId);

        // Ambil currentQuestion dan jawaban dari request
        $currentQuestion = $request->input('currentQuestion');
        $answer = $request->input('answer');

        // Simpan jawaban ke session
        $answers = session('quiz_answers_' . $quizId, []);
        $answers[$currentQuestion] = $answer;
        session(['quiz_answers_' . $quizId => $answers]);

        // Redirect ke pertanyaan berikutnya
        $totalQuestions = $quiz->questions->count();
        if ($currentQuestion < $totalQuestions) {
            return redirect()->route('quiz.show', [
                'quizId' => $quizId,
                'currentQuestion' => $currentQuestion + 1,
            ]);
        }

        // Jika sudah pertanyaan terakhir, arahkan ke result
        return redirect()->route('quiz.result', ['quizId' => $quizId]);
    }

    public function showResult($quizId)
    {
        $quiz = Quiz::with('questions')->findOrFail($quizId);
        $answers = session('quiz_answers_' . $quizId, []);
        $score = 0;

        // Hitung skor
        foreach ($quiz->questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] === $question->correct_answer) {
                $score++;
            }
        }

        $totalQuestions = $quiz->questions->count();

        return view('quiz.result', [
            'quiz' => $quiz,
            'score' => $score,
            'totalQuestions' => $totalQuestions,
        ]);
    }

}
