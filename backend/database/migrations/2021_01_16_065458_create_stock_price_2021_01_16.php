<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockPrice20210116 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_price', function (Blueprint $table) {
            $table->bigIncrements('stock_price_id');
            $table->unsignedInteger('stock_info_id');
            $table->decimal('previous_close', 9, 2);
            $table->decimal('open', 9, 2);
            $table->decimal('day_low', 9, 2);
            $table->decimal('day_high', 9, 2);
            $table->decimal('day_diff', 9, 2)->default(0);
            $table->decimal('volume', 15, 0);
            $table->decimal('ask', 9, 2);
            $table->decimal('bid', 9, 2);
            $table->decimal('two_hundred_day_average', 9, 2);
            $table->decimal('fifty_day_average', 9, 2);
            $table->decimal('average_volume_10days', 15, 0);
            $table->decimal('average_volume', 15, 0);
            $table->decimal('price_to_sales_trailling_12months', 9, 2);
            $table->decimal('enterprise_value', 15, 0);
            $table->decimal('enterprise_to_revenue', 9, 2);
            $table->decimal('enterprise_to_ebitda', 9, 2);
            $table->decimal('number_52week_change', 9, 2);
            $table->decimal('last_fiscal_year_end', 15, 0);
            $table->decimal('net_income_to_common', 15, 0);
            $table->decimal('most_recent_quarter', 15, 0);
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
        Schema::dropIfExists('stock_price');
    }
}
