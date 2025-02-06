<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('family_member_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('health_survey_data_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            $table->string('other_information')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('health_survey_data_id')->references('id')->on('health_survey_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_member_data');
    }
};
