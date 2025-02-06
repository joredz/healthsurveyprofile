<?php

namespace App\Livewire;

use App\Models\Barangay;
use App\Models\FamilyMemberData;
use App\Models\HealthSurveyData;
use App\Models\Purok;
use App\Models\TempData;
use App\Models\TempFamilyMembers;
use Livewire\Component;

class HealthSurveyForm extends Component
{
    public $year;
    public $barangay;
    public $purok;
    public $puroks = array();
    public $tab = 0;

    public function updatedYear($value) {
        $this->saveTemp("year", ($value != "") ? $value : null);
    }

    public function updatedBarangay($value) {
        $this->saveTemp("barangay_id", ($value != "") ? $value : null);
    }

    public function updatedPurok($value) {
        $this->saveTemp("purok_id", ($value != "") ? $value : null);
    }

    public function saveTemp($column, $value) {
        if($column == "barangay_id") {
            if($value == ""){
                $value = null;
                $this->updatedPurok(null);
                $this->puroks = [];
            }
        }
        TempData::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [$column => $value]
        );
    }

    public function selectPurok()
    {
        if($this->barangay != ""){
            $this->puroks = Purok::where('barangay_id', $this->barangay)->get();
        }
    }

    public function changeTab($tab)
    {
        $this->tab = $tab;
    }
    public function saveData() {
        $tempData = TempData::where('user_id', auth()->user()->id)->first();
        $tempFamilyMembers = TempFamilyMembers::where('user_id', auth()->user()->id)->get();
        if(is_null($tempData)) {
            return session()->flash('empty', 'No data found.');
        }

        if(!is_null($tempData)) {
            try {

                $data_id = HealthSurveyData::create([
                    'year' => $tempData->year,
                    'barangay_id' => $tempData->barangay_id,
                    'purok_id' => $tempData->purok_id,
                    'bilang_ng_bahay' => $tempData->bilang_ng_bahay,
                    'tirahan' => $tempData->tirahan,
                    'bilang_ng_miyembro' => $tempData->bilang_ng_miyembro,
                    'ulo_ng_pamilya' => $tempData->ulo_ng_pamilya,
                    'asawa' => $tempData->asawa,
                    'religion_id' => $tempData->religion_id,
                    'other_religion_id' => $tempData->other_religion_id,
                    'user_id' => auth()->user()->id,
                    'civil_status' => $tempData->civil_status,
                    'income_per_month' => $tempData->income_per_month,
                    'petsa_ng_kasal' => $tempData->petsa_ng_kasal,
                    'g' => $tempData->g,
                    'p' => $tempData->p,
                    'bahay_id' => $tempData->bahay_id,
                    'lote_id' => $tempData->lote_id,
                    'uri_bahay_id' => $tempData->uri_bahay_id,
                    'paninirahan_id' => $tempData->paninirahan_id,
                    'may_kubeta' => $tempData->may_kubeta,
                    'uri_kubeta' => $tempData->uri_kubeta,
                    'klase_ng_toilet' => $tempData->klase_ng_toilet,
                    'saan_tae' => $tempData->saan_tae,
                    'may_basurahan' => $tempData->may_basurahan,
                    'pagbubukod' => $tempData->pagbubukod,
                    'paraan_pangongolekta' => $tempData->paraan_pangongolekta,
                    'paraan_pagtatapon' => $tempData->paraan_pagtatapon,
                    'water_source' => $tempData->water_source,
                    'one_klase' => $tempData->one_klase,
                    'one_type' => $tempData->one_type,
                    'one_caretaker' => $tempData->one_caretaker,
                    'two_klase' => $tempData->two_klase,
                    'two_type' => $tempData->two_type,
                    'two_caretaker' => $tempData->two_caretaker,
                    'refilling_station' => $tempData->refilling_station,
                    'other_refilling_station' => $tempData->other_refilling_station,
                    'doubtful_source' => $tempData->doubtful_source,
                    'doubtful_type' => $tempData->doubtful_type,
                    'doubtful_caretaker' => $tempData->doubtful_caretaker,
                    'waste_water' => $tempData->waste_water,
                    'est_pangpagkaen' => $tempData->est_pangpagkaen,
                    'anong_klase' => $tempData->anong_klase,
                    'other_klase' => $tempData->other_klase,
                    'family_planning' => $tempData->family_planning,
                    'asin' => $tempData->asin,
                    'alagang_hayop' => $tempData->alagang_hayop,
                    'mga_tanim' => $tempData->mga_tanim,
                    'halamang_gamot' => $tempData->halamang_gamot,
                    'gumagamit_gamot' => $tempData->gumagamit_gamot,
                    'may_kuryente' => $tempData->may_kuryente,
                    'cp_one' => $tempData->cp_one,
                    'cp_two' => $tempData->cp_two,
                    'cp_three' => $tempData->cp_three,
                    'cp_four' => $tempData->cp_four,
                    'philhealth_member' => $tempData->philhealth_member,
                    'philhealth_number' => $tempData->philhealth_number,
                    'phil_category' => $tempData->phil_category
                ])->id;

                foreach($tempFamilyMembers as $member) {
                    FamilyMemberData::create([
                        'health_survey_data_id' => $data_id,
                        'name' => $member->name,
                        'birthdate' => $member->birthdate,
                        'age' => $member->age,
                        'sex' => $member->sex,
                        'education' => $member->education,
                        'work'=> $member->work,
                        'other_information' => $member->other_information,
                        'user_id' => $member->user_id
                    ]);
                }
                TempData::where('user_id', auth()->user()->id)->delete();
                TempFamilyMembers::where('user_id', auth()->user()->id)->delete();
                $this->year = null;
                $this->barangay = null;
                $this->purok = null;
                $this->tab = 0;
                return session()->flash('message', 'Successfully added!');
              } catch (\Exception $e) {
                return session()->flash('empty', 'Please input required data!');
              }
        }
    }

    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->year = $data->year;
            if($data->barangay_id != "") {
                $this->barangay = $data->barangay_id;
            }
            $this->purok = $data->purok_id;
        }
        $this->selectPurok();
        $barangays = Barangay::where('user_id',auth()->user()->id)->get();
        return view('livewire.health-survey-form',['barangays' => $barangays, 'puroks' => $this->purok]);
    }
}
