<?php

namespace App\Livewire\Form;

use App\Models\TempData;
use Livewire\Component;

class Basurahan extends Component
{
    public $may_basurahan;
    public $pagbubukod;
    public $paraan_pangongolekta;
    public $paraan_pagtatapon;

    public function updatedMayBasurahan($value) {
        $save = new FamilyInformation();
        $save->saveTemp("may_basurahan", ($value != "") ? $value : null);
    }
    public function updatedPagbubukod($value) {
        $save = new FamilyInformation();
        $save->saveTemp("pagbubukod", ($value != "") ? $value : null);
    }
    public function updatedParaanPangongolekta($value) {
        $save = new FamilyInformation();
        $save->saveTemp("paraan_pangongolekta", ($value != "") ? $value : null);
    }
    public function updatedParaanPagtatapon($value) {
        $save = new FamilyInformation();
        $save->saveTemp("paraan_pagtatapon", ($value != "") ? $value : null);
    }

    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->may_basurahan = $data->may_basurahan;
            $this->pagbubukod = $data->pagbubukod;
            $this->paraan_pagtatapon = $data->paraan_pagtatapon;
            $this->paraan_pangongolekta = $data->paraan_pangongolekta;
        }
        return view('livewire.form.basurahan');
    }
}
