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
        Schema::table('appointments', function($table) {
            $table->unsignedBigInteger('appoinment_files_id');
            $table->foreign('appoinment_files_id')->references('id')->on('appointment_files');
        });


        Schema::table('appointments', function($table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });


        Schema::table('appointments', function($table) {
            $table->unsignedBigInteger('timeslot_id');
            $table->foreign('timeslot_id')->references('id')->on('timeslots');
        });


        Schema::table('appointments', function($table) {
            $table->unsignedBigInteger('church_id');
            $table->foreign('church_id')->references('id')->on('church');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference');
    }
};
