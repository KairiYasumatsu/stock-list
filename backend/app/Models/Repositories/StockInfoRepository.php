<?php


namespace App\Models\Repositories;

use App\Models\Eloquents\StockInfo;

class StockInfoRepository extends AppRepository
{
    protected $eloquent;

    public function __construct(StockInfo $stockInfo)
    {
        $this->eloquent = $stockInfo;
    }

    public function getSectorTopFiveStockList()
    {
        return $this->eloquent::select('stock_info_id', 'short_name', 'logo_url', 'sector_id')->get();
    }
}