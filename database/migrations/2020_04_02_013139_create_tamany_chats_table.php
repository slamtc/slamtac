<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamanyChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamany_chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('consulting_id')->unsigned();
            $table->foreign('consulting_id')->references('id')->on('consultings')->onDelete('cascade');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('message');
            $table->tinyInteger('seen');
            $table->tinyInteger('type');
            $table->string('photo')->nullable;
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
        Schema::dropIfExists('tamany_chats');
    }
}
