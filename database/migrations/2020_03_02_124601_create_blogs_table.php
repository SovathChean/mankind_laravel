<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ht_id')->unsigned();
            $table->string('title');
            $table->text('body');

            $table->integer('user_id')->unsigned();
            $table->timestamps();

        });
        // Schema::table('blogs', function($table){
        //   $table->foreign('ht_id')->references('id')->on('health_topics')->onDelete('cascade');
        //   $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
        //   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
