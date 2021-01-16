<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockInfo20210116 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_info', function (Blueprint $table) {
            $table->bigIncrements('stock_info_id');
            $table->string('short_name');
            $table->string('long_name');
            $table->string('symbol');
            $table->string('sector');
            $table->integer('full_tiime_employees');
            $table->text('long_bussiness_summary');
            $table->string('city');
            $table->string('phone');
            $table->string('state');
            $table->string('country');
            $table->text('web_site');
            $table->text('logo_url');
            $table->string('industry');
            $table->string('currency');
            $table->string('exchange_time_zone');
            $table->string('quote_type');
            $table->string('market');
            $table->unsignedInteger('sector_id')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_info');
    }
}
