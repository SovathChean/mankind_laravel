<?php

namespace App\Http\Controllers;

use App\Health_topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $health_topics = DB::table('Health_topics')->get();

        return view('admin.health_topic.index', ['health_topics'=>$health_topics]);
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
     * @param  \App\Health_topic  $health_topic
     * @return \Illuminate\Http\Response
     */
    public function show(Health_topic $health_topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Health_topic  $health_topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Health_topic $health_topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Health_topic  $health_topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Health_topic $health_topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Health_topic  $health_topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health_topic $health_topic)
    {
        //
    }
}
