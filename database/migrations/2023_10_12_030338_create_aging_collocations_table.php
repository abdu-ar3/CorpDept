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
        Schema::create('aging_collocations', function (Blueprint $table) {
            $table->id();  
            $table->string("sub_type")->nullable();
            $table->string("cust")->nullable();
            $table->string("nama_site")->nullable();
            $table->string("nilai_so")->nullable();
            $table->string("pic")->nullable();
            $table->integer("progres")->nullable();
            $table->integer("target_aging")->nullable();
            $table->integer("realisasi")->nullable();
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
        Schema::dropIfExists('aging_collocations');
    }
};
