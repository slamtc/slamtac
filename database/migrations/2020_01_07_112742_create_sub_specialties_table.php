<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ba_specialty_id')->unsigned();
            $table->foreign('ba_specialty_id')->references('id')->on('basic_specialties')->onDelete('cascade');
            $table->string('sub_specialty_name_ar');
            $table->string('sub_specialty_name_en');
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
        Schema::dropIfExists('sub_specialties');
    }
}
