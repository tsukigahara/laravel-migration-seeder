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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('code');
            $table->string('extra_information');
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
        Schema::dropIfExists('train');
    }
};
