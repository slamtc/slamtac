<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('lab_name_ar');
            $table->string('lab_name_en');
            $table->string('photo');
            $table->enum('rating', ['0', '1','2','3','4','5']);
            $table->text('information_ar');
            $table->text('information_en');
            $table->time('froms');
            $table->time('too');
            $table->decimal('price',8, 2)->nullable();
            $table->text('phone',20);
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
        Schema::dropIfExists('labs');
    }
}
