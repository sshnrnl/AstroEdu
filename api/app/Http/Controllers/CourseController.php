<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kategori dari query parameter
        $category = $request->query('category');

        // Ambil semua kategori untuk tombol filter
        $categories = Course::select('category')->distinct()->get();

        // Ambil data courses berdasarkan kategori, atau semua jika tidak ada kategori
        $courses = Course::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->get();

        return view('Course.Course', compact('courses', 'categories'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id); 
        return view('Course.show', compact('course')); // Kirim data ke view
    }
}
