<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',50);
            $table->string('lastName',50);
            $table->date('arrival_date')->nullable();
            $table->date('release_date')->nullable();
            $table->string('traveler_number',50)->nullable();//
            $table->string('address',50);
            $table->string('sex',50);
            $table->integer('age');
            $table->date('date_of_birth');
            $table->bigInteger('contactNo');
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
        Schema::dropIfExists('travelers');
    }
}
