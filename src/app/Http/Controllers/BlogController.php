<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_link' => $request->image_link,
            'tags' => $request->tags,
            'date' => now()
        ]);

        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->update($request->all());

        return response()->json($blog);
    }

    public function edit($id)
    {
        return response()->json(Blog::findOrFail($id));
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
