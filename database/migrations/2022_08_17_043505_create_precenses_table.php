<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrecensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precenses', function (Blueprint $table) {
          // $table->foreign('id')
          //       ->references('id')
          //       ->on('students')
          //       ->onDelete('cascade')
          //       ->onUpdate('cascade');
          // $table->foreign('id')
          //       ->references('id')
          //       ->on('games')
          //       ->onDelete('cascade')
          //       ->onUpdate('cascade');
          $table->unsignedBigInteger('students_id');
          $table->unsignedInteger('games_id');
          $table->integer('stu_precense');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precenses');
    }
}
