<?php

namespace App\Livewire\Form;

use App\Models\TempData;
use Livewire\Component;

class Kubeta extends Component
{
    public $may_kubeta;
    public $uri_kubeta;
    public $klase_ng_toilet;
    public $saan_tae;

    public function updatedMayKubeta($value) {
        $save = new FamilyInformation();
        $save->saveTemp("may_kubeta", ($value != "") ? $value : null);
        if($value == 2 || $value == "") {
            $this->updatedUriKubeta(null);
            $this->uri_kubeta = null;
            $this->updatedKlaseNgToilet(null);
            $this->klase_ng_toilet = null;
        } else {
            $this->updatedSaanTae(null);
            $this->saan_tae = null;
        }
    }

    public function updatedUriKubeta($value) {
        $save = new FamilyInformation();
        $save->saveTemp("uri_kubeta", ($value != "") ? $value : null);
    }

    public function updatedKlaseNgToilet($value) {
        $save = new FamilyInformation();
        $save->saveTemp("klase_ng_toilet", ($value != "") ? $value : null);
    }

    public function updatedSaanTae($value) {
        $save = new FamilyInformation();
        $save->saveTemp("saan_tae", ($value != "") ? $value : null);
    }


    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->may_kubeta = $data->may_kubeta;
            $this->uri_kubeta = $data->uri_kubeta;
            $this->klase_ng_toilet = $data->klase_ng_toilet;
            $this->saan_tae = $data->saan_tae;
        }
        return view('livewire.form.kubeta');
    }
}
