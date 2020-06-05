<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pharmacies_branch_id')->unsigned();
            $table->foreign('pharmacies_branch_id')->references('id')->on('pharmacies_branches')->onDelete('cascade');
            $table->string('token_device');
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
        Schema::dropIfExists('pharmacies_views');
    }
}
