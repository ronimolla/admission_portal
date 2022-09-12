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
            $table->id();
            $table->string('student_id')->unique();
            $table->string('full_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('nationality');
            $table->string('father_name');
            $table->string('mother_name');          
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('ethnicity');
            $table->string('disability');
            $table->integer('nid');         
            $table->integer('birth_certificate');
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
