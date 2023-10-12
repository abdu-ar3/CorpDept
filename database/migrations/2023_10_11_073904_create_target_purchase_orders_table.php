<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("target");
            $table->bigInteger("grand_total");
            $table->bigInteger("selisih");
            $table->bigInteger("value_grafik");
            $table->bigInteger("persentase");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_purchase_orders');
    }
};
