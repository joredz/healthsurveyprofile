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
        Schema::create('temp_family_members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->integer('head_of_the_family')->nullable()->default(0);
            $table->string('sex')->nullable();
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            $table->string('other_information')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_family_members');
    }
};
