<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        foreach($posts as $post){
            //$post->format_date = Carbon::parse($post['created_at'])->format('d M Y, h:i A');
            $post->format_date = Carbon::parse($post['created_at'])->diffForHumans();
        }
        //$ posts_Titles = Post::pluck('title); it will only retrive all the titles from all the posts from DB
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post_infos = $request->validate([
            'title'=>'required|string|min:4|unique:posts,title',
            'content'=>'required|string|min:10',
            'author'=>'required|string|min:4',
            'slug'=>'nullable|string',
            'language'=>'required|in:en,ar,fr',
        ]);

            if(empty($post_infos['slug'])){
                $post_infos['slug'] = Str::slug($post_infos['title']);
            }

        Post::create($post_infos);
        session()->flash('success', 'Post created successfully!');
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ShowPost = Post::find($id);
        return view('posts.show',compact('ShowPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
