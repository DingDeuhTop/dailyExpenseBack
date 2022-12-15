<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyRequest;
use App\Models\Sell;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    //
    public function index()
    {
        $total = DB::table('sells')->sum('price');
        $sell = Sell::query()->paginate();
        return compact('total', 'sell');
    }

    public function store(BuyRequest $request)
    {
        Sell::create($request->Validated());
        return $this->index();
    }

    public function edit()
    {
        return Sell::all();
    }

    public function update(BuyRequest $request, Sell $sell)
    {
        $sell->update($request->validated());

        return $this->index();
    }

    public function destroy(Sell $sell)
    {
        $sell->delete();
        return $this->index();
    }
}