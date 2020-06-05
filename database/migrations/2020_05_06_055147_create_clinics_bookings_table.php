<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clinics_reservation_id')->unsigned();
            $table->foreign('clinics_reservation_id')->references('id')->on('clinics_reservations')->onDelete('cascade');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->string('code',14)->unique();
            $table->tinyInteger('type');
            $table->decimal('cl_price',8, 2)->nullable()->default(0);
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
        Schema::dropIfExists('clinics_bookings');
    }
}
