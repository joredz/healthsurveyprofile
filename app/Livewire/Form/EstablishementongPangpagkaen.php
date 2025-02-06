<?php

namespace App\Livewire\Form;

use App\Models\EstablishementongPangpagkaen as ModelsEstablishementongPangpagkaen;
use App\Models\TempData;
use Livewire\Component;

class EstablishementongPangpagkaen extends Component
{
    public $est_pangpagkaen;
    public $is_exists = false;
    public $anong_klase;
    public $is_others = false;
    public $other_klase;

    public function updatedEstPangpagkaen($value) {
        
        $this->updatedAnongKlase(null);
        $this->anong_klase = null;
        $this->updatedOtherKlase(null);
        $this->other_klase = null;
        $this->is_others = false;

        $save = new FamilyInformation();
        $save->saveTemp("est_pangpagkaen", ($value != "") ? $value : null);
    }

    public function updatedAnongKlase($value) {
        $is_others = ModelsEstablishementongPangpagkaen::find($value);
        if(!is_null($is_others)){
            if($is_others->name == "Others") {
                $this->is_others = true;
            } else {
                $this->updatedOtherKlase(null);
                $this->is_others = false;
            }
        }
        $save = new FamilyInformation();
        $save->saveTemp("anong_klase", ($value != "") ? $value : null);
    }
    public function updatedOtherKlase($value) {
        $save = new FamilyInformation();
        $save->saveTemp("other_klase", ($value != "") ? $value : null);
    }

    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->est_pangpagkaen = $data->est_pangpagkaen;
            $this->anong_klase = $data->anong_klase;
            $this->other_klase = $data->other_klase;
        }
        $is_others = ModelsEstablishementongPangpagkaen::find($this->anong_klase);
        if(!is_null($is_others)){
            if($is_others->name == "Others") {
                $this->is_others = true;
            } else {
                $this->is_others = false;
            }
        }
        $est_list = ModelsEstablishementongPangpagkaen::where('user_id', auth()->user()->id)->get();
        return view('livewire.form.establishementong-pangpagkaen', ['lists' => $est_list]);
    }
}
