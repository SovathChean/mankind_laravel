<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctor_id')->unsigned();
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->timestamps();

        });
      //   Schema::table('make_appointments', function ($table){
      //   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      //   $tale->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
      //   $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('make_appointments');
    }
}
