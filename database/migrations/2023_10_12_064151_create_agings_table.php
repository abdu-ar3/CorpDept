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
        Schema::create('agings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->string('project', 25);
            $table->integer('target');
            $table->integer('jumlah_site');
            $table->integer('bobot');
            $table->integer('tercapai');
            $table->integer('tidak_tercapai');
            $table->integer('persentase');
            $table->integer('final');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agings');
    }
};
