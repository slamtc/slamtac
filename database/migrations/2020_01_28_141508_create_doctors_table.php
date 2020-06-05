<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('titles_id')->unsigned()->nullable();
            $table->foreign('titles_id')->references('id')->on('titles')->onDelete('cascade');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('last_name_ar');
            $table->string('last_name_en');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('photo')->nullable();
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('specialties_id')->unsigned();
            $table->foreign('specialties_id')->references('id')->on('basic_specialties')->onDelete('cascade');
            $table->text('brief_ar')->nullable();
            $table->text('brief_en')->nullable();
            $table->decimal('cl_price',8, 2)->nullable()->default(0);
            $table->enum('rating', ['0', '1','2','3','4','5']);
            $table->tinyInteger('paied')->default(0);
            $table->string('waittime')->length(10)->default(0);
            $table->enum('gender', ['m', 'f']);
            $table->boolean('promocode')->default(0);
            $table->integer('doctorviews')->default(0);
            $table->string('personal_realization')->nullable();
            $table->date('barthday')->nullable()->default('0000-00-00');
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
        Schema::dropIfExists('doctors');
    }
}
