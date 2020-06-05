<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesOrdersdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies_ordersdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pharmacies_order_id')->unsigned();
            $table->foreign('pharmacies_order_id')->references('id')->on('pharmacies_orders')->onDelete('cascade');
            $table->string('items');
            $table->string('images')->nullable();
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
        Schema::dropIfExists('pharmacies_ordersdetails');
    }
}
