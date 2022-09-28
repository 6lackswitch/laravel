<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\Posts\StoreRequest;
use App\Http\Requests\Posts\UpdateRequest;
use App\Jobs\PostPublishJob;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');;
    }

    public function index()
    {
        $posts = Post::with(['user', 'comments', 'tags'])->get();
        return view('posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $users = User::all();
        return view('posts.create')->with(['users' => $users, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Post $post)
    {
        $post = Post::create($request->validated());
        if($request->file('file'))
        $post->addMedia($request->file('file'))->toMediaCollection('media');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $users = User::all();
        return view('posts.edit')->with(['post' => $post->load('user'), 'tags' => $tags, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Post $post)
    {
        $post->update($request->validated());

        if($post->is_published == true){
            SendMailJob::dispatch($post);
        }

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
