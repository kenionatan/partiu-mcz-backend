<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150);
            $table->string('street', 120);
            $table->string('number', 10);
            $table->string('neighborhood', 120);
            $table->string('additional', 200)->nullable();
            $table->string('zipcode', 10);
            $table->string('city', 100);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('latitude', 20);
            $table->string('longitude', 20);
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
        Schema::dropIfExists('hotels');
    }
}
