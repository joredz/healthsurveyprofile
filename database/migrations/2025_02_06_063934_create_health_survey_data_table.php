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
        Schema::create('health_survey_data', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->bigInteger('barangay_id');
            $table->bigInteger('purok_id');
            $table->string('bilang_ng_bahay');
            $table->string('tirahan');
            $table->integer('bilang_ng_miyembro');
            $table->string('ulo_ng_pamilya')->nullable();
            $table->string('asawa')->nullable();
            $table->bigInteger('religion_id');
            $table->bigInteger('other_religion_id')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('civil_status');
            $table->integer('income_per_month');
            $table->date('petsa_ng_kasal')->nullable();
            $table->integer('g');
            $table->integer('p');
            $table->bigInteger('bahay_id');
            $table->bigInteger('lote_id');
            $table->bigInteger('uri_bahay_id');
            $table->bigInteger('paninirahan_id');
            $table->integer('may_kubeta');
            $table->integer('uri_kubeta')->nullable();
            $table->integer('klase_ng_toilet')->nullable();
            $table->integer('saan_tae')->nullable();
            $table->integer('may_basurahan');
            $table->integer('pagbubukod');
            $table->integer('paraan_pangongolekta');
            $table->integer('paraan_pagtatapon');
            $table->integer('water_source');
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
            $table->integer('waste_water');
            $table->integer('est_pangpagkaen');
            $table->integer('anong_klase')->nullable();
            $table->string('other_klase')->nullable();
            $table->integer('family_planning');
            $table->integer('asin');
            $table->integer('alagang_hayop');
            $table->string('mga_tanim');
            $table->string('halamang_gamot');
            $table->integer('gumagamit_gamot');
            $table->integer('may_kuryente');
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
        Schema::dropIfExists('health_survey_data');
    }
};
