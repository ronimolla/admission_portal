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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('program_batch_name')->nullable();
            $table->string('program_batch_id');
            $table->integer('registration_fees')->nullable();;
            $table->integer('final_registration_fees')->nullable();
            $table->string('payment_media')->nullable();
            $table->string('reference')->nullable();
            $table->string('payment_mobileno')->nullable();
            $table->string('2nd_payment_media')->nullable();
            $table->string('2nd_reference')->nullable();
            $table->string('2nd_payment_mobileno')->nullable();
            $table->string('image')->nullable();
            $table->string('payment_status')->default('pending');

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
        Schema::dropIfExists('payments');
    }
};
