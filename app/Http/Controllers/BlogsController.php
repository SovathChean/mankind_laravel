<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Health_topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $blogs = Blog::all();

        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $healths = Health_topic::pluck('topic', 'id')->all();
        return view('admin.blogs.create', ['healths'=>$healths]);
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

          Blog::create([ 'ht_id'=>$input['ht_id'], 'title'=>$input['title'], 'body'=>$input['body'], 'user_id'=>Auth::id() ]);

          $blogs = Blog::all();
          return view('admin.blogs.index', ['blogs'=>$blogs]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogs = Blog::findOrFail($id);
        $healths = Health_topic::pluck('topic', 'id')->all();
        return view('admin.blogs.edit', ['blogs'=>$blogs, 'healths'=>$healths]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $update_blog = Blog::findOrFail($id);
        $update_blog->update([ 'ht_id'=>$input['ht_id'], 'title'=>$input['title'], 'body'=>$input['body'], 'user_id'=>Auth::id() ]);

        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs'=>$blogs]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs'=>$blogs]);
    }
    public function upload(Request $request)
   {
       if($request->hasFile('upload')) {
           //get filename with extension
           $filenamewithextension = $request->file('upload')->getClientOriginalName();
           //
           //get filename without extension
           $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

           //get file extension
           $extension = $request->file('upload')->getClientOriginalExtension();

           //filename to store
           $filenametostore = $filename.'_'.time().'.'.$extension;

           //Upload File
           $request->file('upload')->storeAs('public/uploads', $filenametostore);

           // Photo::create(['url'=>$filenametostore, 'post-id'=>'1', 'pt_id'=>'1']);
           $CKEditorFuncNum = $request->input('CKEditorFuncNum');
           $url = asset('storage/uploads/'.$filenametostore);
           $msg = 'Image successfully uploaded';
           $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

           // Render HTML output
           @header('Content-type: text/html; charset=utf-8');
           echo $re;

       }
   }
   public function datatable()
   {
       return Datatables::of(Blog::query())
       ->addColumn('health_topic', function(Blog $blog) {
                  return $blog->health_topic->topic;
               })
       ->addColumn('users', function(Blog $blog) {
                          return $blog->user->name;
                       })
       ->addColumn('update', function(Blog $blog){
             $update =  '<a href="/admin/add_blog/'.$blog->id.'/edit" class="btn btn-primary btn-sm">Update</a>';

                return $update;
       })
       ->addColumn('action', function(Blog $blog){
         $action = <<<HTML
                    <form action="/admin/add_blog/delete/$blog->id" method="get">
                     <input type="submit" class="btn btn-danger btn-sm" value="delete">
                   </form>

                   HTML;
            return $action;
       })

       ->rawColumns(['update', 'action'])

       ->make(true);
   }


}
