<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',50);
            $table->string('lastName',50);
            $table->string('day_one',100)->nullable();
            $table->string('day_two',100)->nullable();
            $table->string('day_three',100)->nullable();
            $table->string('day_four',100)->nullable();
            $table->string('day_five',100)->nullable();
            $table->string('day_six',100)->nullable();
            $table->string('day_seven',100)->nullable();
            $table->string('day_eight',100)->nullable();
            $table->string('day_nine',100)->nullable();
            $table->string('day_ten',100)->nullable();
            $table->string('day_eleven',100)->nullable();
            $table->string('day_twelve',100)->nullable();
            $table->string('day_thirteen',100)->nullable();
            $table->string('day_fourteen',100)->nullable();
            $table->string('status',100)->nullable();
            $table->string('result',100)->nullable();
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
        Schema::dropIfExists('history');
    }
}
