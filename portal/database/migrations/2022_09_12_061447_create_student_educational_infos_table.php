<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_educational_infos', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('educational_medium')->nullable();
            $table->string('educational_lavel')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('college')->nullable();
            $table->string('department')->nullable();
            $table->integer('college_passing_year')->nullable(); 
            $table->string('college_current_year')->nullable();
            $table->float('gpa')->nullable();
            $table->string('university')->nullable(); 
            $table->string('degree')->nullable(); 
            $table->integer('uni_passing_year')->nullable();
            $table->string('uni_current_year')->nullable();
            $table->float('cgpa')->nullable(); 
            $table->string('extracurricular')->nullable();
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
        Schema::dropIfExists('student_educational_infos');
    }
};
