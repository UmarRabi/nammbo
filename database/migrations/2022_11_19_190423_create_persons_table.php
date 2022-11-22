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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vin');
            $table->string('email');
            $table->string('age');
            $table->boolean('exco');
            $table->string('state_code');
            $table->string('position_code');
            $table->timestamps();
            $table->foreign('state_code')->references('code')->on('states')->onDelete('cascade');
            $table->foreign('position_code')->references('code')->on('positions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
};
