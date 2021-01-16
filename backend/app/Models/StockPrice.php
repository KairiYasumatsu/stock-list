<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockPrice extends Model
{
    use SoftDeletes;

    protected $primaryKey = "stock_price_id";

    protected $table = "stock_price";

    public function StockInfo()
    {
        return $this->belongsTo('App\Models\StockInfo', 'stock_info_id');
    }
}