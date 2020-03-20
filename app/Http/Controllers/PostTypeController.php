<?php

namespace App\Http\Controllers;

use App\PostType;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post_type = PostType::all();

        return view('admin.post_type.index', ['post_type'=>$post_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        PostType::create($input);

        $post_type = PostType::all();

        return view('admin.post_type.index', ['post_type'=>$post_type]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(PostType $postType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(PostType $postType)
    {
        //
        $posts = PostType::findOrFail($postType->id);


        return view('admin.post_type.edit', ['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostType $postType)
    {
        //
        $posts = PostType::findOrFail($postType->id);
        $input = $request->all();

        $posts->update($input);

        $post_type = PostType::all();

        return view('admin.post_type.index', ['post_type'=>$post_type]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostType $postType)
    {
        //
        $post = PostType::findOrFail($postType->id);

        $post->delete();

        $post_type = PostType::all();

        return view('admin.post_type.index', ['post_type'=>$post_type]);
    }


}
