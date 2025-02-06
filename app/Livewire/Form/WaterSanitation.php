<?php

namespace App\Livewire\Form;

use App\Models\TempData;
use App\Models\WaterRefillingStation;
use Livewire\Component;

class WaterSanitation extends Component
{
    public $water_source;
    public $one_klase;
    public $one_type;
    public $one_caretaker;
    public $two_klase;
    public $two_type;
    public $two_caretaker;
    public $refilling_station;
    public $is_other_refilling = false;
    public $other_refilling_station;
    public $doubtful_source;
    public $doubtful_type;
    public $doubtful_caretaker;

    public function updatedRefillingStation($value) {
        $others = WaterRefillingStation::find($value);
        if(!is_null($others)) {
            if($others->name == "Others"){
                $this->is_other_refilling = true;
            } else {
                $this->is_other_refilling = false;
            }
        }
        
        $save = new FamilyInformation();
        $save->saveTemp("refilling_station", ($value != "") ? $value : null);
    }

    public function updatedWaterSource($value) {
        $save = new FamilyInformation();
        $save->saveTemp("water_source", ($value != "") ? $value : null);
        switch($value){
            case 1:
                $this->updatedTwoKlase(null);
                $this->two_klase = null;
                $this->updatedTwoType(null);
                $this->two_type = null;
                $this->updatedTwoCaretaker(null);
                $this->two_caretaker = null;
                $this->updatedRefillingStation(null);
                $this->refilling_station = null;
                $this->is_other_refilling = false;
                $this->updatedOtherRefillingStation(null);
                $this->other_refilling_station = null;
                $this->updatedDoubtfulSource(null);
                $this->doubtful_source = null;
                $this->updatedDoubtfulType(null);
                $this->doubtful_type = null;
                $this->updatedDoubtfulCaretaker(null);
                $this->doubtful_caretaker = null;
                break;
            case 2:
                $this->updatedOneKlase(null);
                $this->one_klase = null;
                $this->updatedOneType(null);
                $this->one_type = null;
                $this->updatedOneCaretaker(null);
                $this->one_caretaker = null;
                $this->updatedRefillingStation(null);
                $this->refilling_station = null;
                $this->is_other_refilling = false;
                $this->updatedOtherRefillingStation(null);
                $this->other_refilling_station = null;
                $this->updatedDoubtfulSource(null);
                $this->doubtful_source = null;
                $this->updatedDoubtfulType(null);
                $this->doubtful_type = null;
                $this->updatedDoubtfulCaretaker(null);
                $this->doubtful_caretaker = null;
                break;
            case 4:
                $this->updatedOneKlase(null);
                $this->one_klase = null;
                $this->updatedOneType(null);
                $this->one_type = null;
                $this->updatedOneCaretaker(null);
                $this->one_caretaker = null;
                $this->updatedTwoKlase(null);
                $this->two_klase = null;
                $this->updatedTwoType(null);
                $this->two_type = null;
                $this->updatedTwoCaretaker(null);
                $this->two_caretaker = null;
                $this->updatedDoubtfulSource(null);
                $this->doubtful_source = null;
                $this->updatedDoubtfulType(null);
                $this->doubtful_type = null;
                $this->updatedDoubtfulCaretaker(null);
                $this->doubtful_caretaker = null;
                break;
            case 5:
                $this->updatedOneKlase(null);
                $this->one_klase = null;
                $this->updatedOneType(null);
                $this->one_type = null;
                $this->updatedOneCaretaker(null);
                $this->one_caretaker = null;
                $this->updatedTwoKlase(null);
                $this->two_klase = null;
                $this->updatedTwoType(null);
                $this->two_type = null;
                $this->updatedTwoCaretaker(null);
                $this->two_caretaker = null;
                $this->updatedRefillingStation(null);
                $this->refilling_station = null;
                $this->is_other_refilling = false;
                $this->updatedOtherRefillingStation(null);
                $this->other_refilling_station = null;
                break;
            default:
                $this->updatedOneKlase(null);
                $this->one_klase = null;
                $this->updatedOneType(null);
                $this->one_type = null;
                $this->updatedOneCaretaker(null);
                $this->one_caretaker = null;
                $this->updatedTwoKlase(null);
                $this->two_klase = null;
                $this->updatedTwoType(null);
                $this->two_type = null;
                $this->updatedTwoCaretaker(null);
                $this->two_caretaker = null;
                $this->updatedRefillingStation(null);
                $this->refilling_station = null;
                $this->is_other_refilling = false;
                $this->updatedOtherRefillingStation(null);
                $this->other_refilling_station = null;
                $this->updatedDoubtfulSource(null);
                $this->doubtful_source = null;
                $this->updatedDoubtfulType(null);
                $this->doubtful_type = null;
                $this->updatedDoubtfulCaretaker(null);
                $this->doubtful_caretaker = null;
                break;
        }
        
    }

    public function updatedOneKlase($value) {
        $save = new FamilyInformation();
        $save->saveTemp("one_klase", ($value != "") ? $value : null);
    }

    public function updatedOneType($value) {
        $save = new FamilyInformation();
        $save->saveTemp("one_type", ($value != "") ? $value : null);
    }

    public function updatedOneCaretaker($value) {
        $save = new FamilyInformation();
        $save->saveTemp("one_caretaker", ($value != "") ? $value : null);
    }

    public function updatedTwoKlase($value) {
        $save = new FamilyInformation();
        $save->saveTemp("two_klase", ($value != "") ? $value : null);
    }

    public function updatedTwoType($value) {
        $save = new FamilyInformation();
        $save->saveTemp("two_type", ($value != "") ? $value : null);
    }
    
    public function updatedTwoCaretaker($value) {
        $save = new FamilyInformation();
        $save->saveTemp("two_caretaker", ($value != "") ? $value : null);
    }

    public function updatedOtherRefillingStation($value) {
        $save = new FamilyInformation();
        $save->saveTemp("other_refilling_station", ($value != "") ? $value : null);
    }

    public function updatedDoubtfulSource($value) {
        $save = new FamilyInformation();
        $save->saveTemp("doubtful_source", ($value != "") ? $value : null);
    }

    public function updatedDoubtfulType($value) {
        $save = new FamilyInformation();
        $save->saveTemp("doubtful_type", ($value != "") ? $value : null);
    }
    
    public function updatedDoubtfulCaretaker($value) {
        $save = new FamilyInformation();
        $save->saveTemp("doubtful_caretaker", ($value != "") ? $value : null);

    }
    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->water_source = $data->water_source;
            $this->one_klase = $data->one_klase;
            $this->one_type = $data->one_type;
            $this->one_caretaker = $data->one_caretaker;
            $this->two_klase = $data->two_klase;
            $this->two_type = $data->two_type;
            $this->two_caretaker = $data->two_caretaker;
            $this->refilling_station = $data->refilling_station;
            $this->other_refilling_station = $data->other_refilling_station;
            $this->doubtful_source = $data->doubtful_source;
            $this->doubtful_type = $data->doubtful_type;
            $this->doubtful_caretaker = $data->doubtful_caretaker;
        }
        $stations = WaterRefillingStation::where('user_id', auth()->user()->id)->get();
        return view('livewire.form.water-sanitation',['stations' => $stations]);
    }
}
