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
        Schema::create('student_address_infos', function (Blueprint $table) {
            $table->string('student_id');
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
        Schema::dropIfExists('student_address_infos');
    }
};
