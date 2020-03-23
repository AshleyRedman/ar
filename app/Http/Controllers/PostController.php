<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        //
        $posts = Post::latest()->get();

        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        if (Auth::check()) {
            return view('post.create', [
                'tags' => Tag::all(),
            ]);
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request)
    {
        //
        if (Auth::check()) {
            $data = $request->validate([
                'title' => 'required|unique:posts|max:255',
                'url' => 'required',
                'image' => 'required',
                'tag_id' => 'required',
            ]);

            Post::create($data);

            return redirect('/admin');
        } else {
            return redirect('/');
        }
    }

    public function show(Post $post)
    {
        //
        return view('post.show', [
            'post' => Post::findOrFail($post->id),
            'tag' => Tag::findOrFail($post->tag_id),
        ]);
    }

    public function edit(Post $post)
    {
        //
        if (Auth::check()) {
            return view('post.edit', [
                'tags' => Tag::all(),
                'post' => Post::findOrFail($post->id),
            ]);
        } else {
            return redirect('/');
        }
    }

    public function update(Request $request, Post $post)
    {
        //
        if (Auth::check()) {
            $post->title = request('title');
            $post->url = request('url');
            $post->image = request('image');
            $post->tag_id = request('tag_id');
            $post->save();

            return redirect('/admin');
        } else {
            return redirect('/');
        }
    }

    public function destroy(Post $post)
    {
        //
        if (Auth::check()) {
            $post->delete();
            return redirect(Route('admin'));
        } else {
            return redirect('/');
        }
    }
}
