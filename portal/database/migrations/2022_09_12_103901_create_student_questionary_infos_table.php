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
        Schema::create('student_questionary_infos', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('justify_answer')->nullable();
            $table->string('ambition')->nullable();
            $table->string('short_bio')->nullable();
            $table->string('analytics_ans')->nullable();
            $table->string('narrative_writing_1')->nullable();
            $table->string('narrative_writing_2')->nullable();
            $table->string('mcq_1')->nullable(); 
            $table->string('mcq_2')->nullable(); 
            $table->string('mcq_3')->nullable(); 
            $table->string('mcq_4')->nullable(); 
            $table->string('mcq_5')->nullable(); 
            $table->string('question_1')->nullable(); 
            $table->string('question_2')->nullable(); 
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
        Schema::dropIfExists('student_questionary_infos');
    }
};
