<?php

namespace App\Livewire;

use App\Models\Paninirahan;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfPaninirahan extends Component
{
    use WithPagination;
    public $paninirahan;
    public $search;

    public function addPaninirahan() {
        $is_exists = Paninirahan::where('user_id', auth()->user()->id)->where('name', $this->paninirahan)->exists();
        if(!$is_exists) {
            if($this->paninirahan == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Paninirahan::create([
                'name' => $this->paninirahan,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->paninirahan.' is already exists.');
        }
        $this->paninirahan = "";
        $this->resetPage('paninirahan');
    }

    public function updatedSearch($value) {
        $this->resetPage('paninirahan');
    }

    public function render()
    {
        $search = $this->search;
        $lists = Paninirahan::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'paninirahan');
        return view('livewire.list-of-paninirahan', ['lists' => $lists]);
    }
}
