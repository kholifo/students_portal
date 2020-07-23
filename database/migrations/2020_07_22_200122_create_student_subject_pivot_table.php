<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentSubjectPivotTable extends Migration
{
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->integer('mark')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_subject');
    }
}
