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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 50);
            $table->string('starting_station', 50);
            $table->string('end_station', 50);
            $table->string('departure_time', 8);
            $table->string('arrival_time', 8);
            $table->string('train_code', 8);
            $table->tinyInteger('number_coaches');
            $table->boolean('on_time');
            $table->boolean('deleted');

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
        Schema::dropIfExists('trains');
    }
};
