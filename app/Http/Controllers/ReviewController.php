<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Konten;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return view('review', ['konten' => $konten]);
    }

    public function reviewHome()
    {
        $reviews = Review::all();
        $contents = Content::all();
        return view('index', ['review' => $reviews, 'contents' => $contents]);
    }
    
    public function review()
    {
        $reviews = Review::all();
        return view('review', ['review' => $reviews]);
    }

    public function input(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
        ]);

        Review::create([
            'name' => $request->name,
            'review' => $request->review,
        ]);
        return redirect('/review');
    }
}
