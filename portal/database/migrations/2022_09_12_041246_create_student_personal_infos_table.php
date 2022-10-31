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
        Schema::create('student_personal_infos', function (Blueprint $table) {
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
            $table->integer('nid')->nullable();        
            $table->integer('birth_certificate')->nullable();
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
        Schema::dropIfExists('student_personal_infos');
    }
};
