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
        Schema::create('waivers', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('full_name')->nullable();
            $table->string('program_batch_name')->nullable();
            $table->string('program_batch_id')->nullable();
            $table->string('educational_medium')->nullable();
            $table->string('waiver_percentage')->nullable();
            $table->integer('waiver_amount')->nullable();
            $table->string('waiver_reason')->nullable();
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
        Schema::dropIfExists('waivers');
    }
};
