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
        Schema::create('writing_tests', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('writing_test_assessor')->nullable();
            $table->string('writing_test_attended')->nullable();
            $table->integer('total_score')->nullable();
            $table->integer('writing_and_appication_score')->nullable();
            $table->string('select_for_interview')->nullable();
            $table->string('writing_preselection_stage')->default('pending');
            $table->string('writing_follow_up_stage')->default('pending');
            $table->string('writing_test')->nullable();
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
        Schema::dropIfExists('writing_tests');
    }
};
