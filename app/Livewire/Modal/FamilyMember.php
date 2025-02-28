<?php

namespace App\Livewire\Modal;

use App\Models\LivelihoodList;
use App\Models\TempData;
use App\Models\TempFamilyMembers;
use Carbon\Carbon;
use LivewireUI\Modal\ModalComponent;

class FamilyMember extends ModalComponent
{
    public $id = "";
    public $name;
    public $birthdate;
    public $age;
    public $sex;
    public $education;
    public $work;
    public $other;

    public function updatedBirthdate($value) {
       $this->age = Carbon::parse($value)->diff(Carbon::now())->format('%y');
    }

    public function save() {
        if($this->id != "")
        {
            $data = TempFamilyMembers::find($this->id);
            $data->name = $this->name;
            $data->birthdate = $this->birthdate;
            $data->age = $this->age;
            $data->sex = $this->sex;
            $data->education = $this->education;
            $data->work = $this->work;
            $data->other_information = $this->other;
            $data->save();
            if($data->head_of_the_family == 1){
                TempData::where('user_id', auth()->user()->id)->update(['ulo_ng_pamilya' => $this->name]);
            }
            session()->flash('message', 'Updated.');
        } else {
            TempFamilyMembers::create([
                'name' => $this->name,
                'birthdate' => $this->birthdate,
                'age' => $this->age,
                'sex' => $this->sex,
                'education' => $this->education,
                'work' => $this->work,
                'other_information' => $this->other,
                'user_id' => auth()->user()->id
            ]);
            session()->flash('message', 'Added successfully.');
        }
        $this->name = "";
        $this->birthdate = "";
        $this->age = "";
        $this->sex = "";
        $this->education = "";
        $this->work = "";
        $this->other = "";

        

        $this->dispatch('update-member');
    }

    public function render()
    {
        if($this->id != "")
        {
            $data = TempFamilyMembers::find($this->id);
            $this->name = $data->name;
            $this->birthdate = $data->birthdate;
            $this->age = $data->age;
            $this->sex = $data->sex;
            $this->education = $data->education;
            $this->work = $data->work;
            $this->other = $data->other_information;
        }
        $work = LivelihoodList::get();
        return view('livewire.modal.family-member', ['works' => $work]);
    }
}
