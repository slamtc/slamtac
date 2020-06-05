<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('services_list_id')->unsigned();
            $table->foreign('services_list_id')->references('id')->on('services_lists')->onDelete('cascade');
            $table->integer('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::dropIfExists('labs_services');
    }
}
