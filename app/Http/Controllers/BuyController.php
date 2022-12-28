<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyRequest;
use App\Models\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    public function index()
    {
        $total = DB::table('buys')->sum('price');
        $buy = Buy::query()->orderBy('id', 'ASC')->paginate(Request()->rowsPerPage);
        // logger($buy);
        // return $buy;
        return  compact('buy', 'total');
    }

    // public function create()
    // {
    //     $buy = Buy::all();

    //     return $this->index();
    // }

    public function store(BuyRequest $request)
    {
        // logger($request->validated());
        Buy::create($request->validated());

        // dd($buyData);

        return $this->index();
    }
    public function edit()
    {
        return Buy::all();
    }
    public function update(BuyRequest $request, Buy $buy)
    {
        $buy->update($request->validated());
        return $this->index();
    }
    public function destroy(Buy $buy)
    {
        $buy->delete();
        return $this->index();
    }
}
