<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paket');
            $table->unsignedBigInteger('id_user');
            $table->bigInteger('Total');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on("users");
            $table->foreign('id_paket')->references('id')->on("booking");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_user');
    }
}
