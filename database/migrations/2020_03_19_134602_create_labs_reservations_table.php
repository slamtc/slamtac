<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('labs_appointments_id')->unsigned();
            $table->foreign('labs_appointments_id')->references('id')->on('labs_appointments')->onDelete('cascade');
            $table->integer('labs_branche_id')->unsigned();
            $table->foreign('labs_branche_id')->references('id')->on('labs_branches')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->string('code',14)->unique();
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
        Schema::dropIfExists('labs_reservations');
    }
}
