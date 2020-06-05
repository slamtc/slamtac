<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('labs_branches_id')->unsigned();
            $table->foreign('labs_branches_id')->references('id')->on('labs_branches')->onDelete('cascade');
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
        Schema::dropIfExists('labs_views');
    }
}
