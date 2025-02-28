<?php

namespace App\Livewire\Form;

use App\Models\Religion;
use App\Models\TempData;
use App\Models\TempFamilyMembers;
use Livewire\Attributes\On;
use Livewire\Component;

class FamilyInformation extends Component
{
    public $bilang_ng_bahay;
    public $tirahan;
    public $bilang_ng_miyembro;
    public $ulo_ng_pamilya;
    public $asawa;
    public $relihiyon;
    public $civil_status;
    public $income_per_month;
    public $petsa_ng_kasal;
    public $g;
    public $p;
    public $bahay;
    public $lote;
    public $uri;
    public $paninirahan;
    public $is_others = false;
    public $other_religion;

    public function deleteMember($id) {
        TempFamilyMembers::find($id)->delete();
    }

    public function updatedBilangNgBahay($value) {
        $this->saveTemp("bilang_ng_bahay", $value);
    }

    public function updatedTirahan($value) {
        $this->saveTemp("tirahan", $value);
    }

    public function updatedBilangNgMiyembro($value) {
        $this->saveTemp("bilang_ng_miyembro", $value);
    }

    public function updatedUloNgPamilya($value) {
        $this->saveTemp("ulo_ng_pamilya", $value);
    }

    public function updatedAsawa($value) {
        $this->saveTemp("asawa", $value);
    }

    public function updatedRelihiyon($value) {
        $this->saveTemp("religion_id", $value);
    }

    public function updatedOtherReligion($value) {
        $this->saveTemp("other_religion_id", $value);
    }

    public function updatedCivilStatus($value) {
        $this->saveTemp("civil_status", $value);
    }

    public function updatedIncomePerMonth($value) {
        $this->saveTemp("income_per_month", $value);
    }

    public function updatedPetsaNgKasal($value) {
        $this->saveTemp("petsa_ng_kasal", $value);
    }

    public function updatedG($value) {
        $this->saveTemp("g", $value);
    }

    public function updatedP($value) {
        $this->saveTemp("p", $value);
    }

    public function updatedBahay($value) {
        $this->saveTemp("bahay_id", $value);
    }

    public function updatedLote($value) {
        $this->saveTemp("lote_id", $value);
    }

    public function updatedUri($value) {
        $this->saveTemp("uri_bahay_id", $value);
    }

    public function updatedPaninirahan($value) {
        $this->saveTemp("paninirahan_id", $value);
    }

    public function saveTemp($column, $value) {
        if($column == "other_religion_id") {
            $exists = Religion::where('user_id', auth()->user()->id)->where('name', $value);
            if(!$exists->exists()){
                $value = Religion::create([
                    'name' => $value,
                    'user_id' => auth()->user()->id
                ])->id;
            } else {
                $value = $exists->first()->id;
            }
        }
        if($column == "religion_id") {
            $is_not_others = Religion::find($value);
            if($is_not_others->name != "Others") {
                TempData::updateOrCreate(
                    ['user_id' => auth()->user()->id],
                    ['other_religion_id' => null]
                );
            }
        }
        if($column == "ulo_ng_pamilya") {
            $head = TempFamilyMembers::updateOrCreate([
                'user_id' => auth()->user()->id,
                'head_of_the_family' => 1
            ], [
                'name' => $value,
            ]);
        }

        TempData::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [$column => $value]
        );
    }

    #[On('update-member')] 
    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->bilang_ng_bahay = $data->bilang_ng_bahay;
            $this->tirahan = $data->tirahan;
            $this->bilang_ng_miyembro = $data->bilang_ng_miyembro;
            $this->ulo_ng_pamilya = $data->ulo_ng_pamilya;
            $this->asawa = $data->asawa;
            $this->relihiyon = $data->religion_id;
            $this->other_religion = ($data->otherReligion) ? $data->otherReligion->name : null;
            $this->civil_status = $data->civil_status;
            $this->income_per_month = $data->income_per_month;
            $this->petsa_ng_kasal = $data->petsa_ng_kasal;
            $this->g = $data->g;
            $this->p = $data->p;
            $this->bahay = $data->bahay_id;
            $this->lote = $data->lote_id;
            $this->uri = $data->uri_bahay_id;
            $this->paninirahan = $data->paninirahan_id;
        }
        $is_others = Religion::find($this->relihiyon);
        if(!is_null($is_others)){
            if($is_others->name == "Others") {
                $this->is_others = true;
            } else {
                $this->is_others = false;
            }
        }
        
        $religion = Religion::get();
        $tempFamilyMembers = auth()->user()->tempFamilyMembers;
        $bahay = auth()->user()->bahay;
        return view('livewire.form.family-information',['religions' => $religion, 'members' => $tempFamilyMembers, 'bahays' => $bahay]);
    }
}
