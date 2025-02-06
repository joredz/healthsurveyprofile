<?php

namespace App\Livewire;

use App\Models\WaterRefillingStation;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfRefillingStation extends Component
{
    use WithPagination;
    public $station;
    public $search;

    public function addStation() {
        $is_exists = WaterRefillingStation::where('user_id', auth()->user()->id)->where('name', $this->station)->exists();
        if(!$is_exists) {
            if($this->station == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            WaterRefillingStation::create([
                'name' => $this->station,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->station.' is already exists.');
        }
        $this->station = "";
        $this->resetPage('station');
    }

    public function updatedSearch($value) {
        $this->resetPage('station');
    }

    public function render()
    {
        $search = $this->search;
        $lists = WaterRefillingStation::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'station');
        return view('livewire.list-of-refilling-station', ['lists' => $lists]);
    }
}
