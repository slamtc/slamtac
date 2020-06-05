<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->decimal('latitude', 11, 7);
            $table->decimal('longitude', 11, 7);
            $table->string('cl_name_ar')->default('');
            $table->string('cl_name_en')->default('');
            $table->tinyinteger('cl_building_number_ar');
            $table->tinyinteger('cl_building_number_en');
            $table->string('cl_floor_ar')->length(20)->nullable()->default('');
            $table->string('cl_floor_en')->length(20)->nullable()->default('');
            $table->tinyinteger('cl_apartment_ar')->nullable();  
            $table->tinyinteger('cl_apartment_en')->nullable();
            $table->string('cl_landmark_ar')->nullable()->default(''); 
            $table->string('cl_landmark_en')->nullable()->default('');
            $table->string('cl_phone')->length(20)->default(''); 
            $table->string('cl_street_name_ar')->nullable()->default('');
            $table->string('cl_street_name_en')->nullable()->default('');
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
        Schema::dropIfExists('clinics');
    }
}
