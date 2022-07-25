<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');

        // $table->uuid('uuid')->nullable();

        $table->string('title');
        $table->string('publisher');
        $table->integer('releasedate');
        $table->string('image');
        $table->string('imagesrc');
        $table->string('cover')->nullable();
        $table->string('coursesrc');

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
      Schema::dropIfExists('games');
    }
}
