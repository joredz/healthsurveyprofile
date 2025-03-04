<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthSurveyData extends Model
{
    protected $fillable = [
        'year',
        'barangay_id',
        'purok_id',
        'bilang_ng_bahay',
        'tirahan',
        'bilang_ng_miyembro',
        'ulo_ng_pamilya',
        'asawa',
        'religion_id',
        'other_religion_id',
        'user_id',
        'civil_status',
        'income_per_month',
        'petsa_ng_kasal',
        'g',
        'p',
        'bahay_id',
        'lote_id',
        'uri_bahay_id',
        'paninirahan_id',
        'may_kubeta',
        'uri_kubeta',
        'klase_ng_toilet',
        'saan_tae',
        'may_basurahan',
        'pagbubukod',
        'paraan_pangongolekta',
        'paraan_pagtatapon',
        'water_source',
        'one_klase',
        'one_type',
        'one_caretaker',
        'two_klase',
        'two_type',
        'two_caretaker',
        'refilling_station',
        'other_refilling_station',
        'doubtful_source',
        'doubtful_type',
        'doubtful_caretaker',
        'waste_water',
        'est_pangpagkaen',
        'anong_klase',
        'other_klase',
        'family_planning',
        'family_planning_saan',
        'asin',
        'alagang_hayop',
        'mga_tanim',
        'halamang_gamot',
        'gumagamit_gamot',
        'may_kuryente',
        'cp_one',
        'cp_two',
        'cp_three',
        'cp_four',
        'philhealth_member',
        'philhealth_number',
        'phil_category'
    ];

}
