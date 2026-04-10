<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Market;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        return Price::with(['crop', 'market'])->orderBy('recorded_at', 'desc')->get();
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


}
