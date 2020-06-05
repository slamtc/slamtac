<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            $table->string('operation_name_ar');
            $table->string('operation_name_en');
            $table->integer('basic_specialtie_id')->unsigned();
            $table->foreign('basic_specialtie_id')->references('id')->on('basic_specialties')->onDelete('cascade');
            $table->string('photo');
            $table->enum('rating', ['0', '1','2','3','4','5']);
            $table->decimal('price',8, 2)->nullable();
            $table->text('description_ar');
            $table->text('description_en');
            $table->text('infoforu_ar');
            $table->text('infoforu_en');
            $table->integer('views');
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
        Schema::dropIfExists('doctors_operations');
    }
}
