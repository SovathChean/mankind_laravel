<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }

    public function ajaxstore(Request $request)
    {
      $auth = Auth::id();
      if($request->hasFile('file')) {

          Photo::create(['url'=>'hello', 'user_id'=>3]);
          //get filename with extension
          $filenamewithextension = $request->file('file')->getClientOriginalName();
          //
          //get filename without extension
          $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

          //get file extension
          $extension = $request->file('namespace')->getClientOriginalExtension();

          //filename to store
          $filenametostore = $filename.'_'.time().'.'.$extension;

          //Upload File
          $request->file('file')->storeAs('public/uploads', $filenametostore);

          // //storeUrl
          Photo::create(['url'=>$filenametostore , 'user_id'=>$auth]);
        }

        return $request->all();
    }
}
