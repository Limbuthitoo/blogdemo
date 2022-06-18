<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Travelblog;
use Illuminate\Http\Request;

class TravelblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelblogs = Travelblog::all();
        return view('backend.travelblog.index',compact('travelblogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.travelblog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travelblog = new  Travelblog();
        $travelblog -> title = $request ->title;
        $travelblog -> description = $request ->description;
if($request -> hasFile('image')){
    $file = $request-> image;
    $newName = time() . $file->getClientOriginalName();
    $file -> move('images',$newName);
    $travelblog -> image = "images/$newName";
}
        $travelblog -> save();
        return redirect('/travelblog');
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
        $travelblog = Travelblog::find($id);
        return view('backend.travelblog.edit',compact('travelblog'));
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
        $travelblog = Travelblog::find($id);
        $travelblog -> title = $request ->title;
        $travelblog -> description = $request ->description;
if($request -> hasFile('image')){
    $file = $request-> image;
    $newName = time() . $file->getClientOriginalName();
    $file -> move('images',$newName);
    $travelblog -> image = "images/$newName";
}
        $travelblog -> update();
        return redirect('/travelblog');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travelblog = Travelblog::find($id);
        $travelblog -> delete();
        return redirect('/travelblog');
    }
}
