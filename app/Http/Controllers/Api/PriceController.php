<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Models\Crop;
use App\Models\Market;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        return Price::with(['crop', 'market'])->orderBy('recorded_at', 'desc')->paginate(10);
    }

    public function byCrop($cropId) {
    return Price::with(['crop', 'market'])
        ->where('crop_id', $cropId)
        ->orderBy('recorded_at', 'desc')
        ->get();
    }

    public function markets() {
        return Market::all();
    }

    public function crops() {
        return Crop::all();
    }

    public function store(StorePriceRequest $request)
    {
        $price = Price::create($request->validated());

        return response()->json($price->load(['crop', 'market']), 201);
    }

    public function update(UpdatePriceRequest $request, Price $price)
    {
        $price->update($request->validated());

        return response()->json($price->load(['crop', 'market']));
    }

    public function destroy(Price $price)
    {
        $price->delete();
        return response()->json(['message' => 'Price deleted']);
    }


}
