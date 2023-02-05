<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Readers;
use Illuminate\Http\Request;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readers=DB::table('readers')->get();

        return view('readers.index', ['readers'=> $readers]);
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
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function show(Readers $readers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function edit(Readers $readers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Readers $readers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readers $readers)
    {
        //
    }
}
