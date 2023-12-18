<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    { 
        $user = Auth::user();
        if ($user->role === 'user') {
            $reviews = Review::all();
            $contents = Content::all();
            return view('index', ['review' => $reviews, 'contents' => $contents]);
        } else {
            $contents = Content::filter()->get();
            return view('dashboard', ['contents' => $contents]);
        }
    }
    
    public function addContent()
    {
        return view('add');
    }
    
    public function updateContent($code)
    {
        $content = Content::where('code', $code)->firstOrFail();
        return view('update', compact('content'));
    }
}
