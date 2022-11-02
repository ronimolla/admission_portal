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
        Schema::create('financial_aids', function (Blueprint $table) {
            $table->id();
            $table->string('program_batch_name')->nullable();
            $table->string('program_batch_id');
            $table->string('student_id')->nullable();

            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('bgn_member_id')->nullable();
            $table->string('family_members')->nullable();

            $table->string('earning_person_number')->nullable();

            $table->string('earning_person_father')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact_number')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_organization_name')->nullable();
            $table->integer('father_monthly_income')->nullable();
            $table->string('earning_person_mother')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_organization_name')->nullable();
            $table->integer('mother_monthly_income')->nullable();
            $table->string('earning_person_other')->nullable();

            $table->string('other_name')->nullable();

            $table->string('relation')->nullable();
            $table->string('other_contact_number')->nullable();
            $table->string('other_occupation')->nullable();
            $table->string('other_organization_name')->nullable();

            $table->string('other_monthly_income')->nullable();
            $table->string('income_from_asset')->nullable();
            $table->integer('tuition_fees')->nullable();
            $table->integer('booking_supplies')->nullable();
            $table->integer('living_expenses')->nullable();
            $table->integer('total_educational_expense')->nullable();
            $table->integer('personal_expenses')->nullable();
            $table->integer('transportation_expenses')->nullable();

            $table->integer('parent_contribution')->nullable();
            $table->integer('own_contribution')->nullable();
            $table->integer('total_earning')->nullable();
            $table->integer('scholarship')->nullable();
            $table->integer('other_member_contribution')->nullable();
            $table->integer('total_resource')->nullable();
            $table->string('reason_for_apply')->nullable();
            $table->string('communicate_person')->nullable();
            $table->string('update_request')->default('pending');
            
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
        Schema::dropIfExists('financial_aids');
    }
};
