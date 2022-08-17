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

        // QUIZ DOESN'T NEED AN IMAGE
        // $table->string('cover')->nullable();
        
        $table->timestamps();
        $table->unsignedBigInteger('users_id');
        // $table->foreign('id')
        //       ->references('id')
        //       ->on('users')
        //       ->onDelete('cascade')
        //       ->onUpdate('cascade');
        
        
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
