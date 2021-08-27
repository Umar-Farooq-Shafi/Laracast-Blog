<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }


    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attr["user_id"] = auth()->id();
        $attr["thumbnail"] = $request->file('thumbnail')->store('thumbnail');

        Post::create($attr);

        return redirect('/');
    }
}
