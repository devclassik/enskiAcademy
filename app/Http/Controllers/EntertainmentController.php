<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entertainment.entertainment');
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
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function show(Entertainment $entertainment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function edit(Entertainment $entertainment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entertainment $entertainment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entertainment $entertainment)
    {
        //
    }
}
