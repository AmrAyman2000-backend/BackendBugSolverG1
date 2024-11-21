<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home',compact('posts'));
    }

    public function posts()
    {
       return view('posts.createPost');
    }


    public function create(Request $request)
    {
        $request->validate([
           'title'=>['required','min:3','max:255'],
            'description'=>['required','min:3'],
        ]);

        Post::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        session()->flash('success','Post created successfully');
        return to_route('home');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.editPost', compact('post'));
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'title'=>['required','min:3','max:255'],
            'description'=>['required','min:3'],
        ]);
        $post = Post::findOrFail($id);
         $post->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        session()->flash('success','Post Updated successfully');
        return to_route('home');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        session()->flash('success','Post Deleted successfully');
        return to_route('home');
    }
}
