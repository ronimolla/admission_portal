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
        Schema::create('interviews', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('interviewer')->nullable();
            $table->string('attend_interview')->nullable();
            $table->string('attend_group_discussion')->nullable();
            $table->integer('competence')->nullable();
            $table->integer('courage')->nullable();
            $table->integer('compassion')->nullable();
            $table->integer('commitment')->nullable();
            $table->integer('total_interview_marks')->nullable();
            $table->integer('all_totall_marks')->nullable();
            $table->string('select_for_registration')->nullable();
            $table->string('interview_preselection_stage')->default('pending');
            $table->string('interview_follow_up_stage')->default('pending');
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
        Schema::dropIfExists('interviews');
    }
};
