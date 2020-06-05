<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctors_operation_id')->unsigned();
            $table->foreign('doctors_operation_id')->references('id')->on('doctors_operations')->onDelete('cascade');
            $table->date('appointment');
            $table->time('from');
            $table->time('to');  
            $table->boolean('status')->default(0);
            $table->tinyInteger('kind');
            $table->enum('days', ['1', '2', '3', '4', '5', '6', '7']);
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
        Schema::dropIfExists('operations_reservations');
    }
}
