<?php

namespace App\Http\Controllers;

use App\Models\asdf;
use Illuminate\Http\Request;

class AsdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'adf';
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
     * @param  \App\Models\asdf  $asdf
     * @return \Illuminate\Http\Response
     */
    public function show(asdf $asdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asdf  $asdf
     * @return \Illuminate\Http\Response
     */
    public function edit(asdf $asdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asdf  $asdf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asdf $asdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asdf  $asdf
     * @return \Illuminate\Http\Response
     */
    public function destroy(asdf $asdf)
    {
        //
    }
}
