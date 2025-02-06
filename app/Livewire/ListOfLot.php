<?php

namespace App\Livewire;

use App\Models\Lote;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfLot extends Component
{
    use WithPagination;
    public $lot;
    public $search;

    public function addLot() {
        $is_exists = Lote::where('user_id', auth()->user()->id)->where('name', $this->lot)->exists();
        if(!$is_exists) {
            if($this->lot == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Lote::create([
                'name' => $this->lot,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->lot.' is already exists.');
        }
        $this->lot = "";
        $this->resetPage('lot');
    }

    public function updatedSearch($value) {
        $this->resetPage('lot');
    }

    public function render()
    {
        $search = $this->search;
        $lists = Lote::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'lot');
        return view('livewire.list-of-lot', ['lists' => $lists]);
    }
}
