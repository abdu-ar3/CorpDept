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
        Schema::create('po_achievs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pdash_id')->nullable();
            $table->unsignedBigInteger('type_job_id')->nullable();
            $table->bigInteger('value')->nullable();
            $table->timestamps();

            $table->foreign('pdash_id')->references('id')->on('pdashes');
            $table->foreign('type_job_id')->references('id')->on('type_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('po_achievs');
    }
};
