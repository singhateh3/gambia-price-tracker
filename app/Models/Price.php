<?php

namespace App\Models;

use COM;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'market_id',
        'crop_id',
        'amount',
        'recorded_at'
    ];

    public function market(){
        return $this->belongsTo(Market::class);
    }
    public function crop(){
        return $this->belongsTo(Crop::class);
    }
}
