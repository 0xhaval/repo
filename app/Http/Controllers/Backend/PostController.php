<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.posts.index', [
            'posts' => Post::query()->with('tag')
            ->when('search', function($query){
                // use query model for search
                $query->search(request('search'));
            })->
            latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create', [
            'tags' => Tag::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();


        /**
         * This way to save image in local file
         * can store image direct in public folder with this steps
         * - config -> file systems
         * - edit public setting
         * - 'root' => public_path('files')
         * - change the default from local to public
         */
        if($image = $request->file('image')){
            $image->store('post_images');
            $data['image'] = $image->hashName();
        }

        Post::create($data);
        return $this->redirectRoutes('admin.posts.index', 'post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backend.posts.update', [
            'post' => $post,
            'tags' => Tag::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();

        if($image = $request->file('image')){
            // delete old image
            Storage::delete(['post_images/'. $post->image]);

            // store new one
            $image->store('post_images');

            // hash name of image
            $data['image'] = $image->hashName();
        }

        $post->update($data);
        return $this->redirectRoutes('admin.posts.index', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // delete image
        Storage::delete(['post_images/'. $post->image]);
        // delete post
        $post->delete();
        return $this->redirectRoutes('admin.posts.index', 'post deleted successfully');
    }
}
