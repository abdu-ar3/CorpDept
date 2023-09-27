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
        Schema::create('kpi_items', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('event_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('area', 100)->nullable();
            $table->string('kpi')->nullable();
            $table->string('calculation')->nullable();
            $table->bigInteger('target')->nullable();
            $table->bigInteger('realization')->nullable();
            $table->integer('weight')->nullable();
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpi_items');
    }
};
