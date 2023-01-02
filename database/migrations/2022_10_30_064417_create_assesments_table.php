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
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('pre_assessor')->nullable();
            $table->integer('pre_authenticity')->nullable();
            $table->integer('pre_articulation')->nullable();
            $table->integer('pre_logical_reasoning')->nullable();
            $table->integer('pre_subtotal')->nullable();
            $table->string('select_for_writing_test')->nullable();
            $table->longText('pre-selection_remark')->nullable();
            $table->string('preselection_stage')->default('pending');
            $table->string('pre_follow_up_assessor_name')->nullable();
            $table->string('pre_follow_up_stage')->default('pending');
            $table->string('pre_contact_media')->nullable();
            $table->string('want_attend_for_test')->nullable();
            $table->longText('reason_for_not_attending_test')->nullable();
            $table->dateTime('test_time')->nullable();
            $table->string('writing_test_assessor')->nullable();
            $table->string('writing_test_attended')->nullable();
            $table->integer('total_score')->nullable();
            $table->integer('writing_and_appication_score')->nullable();
            $table->string('select_for_interview')->nullable();
            $table->longText('writing_remark')->nullable();
            $table->string('writing_preselection_stage')->default('pending');
            $table->string('writing_follow_up_stage')->default('pending');
            $table->string('test_follow_up_assessor_name')->nullable();
            $table->string('test_contact_media')->nullable();
            $table->string('want_attend_for_interview')->nullable();
            $table->longText('reason_for_not_attending_interview')->nullable();
            $table->dateTime('interview_time')->nullable();
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
            $table->longText('interview_remark')->nullable();
            $table->string('interview_preselection_stage')->default('pending');
            $table->string('interview_follow_up_stage')->default('pending');
            $table->string('interview_follow_up_assessor_name')->nullable();
            $table->string('interview_followup_contact_media')->nullable();
            $table->string('want_to_registration')->nullable();
            $table->string('request_faq')->nullable();
            $table->string('sent_faq')->nullable();
            $table->longText('reason_for_not_registration')->nullable();
            $table->longText('final_remark')->nullable();
            $table->string('registration_status')->default('pending');
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
        Schema::dropIfExists('assesments');
    }
};
