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
        Schema::create('corp_months', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pdash_id')->nullable();
            $table->bigInteger('value_rev')->nullable();
            $table->bigInteger('value_po')->nullable();
            $table->bigInteger('value_aging')->nullable();
            $table->string('type_job')->nullable();
            $table->timestamps();

            $table->foreign('pdash_id')->references('id')->on('pdashes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corp_months');
    }
};
