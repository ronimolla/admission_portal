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
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('participant_id');
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nid')->nullable();
            $table->string('mother_name')->nullable();          
            $table->string('blood_group')->nullable();
            
            $table->string('phone')->nullable();
            $table->string('email')->nullable();          
            $table->string('emergency_contact')->nullable();
            
            $table->string('present_apartment_no')->nullable();
            $table->string('present_house_no')->nullable();
            $table->string('present_road_no_OR_village')->nullable();
            $table->string('present_thana_OR_upazala')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_division')->nullable();
            $table->string('present_post_code')->nullable();

            $table->string('occupation')->nullable();
            $table->string('organization_name')->nullable();

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
        Schema::dropIfExists('participants');
    }
};
