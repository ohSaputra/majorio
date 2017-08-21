<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
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
            $table->float('A1');
            $table->float('A2');
            $table->float('A3');
            $table->float('A4');
            $table->float('A5');
            $table->float('A6');
            $table->float('A7');
            $table->float('A8');
            $table->float('A9');
            $table->float('A10');
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
