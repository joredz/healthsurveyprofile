<?php

namespace App\Livewire;

use App\Models\Bahay;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfBahay extends Component
{
    use WithPagination;
    public $bahay;
    public $search;

    public function addBahay() {
        $is_exists = Bahay::where('user_id', auth()->user()->id)->where('name', $this->bahay)->exists();
        if(!$is_exists) {
            if($this->bahay == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Bahay::create([
                'name' => $this->bahay,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->bahay.' is already exists.');
        }
        $this->bahay = "";
        $this->resetPage('bahay');
    }

    public function updatedSearch($value) {
        $this->resetPage('bahay');
    }

    public function render()
    {
        $search = $this->search;
        $lists = Bahay::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'bahay');
        return view('livewire.list-of-bahay', ['lists' => $lists]);
    }
}
