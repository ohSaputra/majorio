<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->increments('resultID');
            $table->integer('quizID');
            $table->float('A1', 4, 4);
            $table->float('A2', 4, 4);
            $table->float('A3', 4, 4);
            $table->float('A4', 4, 4);
            $table->float('A5', 4, 4);
            $table->float('A6', 4, 4);
            $table->float('A7', 4, 4);
            $table->float('A8', 4, 4);
            $table->float('A9', 4, 4);
            $table->float('A10', 4, 4);
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
        Schema::dropIfExists('result');
    }
}
