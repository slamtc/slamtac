<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('pharmacy_id')->unsigned();
            $table->foreign('pharmacy_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('latitude', 11, 7);
            $table->decimal('longitude', 11, 7);
            $table->string('name',50);
            $table->string('phone',20);
            $table->string('adress');
            $table->string('special_marque',100)->nullable();
            $table->text('note')->nullable();
            $table->string('code',14)->unique();
            $table->integer('discount')->nullable();
            $table->integer('status')->boolean()->default(0);
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
        Schema::dropIfExists('pharmacies_orders');
    }
}
