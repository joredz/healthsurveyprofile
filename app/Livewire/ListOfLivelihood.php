<?php

namespace App\Livewire;

use App\Models\LivelihoodList;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfLivelihood extends Component
{
    use WithPagination;
    public $livelihood;
    public $search;

    public function addLivelihood() {
        $is_exists = LivelihoodList::where('user_id', auth()->user()->id)->where('name', $this->livelihood)->exists();
        if(!$is_exists) {
            if($this->livelihood == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            LivelihoodList::create([
                'name' => $this->livelihood,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->livelihood.' is already exists.');
        }
        $this->livelihood = "";
        $this->resetPage('livelihood');
    }

    public function updatedSearch($value) {
        $this->resetPage('livelihood');
    }

    public function render()
    {
        $search = $this->search;
        $lists = LivelihoodList::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'livelihood');
        return view('livewire.list-of-livelihood', ['lists' => $lists]);
    }
}
