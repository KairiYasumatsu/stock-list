<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockInfo extends Model
{
    use SoftDeletes;

    protected $primaryKey = "stock_info_id";

    protected $table = "stock_info";

    public function StockPrice()
    {
        return $this->hasOne('App\Models\StockPrice', 'stock_info_id');
    }

}