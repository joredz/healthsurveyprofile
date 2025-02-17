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
        Schema::create('puroks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('barangay_id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puroks');
    }
};
