<?php

namespace App\Livewire;

use App\Models\UriBahay;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfTypeOfHouse extends Component
{
    use WithPagination;
    public $type;
    public $search;

    public function addType() {
        $is_exists = UriBahay::where('user_id', auth()->user()->id)->where('name', $this->type)->exists();
        if(!$is_exists) {
            if($this->type == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            UriBahay::create([
                'name' => $this->type,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->type.' is already exists.');
        }
        $this->type = "";
        $this->resetPage('type');
    }

    public function updatedSearch($value) {
        $this->resetPage('type');
    }

    public function render()
    {
        $search = $this->search;
        $lists = UriBahay::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'type');
        return view('livewire.list-of-type-of-house', ['lists' => $lists]);
    }
}
