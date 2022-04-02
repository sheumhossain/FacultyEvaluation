<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->bigInteger('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedTinyInteger('prepared');
            $table->unsignedTinyInteger('knows');
            $table->unsignedTinyInteger('organised');
            $table->unsignedTinyInteger('plan_assignment');
            $table->unsignedTinyInteger('flexible');
            $table->unsignedTinyInteger('time');
            $table->unsignedTinyInteger('homework');
            $table->unsignedTinyInteger('grade');
            $table->unsignedTinyInteger('clear');
            $table->unsignedTinyInteger('creative');
            $table->unsignedTinyInteger('feedback');
            $table->unsignedTinyInteger('encourage');
            $table->unsignedTinyInteger('learned');
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
        Schema::dropIfExists('ratings');
    }
}
