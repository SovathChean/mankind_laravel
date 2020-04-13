<?php

namespace App\Http\Controllers;

use App\Schedual;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\OpeningHours\OpeningHours;

class SchedualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $scheduals = Schedual::all()->where('user_id', Auth::id());


      return view('admin.schedual.index', ['scheduals'=>$scheduals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $days = [
        'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
        ];
        return view('admin.schedual.create', ['days'=>$days]);
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
        $input = $request->input();
        $auth = Auth::id();

        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartMonday'],
          "end"=>$input['EndMonday'],
          'wod'=>"Monday",
        ]);
        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartTuesday'],
          "end"=>$input['EndTuesday'],
          'wod'=>"Tuesday",
        ]);
        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartWednesday'],
          "end"=>$input['EndWednesday'],
          'wod'=>"Wednesday",
        ]);
        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartThursday'],
          "end"=>$input['EndThursday'],
          'wod'=>"Thursday",
        ]);
        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartFriday'],
          "end"=>$input['EndFriday'],
          'wod'=>"Friday",
        ]);
        Schedual::create([
          "user_id"=>$auth,
          "start"=>$input['StartSaturday'],
          "end"=>$input['EndSaturday'],
          'wod'=>"Saturday",
        ]);



         return $view('admin.schedual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedual  $schedual
     * @return \Illuminate\Http\Response
     */
    public function show(Schedual $schedual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedual  $schedual
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedual $schedual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedual  $schedual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedual $schedual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedual  $schedual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedual $schedual)
    {
        //
    }
}
