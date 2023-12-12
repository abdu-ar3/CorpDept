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
        Schema::create('hc_podecusts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_job_id')->nullable();
            $table->string('cust')->nullable();
            $table->bigInteger('value')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('hc_podecusts');
    }
};
