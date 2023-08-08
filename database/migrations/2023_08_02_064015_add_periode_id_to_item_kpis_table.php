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
        Schema::table('item_kpis', function (Blueprint $table) {
            $table->unsignedBigInteger('periode_id')->nullable()->after('user_id');;
            $table->foreign('periode_id')->references('id')->on('periods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_kpis', function (Blueprint $table) {
            //
        });
    }
};
