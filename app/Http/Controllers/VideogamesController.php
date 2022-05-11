<?php

namespace App\Http\Controllers;

use App\videogames;
use Illuminate\Http\Request;

class VideogamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allVideogames = Videogames::all();
        $data = [
            'videogames' = $allVideogames
        ];
        return view('videogames.index', $data);
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
     * @param  \App\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function show(videogames $videogames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function edit(videogames $videogames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videogames $videogames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function destroy(videogames $videogames)
    {
        //
    }
}
