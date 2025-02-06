<?php

namespace App\Livewire;

use App\Models\Religion;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfReligion extends Component
{
    use WithPagination;
    public $religion;
    public $search;

    public function addReligion() {
        $is_exists = Religion::where('user_id', auth()->user()->id)->where('name', $this->religion)->exists();
        if(!$is_exists) {
            if($this->religion == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Religion::create([
                'name' => $this->religion,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->religion.' is already exists.');
        }
        $this->religion = "";
        $this->resetPage('religion');
    }

    public function updatedSearch($value) {
        $this->resetPage('religion');
    }

    public function render()
    {
        $search = $this->search;
        $lists = Religion::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'religion');
        return view('livewire.list-of-religion', ['lists' => $lists]);
    }
}
