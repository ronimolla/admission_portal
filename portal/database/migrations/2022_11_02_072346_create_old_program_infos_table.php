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
        Schema::create('old_program_infos', function (Blueprint $table) {
            $table->increments('id');
            //personal info
            $table->string('student_id');
            $table->string('program_name')->nullable();
            $table->string('program_batch_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();          
            $table->string('guardian_name')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('ethnicity_name')->nullable();
            $table->string('disability')->nullable();
            $table->string('disability_name')->nullable();
            //contact info
            $table->string('email_address')->nullable();
            $table->integer('personal_phone_no')->nullable();
            $table->integer('emergency_contact_no')->nullable();
            $table->integer('guardian_phone_no')->nullable();
            $table->integer('guardian_phone_no2')->nullable();
            $table->string('guardian_email_address')->nullable();  
            //address info
            $table->string('present_apartment_no')->nullable();
            $table->string('present_house_no')->nullable();
            $table->string('present_road_no_OR_village')->nullable();
            $table->string('present_thana_OR_upazala')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_division')->nullable();
            $table->string('present_post_code')->nullable(); 
            $table->string('present_similar_to_permanent')->nullable();
            $table->string('permanent_apartment_no')->nullable();
            $table->string('permanent_house_no')->nullable();
            $table->string('permanent_road_no_OR_village')->nullable();
            $table->string('permanent_thana_OR_upazala')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_division')->nullable();
            $table->string('permanent_post_code')->nullable(); 
            //educational  info
            $table->string('educational_medium')->nullable();
            $table->string('educational_lavel')->nullable();
            $table->string('secondary_educational_lavel')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('ssc_passing_year')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('higher_secondary_level')->nullable();
            $table->string('college')->nullable();
            $table->string('department')->nullable();
            $table->integer('college_passing_year')->nullable(); 
            $table->string('college_current_year')->nullable();
            $table->float('gpa')->nullable();
            $table->string('admission_of_udergraduation')->nullable();
            $table->string('undergraduate_level')->nullable();
            $table->string('university')->nullable(); 
            $table->string('degree')->nullable(); 
            $table->integer('uni_passing_year')->nullable();
            $table->string('uni_current_year')->nullable();
            $table->float('cgpa')->nullable(); 
            $table->string('extracurricular')->nullable();
            
            //assessment
            // $table->string('pre_assessor')->nullable();
            // $table->integer('pre_authenticity')->nullable();
            // $table->integer('pre_articulation')->nullable();
            // $table->integer('pre_logical_reasoning')->nullable();
            // $table->integer('pre_subtotal')->nullable();
            // $table->string('select_for_writing_test')->nullable();
            // $table->string('preselection_stage')->nullable();
            // $table->string('pre_follow_up_assessor_name')->nullable();
            // $table->string('pre_follow_up_stage')->nullable();
            // $table->string('pre_contact_media')->nullable();
            // $table->string('want_attend_for_test')->nullable();
            // $table->string('reason_for_not_attending_test')->nullable();
            // $table->dateTime('test_time')->nullable();
            // $table->string('writing_test_assessor')->nullable();
            // $table->string('writing_test_attended')->nullable();
            // $table->integer('total_score')->nullable();
            // $table->integer('writing_and_appication_score')->nullable();
            // $table->string('select_for_interview')->nullable();
            // $table->string('writing_preselection_stage')->nullable();
            // $table->string('writing_follow_up_stage')->nullable();
            // $table->string('test_follow_up_assessor_name')->nullable();
            // $table->string('test_contact_media')->nullable();
            // $table->string('want_attend_for_interview')->nullable();
            // $table->string('reason_for_not_attending_interview')->nullable();
            // $table->dateTime('interview_time')->nullable();
            // $table->string('interviewer')->nullable();
            // $table->string('attend_interview')->nullable();
            // $table->string('attend_group_discussion')->nullable();
            // $table->integer('competence')->nullable();
            // $table->integer('courage')->nullable();
            // $table->integer('compassion')->nullable();
            // $table->integer('commitment')->nullable();
            // $table->integer('total_interview_marks')->nullable();
            // $table->integer('all_totall_marks')->nullable();
            // $table->string('select_for_registration')->nullable();
            // $table->string('interview_preselection_stage')->nullable();
            // $table->string('interview_follow_up_stage')->nullable();
            // $table->string('interview_follow_up_assessor_name')->nullable();
            // $table->string('interview_followup_contact_media')->nullable();
            // $table->string('want_to_registration')->nullable();
            // $table->string('reason_for_not_registration')->nullable();
            // $table->string('final_remark')->nullable();
            
            //waiver_info
            $table->integer('waiver_percentage')->nullable();
            $table->integer('waiver_amount')->nullable();
            $table->string('waiver_reason')->nullable();


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
        Schema::dropIfExists('old_program_infos');
    }
};
