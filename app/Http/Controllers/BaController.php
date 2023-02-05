<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBaRequest;
use App\Http\Requests\UpdateBaRequest;
use App\Http\Resources\BaResource;
use App\Models\Ba;
use GuzzleHttp\Psr7\Request;

class BaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bas = Ba::paginate(Request()->rowPerPage);
        // $bas = BaResource::collection(Ba::paginate(Request()->rowsPerPage));
        $bas = BaResource::collection(Ba::with('customer', 'sell')
            ->when(
                request()->id,
                fn ($q) => $q->where('customer_id', '=', request()->id)
            )
            ->paginate(Request()->rowsPerPage));
        // logger($bas);
        return $bas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function customerBa()
    {
        $ba = Ba::with('sell')->where('customer_id', '=', request()->id)->get();
        return $ba->load('customer');
        // $ba = Ba::where('customer_id', '=', $request->id)->get();
        // return $ba;
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaRequest $request)
    {
        $ba = Ba::create($request->validated());
        // logger($ba);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ba  $ba
     * @return \Illuminate\Http\Response
     */
    public function show(Ba $ba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ba  $ba
     * @return \Illuminate\Http\Response
     */
    public function edit(Ba $ba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaRequest  $request
     * @param  \App\Models\Ba  $ba
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBaRequest $request, Ba $ba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ba  $ba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ba $ba)
    {
        //
    }
}
