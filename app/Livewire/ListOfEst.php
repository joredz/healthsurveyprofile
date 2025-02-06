<?php

namespace App\Livewire;

use App\Models\EstablishementongPangpagkaen;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfEst extends Component
{
    use WithPagination;
    public $est;
    public $search;

    public function addEst() {
        $is_exists = EstablishementongPangpagkaen::where('user_id', auth()->user()->id)->where('name', $this->est)->exists();
        if(!$is_exists) {
            if($this->est == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            EstablishementongPangpagkaen::create([
                'name' => $this->est,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->est.' is already exists.');
        }
        $this->est = "";
        $this->resetPage('est');
    }

    public function updatedSearch($value) {
        $this->resetPage('est');
    }

    public function render()
    {
        $search = $this->search;
        $lists = EstablishementongPangpagkaen::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'est');
        return view('livewire.list-of-est', ['lists' => $lists]);
    }
}
