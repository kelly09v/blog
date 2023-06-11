<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all(){
        return response()->json(Cache::remember('posts_all', now()->addMinutes(10), function () {
            return Post::all();
    }));
    

    }
    public function index()
    {
     
        return response()->json(post::paginate(10));   
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(post::create(Request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(post $Post)
    {
            return response()->json($Post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
  
        $post->update($request->validated());
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return response()->json('ok');
    }
}
