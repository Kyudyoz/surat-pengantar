<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(3);
        return view('blog.blog',[
            "posts"=> $posts,
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create',[
            "rts"=> Rt::all(),
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' =>'required|max:255',
            'slug' =>'required|unique:posts',
            'image'=>'required|image|file|max:1024',
            'body' => 'required',
        ]);
        $validatedData['image'] = $request->file('image')->store('post-image');
        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect('/')->with('success', 'Postingan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $post = Post::where('id', $id)->get();
        return view('blog.show',[
            "title"=>$post->judul,
            "post"=>$post,
            'active' => 'Blog'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
