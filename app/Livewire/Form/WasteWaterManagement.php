<?php

namespace App\Livewire\Form;

use App\Models\TempData;
use Livewire\Component;

class WasteWaterManagement extends Component
{
    public $waste_water;

    public function updatedWasteWater($value) {
        $save = new FamilyInformation();
        $save->saveTemp("waste_water", ($value != "") ? $value : null);
    }
    
    public function render()
    {
        $exists = TempData::where('user_id', auth()->user()->id);
        if($exists->exists()) {
            $data = $exists->first();
            $this->waste_water = $data->waste_water;
        }
        return view('livewire.form.waste-water-management');
    }
}
