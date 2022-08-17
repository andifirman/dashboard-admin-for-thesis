<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
          // $table->foreign('id')
          //       ->references('id')
          //       ->on('quizzes')
          //       ->onDelete('cascade')
          //       ->onUpdate('cascade');
          // $table->foreign('id')
          //       ->references('id')
          //       ->on('students')
          //       ->onDelete('cascade')
          //       ->onUpdate('cascade');
          $table->unsignedInteger('quizzes_id');
          $table->unsignedBigInteger('students_id');
          $table->integer('final_score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
