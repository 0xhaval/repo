<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiscussionRequest;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Topic;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.discussions.index', [
            'discussions' => Discussion::query()
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
        return view('frontend.discussions.create', [
            'topics' => Topic::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscussionRequest $request)
    {
        Discussion::create($request->validated());
        return $this->redirectRoutes('frontend.discussions.index', 'discussion created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {
        return view('frontend.discussions.show', [
            'discussion' => $discussion,
            'comments' => Comment::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Discussion $discussion)
    {
        return view('frontend.discussions.update', [
            'discussion' => $discussion,
            'topics' => Topic::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiscussionRequest $request, Discussion $discussion)
    {
        $discussion->update($request->validated());
        return $this->redirectRoutes('frontend.discussions.index', 'discussion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $discussion)
    {
        $discussion->delete();
        return $this->redirectRoutes('frontend.discussions.index', 'discussion deleted successfully');
    }
}
