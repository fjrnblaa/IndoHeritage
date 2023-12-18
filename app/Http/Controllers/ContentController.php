<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    

    public function index()
    {
        $contents = Content::filter()->paginate(9)->withQueryString();
        return view('culture', ['contents' => $contents]);
    }
    
    public function readContent($code)
    {
        $content = Content::where('code', $code)->firstOrFail();
        return view('content', compact('content'));
    }

    public function store(Request $request)
    {      
        $request->validate([
            'code' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $content = new Content();
        $content->code = $request->code;
        $content->title = $request->title;
        $content->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $content->image = $imagePath;
        }

        $content->save();

        return redirect('/dashboard')->with('success', 'Content upload success.');
    }

    public function updateContent(Request $request, $code)
    {
        $content = Content::where('code', $code);

        if ($content) {
            $data = $request->validate([
                'code' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $data['image'] = $imagePath;
            }

            $content->update($data);

            return redirect('dashboard')->with('success', 'Content update success.');
        }
    }

    public function deleteContent($code)
    {
        $content = Content::where('code', $code);

        if ($content) {
            $content->delete();

            return redirect('dashboard')->with('success', 'Content delete success.');
        } else {
            return redirect('cultures')->with('success', 'Content delete failed.');
        }
    }


}
