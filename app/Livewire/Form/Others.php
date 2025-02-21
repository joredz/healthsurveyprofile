<?php

namespace App\Livewire\Form;

use App\Models\TempData;
use Livewire\Component;

class Others extends Component
{
    public $family_planning;
    public $family_planning_saan;
    public $asin;
    public $alagang_hayop;
    public $mga_tanim;
    public $halamang_gamot;
    public $gumagamit_gamot;
    public $may_kuryente;
    public $cp_one;
    public $cp_two;
    public $cp_three;
    public $cp_four;
    public $philhealth_member;
    public $philhealth_number;
    public $phil_category;

    public function updatedFamilyPlanning($value) {
        $save = new FamilyInformation();
        $save->saveTemp("family_planning", ($value != "") ? $value : null);
    }
    public function updatedFamilyPlanningSaan($value) {
        $save = new FamilyInformation();
        $save->saveTemp("family_planning_saan", ($value != "") ? $value : null);
    }
    public function updatedAsin($value) {
        $save = new FamilyInformation();
        $save->saveTemp("asin", ($value != "") ? $value : null);
    }
    public function updatedAlagangHayop($value) {
        $save = new FamilyInformation();
        $save->saveTemp("alagang_hayop", ($value != "") ? $value : null);
    }
    public function updatedMgaTanim($value) {
        $save = new FamilyInformation();
        $save->saveTemp("mga_tanim", ($value != "") ? $value : null);
    }
    public function updatedHalamangGamot($value) {
        $save = new FamilyInformation();
        $save->saveTemp("halamang_gamot", ($value != "") ? $value : null);
    }
    public function updatedGumagamitGamot($value) {
        $save = new FamilyInformation();
        $save->saveTemp("gumagamit_gamot", ($value != "") ? $value : null);
    }
    public function updatedMayKuryente($value) {
        $save = new FamilyInformation();
        $save->saveTemp("may_kuryente", ($value != "") ? $value : null);
    }
    public function updatedCpOne($value) {
        $save = new FamilyInformation();
        $save->saveTemp("cp_one", ($value != "") ? $value : null);
    }
    public function updatedCpTwo($value) {
        $save = new FamilyInformation();
        $save->saveTemp("cp_two", ($value != "") ? $value : null);
    }
    public function updatedCpThree($value) {
        $save = new FamilyInformation();
        $save->saveTemp("cp_three", ($value != "") ? $value : null);
    }
    public function updatedCpFour($value) {
        $save = new FamilyInformation();
        $save->saveTemp("cp_four", ($value != "") ? $value : null);
    }
    public function updatedPhilhealthMember($value) {
        $save = new FamilyInformation();
        $save->saveTemp("philhealth_member", ($value != "") ? $value : null);
    }
    public function updatedPhilhealthNumber($value) {
        $save = new FamilyInformation();
        $save->saveTemp("philhealth_number", ($value != "") ? $value : null);
    }
    public function updatedPhilCategory($value) {
        $save = new FamilyInformation();
        $save->saveTemp("phil_category", ($value != "") ? $value : null);
    }

    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if( $exists->exists() ) {
            $data = $exists->first();
            $this->family_planning = $data->family_planning;
            $this->family_planning_saan = $data->family_planning_saan;
            $this->asin = $data->asin;
            $this->alagang_hayop = $data->alagang_hayop;
            $this->mga_tanim = $data->mga_tanim;
            $this->halamang_gamot = $data->halamang_gamot;
            $this->gumagamit_gamot = $data->gumagamit_gamot;
            $this->may_kuryente = $data->may_kuryente;
            $this->cp_one = $data->cp_one;
            $this->cp_two = $data->cp_two;
            $this->cp_three = $data->cp_three;
            $this->cp_four = $data->cp_four;
            $this->philhealth_member = $data->philhealth_member;
            $this->philhealth_number = $data->philhealth_number;
            $this->phil_category = $data->phil_category;
        }
        return view('livewire.form.others');
    }
}
