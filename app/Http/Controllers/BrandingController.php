<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use Illuminate\Http\Request;

class BrandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('branding.branding');
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
     * @param  \App\Models\Branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function show(Branding $branding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function edit(Branding $branding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branding $branding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branding $branding)
    {
        //
    }
}
