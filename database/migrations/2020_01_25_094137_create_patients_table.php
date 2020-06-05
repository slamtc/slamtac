<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ppatient_id')->unsigned();
            $table->foreign('ppatient_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('patient_name');
            $table->enum('gender', ['m', 'f']);
            $table->date('date_birth');
            $table->string('photo')->default('default-avatar.jpg');//
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
        Schema::dropIfExists('patients');
    }
}
