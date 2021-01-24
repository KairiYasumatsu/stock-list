<?php

namespace App\Http\Controllers\Api;

use App\Models\Repositories\StockInfoRepository;
use Illuminate\Http\Request;
use Swift_Plugins_Loggers_EchoLogger;

class StockListController
{
    private $stockInfoRepository;

    public function __construct(
        StockInfoRepository $stockInfoRepository
    )
    {
        $this->stockInfoRepository = $stockInfoRepository;
        
    }

    public function getSectorStockList(Request $request)
    {
        $collection = $this->stockInfoRepository->getSectorTopFiveStockList();
        logger($collection);
        $collection = $collection->groupBy('sector_id');
        $collection = $collection->map(function ($sectors) {
            return $sectors->take(4);
        });
        return response()->json($collection,200,[],JSON_UNESCAPED_UNICODE);
    }
}
