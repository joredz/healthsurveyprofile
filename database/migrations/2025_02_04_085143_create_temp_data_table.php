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
        Schema::create('temp_data', function (Blueprint $table) {
            $table->id();
            $table->year('year')->nullable();
            $table->bigInteger('barangay_id')->nullable();
            $table->bigInteger('purok_id')->nullable();
            $table->string('bilang_ng_bahay')->nullable();
            $table->string('tirahan')->nullable();
            $table->integer('bilang_ng_miyembro')->nullable();
            $table->string('ulo_ng_pamilya')->nullable();
            $table->string('asawa')->nullable();
            $table->bigInteger('religion_id')->nullable();
            $table->bigInteger('other_religion_id')->nullable();
            $table->bigInteger('user_id')->unsigned()->index()->unique();
            $table->string('civil_status')->nullable();
            $table->integer('income_per_month')->nullable();
            $table->date('petsa_ng_kasal')->nullable();
            $table->integer('g')->nullable();
            $table->integer('p')->nullable();
            $table->bigInteger('bahay_id')->nullable();
            $table->bigInteger('lote_id')->nullable();
            $table->bigInteger('uri_bahay_id')->nullable();
            $table->bigInteger('paninirahan_id')->nullable();
            $table->integer('may_kubeta')->nullable();
            $table->integer('uri_kubeta')->nullable();
            $table->integer('klase_ng_toilet')->nullable();
            $table->integer('saan_tae')->nullable();
            $table->integer('may_basurahan')->nullable();
            $table->integer('pagbubukod')->nullable();
            $table->integer('paraan_pangongolekta')->nullable();
            $table->integer('paraan_pagtatapon')->nullable();
            $table->integer('water_source')->nullable();
            $table->integer('one_klase')->nullable();
            $table->integer('one_type')->nullable();
            $table->string('one_caretaker')->nullable();
            $table->integer('two_klase')->nullable();
            $table->integer('two_type')->nullable();
            $table->string('two_caretaker')->nullable();
            $table->integer('refilling_station')->nullable();
            $table->string('other_refilling_station')->nullable();
            $table->integer('doubtful_source')->nullable();
            $table->integer('doubtful_type')->nullable();
            $table->string('doubtful_caretaker')->nullable();
            $table->integer('waste_water')->nullable();
            $table->integer('est_pangpagkaen')->nullable();
            $table->integer('anong_klase')->nullable();
            $table->string('other_klase')->nullable();
            $table->integer('family_planning')->nullable();
            $table->integer('family_planning_saan')->nullable();
            $table->integer('asin')->nullable();
            $table->integer('alagang_hayop')->nullable();
            $table->string('mga_tanim')->nullable();
            $table->string('halamang_gamot')->nullable();
            $table->integer('gumagamit_gamot')->nullable();
            $table->integer('may_kuryente')->nullable();
            $table->string('cp_one')->nullable();
            $table->string('cp_two')->nullable();
            $table->string('cp_three')->nullable();
            $table->string('cp_four')->nullable();
            $table->string('philhealth_member')->nullable();
            $table->string('philhealth_number')->nullable();
            $table->integer('phil_category')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_data');
    }
};
