<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookNurseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_nurseries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('nursery_id')->unsigned();
            $table->foreign('nursery_id')->references('id')->on('nurseries')->onDelete('cascade');
            $table->string('code')->unique()->length(20);
            $table->string('child_name')->nullable();
            $table->tinyInteger('stutas')->default(0);
            $table->date('appointment');
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
        Schema::dropIfExists('book_nurseries');
    }
}
