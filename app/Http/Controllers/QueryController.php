<?php

namespace App\Http\Controllers;

use App\Models\Query;
use DB;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pisci koji pisu odredjeni zanr
        $pisci=DB::table('writers')
            ->select('writers.*', DB::raw('count(*) as brojac'))
            ->groupBy('writers.id')
            ->where('writers.genre','=','2')   //gdje je zanr sa id=2;
            //->join('genres', 'writers.id','=','genres.name')
            ->orderByRaw('COUNT(*) DESC')
            ->get();

        //clanci u odredjeom periodu odredjenog zanra
        $from='2023-01-01 00:00:00';
        $to='2024-02-01 23:59:59';

        $clanci=DB::table('articles')
            ->whereBetween('date',[$from,$to])
            ->where('articles.genre', '=', '3')
            ->get();

        //upit3: citaoci sa najvise pretplata
        $csnp=DB::table('subscriptions')
            ->select('subscriptions.*', DB::raw('count(*) as brojac'))
            ->groupBy('subscriptions.reader_id')
            ->join('readers', 'subscriptions.reader_id','=','readers.id')
            ->orderByRaw('COUNT(*) DESC')
            ->get();    

        //upit4: pretplate za odredjeni zanr u nekom periodu
        $from='2023-01-01 00:00:00';
        $to='2024-02-01 23:59:59';

        $pretplate=DB::table('subscriptions')
            ->whereBetween('datum',[$from,$to])
            ->where('subscriptions.genre_id','=','1')
            ->join('genres','subscriptions.genre_id','=','genres.id')
            ->get();

        //upit5: citaoci koji su se pretplatili na neki zanr u nekom periodu
        $from='2023-01-01 00:00:00';
        $to='2024-02-01 23:59:59';

        $citaoci=DB::table('subscriptions')
            ->whereBetween('datum',[$from,$to])
            ->where('subscriptions.genre_id','=','2')
            ->join('readers','subscriptions.reader_id','=','readers.id')
            ->get();
        

        return view('queries.index',
            ['pisci'=>$pisci,
            'clanci'=>$clanci,
            'csnp'=>$csnp,
            'pretplate'=>$pretplate,
            'citaoci'=>$citaoci
        ]);


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
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function show(Query $query)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy(Query $query)
    {
        //
    }
}
