<?php

namespace App\Models\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Symbol extends Model
{
    use SoftDeletes;

    protected $table = "symbols";

}