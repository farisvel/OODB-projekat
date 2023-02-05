<?php

namespace App\Http\Controllers;

use App\Models\Writers;
use Illuminate\Http\Request;
use DB;

class WritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers=DB::table('writers')
            ->get();

        return view ('writers.index', ['writers' => $writers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres=DB::table('genres')->get();

        return view('writers.add', ['genres'=>$genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('writers')->insert ([
            'name'=>$request->name,
            'bio'=>$request->bio,
            'genre'=>$request->genre,
            'contact'=>$request->contact,
        ]);

        return redirect()->route('writers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function show(Writers $writers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $writers=DB::table('writers')
        ->where('id',$id)
        ->get();

        $genres=DB::table('genres')->get();

        return view('writers.edit',['writers'=>$writers, 'genres'=>$genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'name'=>'required|string|max:255',
            test test;
        ]);

        $update_query = DB::table('writers')
        ->where('id',$id)
        ->update([
            'name'=>$request->name,
            'bio'=>$request->bio,
            'genre'=>$request->genre,
            'contact'=>$request->contact,
        ]);

        return redirect()->route('genres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id=$request->id;
        Writers::destroy($id);
        return redirect()->route('writers');
    }
}
