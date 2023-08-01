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
        Schema::create('realizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('item_kpi_id')->nullable();
            $table->unsignedBigInteger('period_id')->nullable();
            $table->bigInteger('realization')->nullable();
            $table->timestamps();

            $table->foreign('item_kpi_id')->references('id')->on('item_kpis')->onDelete('cascade');
            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realizations');
    }
};
