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
        Schema::create('student_contact_infos', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('email_address')->nullable();
            $table->integer('personal_phone_no')->nullable();
            $table->integer('emergency_contact_no')->nullable();
            $table->integer('guardian_phone_no')->nullable();
            $table->integer('guardian_phone_no2')->nullable();
            $table->string('guardian_email_address')->nullable();          
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
        Schema::dropIfExists('student_contact_infos');
    }
};
