<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostType;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $postTopics = DB::table('post_types')->pluck('name', 'id')->all();
        return view('admin.post.create', ['postTopics'=>$postTopics]);
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
        $auth = Auth::id();
        Post::create(['title'=>$input['title'], 'body'=>$input['body'], 'pt_id'=>$input['pt_id'], 'user_id'=>$auth]);

        return view('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $post = Post::findOrFail($post->id);
        $postTopics = DB::table('post_types')->pluck('name', 'id')->all();

        return view('admin.post.edit', ['postTopics'=>$postTopics, 'post'=>$post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $input = $request->all();
        $post = Post::findOrFail($post->id);
        $auth = Auth::id();
        $post->update([
          'title'=>$input['title'],
           'body'=>$input['body'],
           'pt_id'=>$input['pt_id'],
           'user_id'=>$auth,
        ]);
      
        return view('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $postT = Post::findOrFail($id);
        $postT->delete();

        return view('admin.post.index');
    }
    public function datatable()
    {
        return Datatables::of(Post::query())
        ->addColumn('postType', function(Post $post) {
                   return $post->postType->name;
                })
        ->addColumn('users', function(Post $post) {
                           return $post->user->name;
                        })
        ->addColumn('update', function(Post $post){
              $update =  '<a href="/admin/post/'.$post->id.'/edit" class="btn btn-primary btn-sm">Update</a>';

                 return $update;
        })
        ->addColumn('action', function(Post $post){
          $action = <<<HTML
                     <form action="/admin/post/delete/$post->id" method="get">
                      <input type="submit" class="btn btn-danger btn-sm" value="delete">
                    </form>

                    HTML;
             return $action;
        })

        ->rawColumns(['update', 'action'])

        ->make(true);
    }

}
