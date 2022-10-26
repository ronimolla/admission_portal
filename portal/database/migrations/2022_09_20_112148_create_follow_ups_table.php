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
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('pre_follow_up_assessor_name')->nullable();
            $table->string('pre_contact_media')->nullable();
            $table->string('want_attend_for_test')->nullable();
            $table->string('reason_for_not_attending_test')->nullable();
            $table->dateTime('test_time')->nullable();
            $table->string('test_follow_up_assessor_name')->nullable();
            $table->string('test_contact_media')->nullable();
            $table->string('want_attend_for_interview')->nullable();
            $table->string('reason_for_not_attending_interview')->nullable();
            $table->dateTime('interview_time')->nullable();
            $table->string('interview_follow_up_assessor_name')->nullable();
            $table->string('interview_followup_contact_media')->nullable();
            $table->string('want_to_registration')->nullable();
            $table->string('request_faq')->nullable();
            $table->string('sent_faq')->nullable();
            $table->string('reason_for_not_registration')->nullable();
            $table->string('final_remark')->nullable();

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
        Schema::dropIfExists('follow_ups');
    }
};
