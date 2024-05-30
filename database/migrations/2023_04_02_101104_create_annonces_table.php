<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('allstatus')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('message_id');
            // $table->foreign('message_id')->references('id')->on('messages');
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
        Schema::dropIfExists('annonces');
    }
}
