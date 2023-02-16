<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 60);
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('dni',8);
            $table->string('cellphone',12);
            $table->string('profession',50);
            $table->integer('age');
            $table->string('gender');
            $table->string('city');
            $table->unsignedBigInteger('leader_id');
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
};
