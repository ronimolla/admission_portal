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
        Schema::create('student_career_infos', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('resume')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('location')->nullable();
            $table->string('reporting_on')->nullable();
            $table->string('joining_date')->nullable(); 
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
        Schema::dropIfExists('student_career_infos');
    }
};
