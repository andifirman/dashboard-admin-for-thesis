<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quizzes', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');

        // $table->uuid('uuid')->nullable();

        $table->string('title');
        $table->string('publisher');
        $table->integer('releasedate');

        $table->string('cover')->nullable();
        
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
        Schema::dropIfExists('quizzes');
    }
}
