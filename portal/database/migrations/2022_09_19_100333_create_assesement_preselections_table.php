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
        Schema::create('assesement_preselections', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('program_name');
            $table->string('program_batch_id');
            $table->string('assessor')->nullable();
            $table->integer('authenticity')->nullable();
            $table->integer('articulation')->nullable();
            $table->integer('logical_reasoning')->nullable();
            $table->integer('subtotal')->nullable();
            $table->string('select_for_writing_test')->nullable();
            $table->string('preselection_stage')->default('pending');
            $table->string('follow_up_stage')->default('pending');
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
        Schema::dropIfExists('assesement_preselections');
    }
};
