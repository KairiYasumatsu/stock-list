<?php


namespace App\Models\Repositories;


abstract class AppRepository
{
    protected $eloquent;

    public function all()
    {
        $collection = $this->eloquent::query()->get();
        return $collection;
    }
}
