<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $faqs = Faq::where('question', 'like', "%$query%")
                        ->orWhere('answer', 'like', "%$query%")
                        ->get();
        } else {
            $faqs = Faq::all(); // Jika tidak ada pencarian, tampilkan semua FAQ
        }

        return view('faq.index', compact('faqs'));
    }
}
