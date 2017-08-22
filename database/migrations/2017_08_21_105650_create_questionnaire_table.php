<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire', function (Blueprint $table) {
            $table->increments('questionnaireID');
            $table->integer('quizID');
            $table->integer('C1');
            $table->integer('C2');
            $table->integer('C3');
            $table->integer('C4');
            $table->integer('C5');
            $table->integer('C6');
            $table->integer('C7');
            $table->integer('C8');
            $table->integer('C9');
            $table->integer('C10');
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
        Schema::dropIfExists('questionnaire');
    }
}
