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
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('registration_fees')->nullable();;
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
