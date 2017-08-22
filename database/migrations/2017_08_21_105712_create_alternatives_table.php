<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->increments('alternativeID');
            $table->string('name', 40);
            $table->float('C1', 4, 4);
            $table->float('C2', 4, 4);
            $table->float('C3', 4, 4);
            $table->float('C4', 4, 4);
            $table->float('C5', 4, 4);
            $table->float('C6', 4, 4);
            $table->float('C7', 4, 4);
            $table->float('C8', 4, 4);
            $table->float('C9', 4, 4);
            $table->float('C10', 4, 4);
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
        Schema::dropIfExists('alternatives');
    }
}
