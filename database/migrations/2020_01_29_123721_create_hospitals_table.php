<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('latitude', 11, 7);
            $table->decimal('longitude', 11, 7);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('hospital_name_ar');
            $table->string('hospital_name_en');
            $table->string('photo');
            $table->text('information_ar');
            $table->text('information_en');
            $table->enum('rating', ['0', '1','2','3','4','5']);
            $table->integer('views')->default(0);
            $table->string('cl_landmark_ar')->default(''); 
            $table->string('cl_landmark_en')->default('');
            $table->string('cl_phone')->default('');
            $table->tinyinteger('cl_building_number_ar');
            $table->tinyinteger('cl_building_number_en');
            $table->string('cl_street_name_ar')->length(50)->default('');
            $table->string('cl_street_name_en')->length(50)->default('');
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
        Schema::dropIfExists('hospitals');
    }
}
