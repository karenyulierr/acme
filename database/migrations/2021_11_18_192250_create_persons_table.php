<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
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
            $table->string('identification', 20);
            $table->string('first_name', 20);
            $table->string('second_name', 20);
            $table->string('lastname', 20);
            $table->string('address', 20);
            $table->string('phone', 20);
            $table->enum('type_person', ['Propietario', 'Conductor']);
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            //Relations
            $table->foreign('city_id')->references('id')->on('cities');
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
}
