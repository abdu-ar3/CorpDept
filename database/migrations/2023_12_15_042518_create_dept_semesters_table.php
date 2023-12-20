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
        Schema::create('dept_semesters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_semester_id')->nullable();
            $table->integer('value')->nullable();
            $table->timestamps();

            $table->foreign('event_semester_id')->references('id')->on('event_semesters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_semesters');
    }
};
