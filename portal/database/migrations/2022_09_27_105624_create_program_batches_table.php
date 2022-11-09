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
        Schema::create('program_batches', function (Blueprint $table) {
            $table->id('batch_id');
            $table->integer('program_id');
            $table->string('batch_name')->unique();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('program_start_date')->nullable();
            $table->date('program_end_date')->nullable();
            $table->integer('program_duration')->nullable();
            $table->string('program_mode')->nullable();
            $table->string('class_time')->nullable();
            $table->integer('registration_fees')->nullable();
            $table->string('current_state')->default('running');
            $table->date('registration_deadline')->nullable();
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
        Schema::dropIfExists('program_batches');
    }
};
