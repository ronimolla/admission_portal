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
            $table->longText('justify_answer')->nullable();
            $table->longText('ambition')->nullable();
            $table->longText('short_bio')->nullable();
            $table->longText('analytics_ans')->nullable();
            $table->longText('narrative_writing_1')->nullable();
            $table->longText('narrative_writing_2')->nullable();
            $table->string('mcq_1')->nullable(); 
            $table->string('mcq_2')->nullable(); 
            $table->string('mcq_3')->nullable(); 
            $table->string('mcq_4')->nullable(); 
            $table->string('mcq_5')->nullable(); 
            $table->longText('question_1')->nullable(); 
            $table->longText('question_2')->nullable(); 
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
