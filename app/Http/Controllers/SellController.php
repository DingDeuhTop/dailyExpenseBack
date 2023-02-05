<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyRequest;
use App\Http\Requests\SellRequest;
use App\Models\Sell;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    public function index()
    {
        $total = DB::table('sells')->sum('price');
        $sell = Sell::query()->with('customer')->paginate(Request()->rowsPerPage);
        return compact('total', 'sell');
    }

    public function store(SellRequest $request)
    {
        Sell::create($request->Validated());
        return $this->index();
    }

    public function edit()
    {
        return Sell::all();
    }

    public function update(SellRequest $request, Sell $sell)
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
