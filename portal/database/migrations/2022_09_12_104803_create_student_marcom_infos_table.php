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
        Schema::create('student_marcom_infos', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('Knowing_media')->nullable();
            $table->string('careerx_program')->nullable();
            $table->string('careerx_bach_no')->nullable();
            $table->string('bootcamp_program')->nullable();
            $table->string('bootcamp_bach_no')->nullable();
            $table->string('campus_ambassador')->nullable();
            $table->string('university_name')->nullable();
            $table->string('quest_1')->nullable();
            $table->string('quest_2')->nullable();
            $table->string('quest_3')->nullable();
            $table->string('mcq_4')->nullable(); 
            $table->string('mcq_5')->nullable(); 
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
        Schema::dropIfExists('student_marcom_infos');
    }
};
