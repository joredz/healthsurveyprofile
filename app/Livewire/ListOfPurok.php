<?php

namespace App\Livewire;

use App\Models\Barangay;
use App\Models\Purok;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfPurok extends Component
{
    use WithPagination;
    public $barangay;
    public $purok;
    public $search;

    public function addPurok() {
        $is_exists = Purok::where('user_id', auth()->user()->id)->where('barangay_id', $this->barangay)->where('name', $this->purok)->exists();
        if(!$is_exists) {
            if($this->barangay == "" || $this->purok == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Purok::create([
                'barangay_id' => $this->barangay,
                'name' => $this->purok,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->purok.' is already exists.');
        }
        $this->barangay = "";
        $this->purok = "";
        $this->resetPage('purok');
    }

    public function updateStatus($id) {
        $purok = Purok::find($id);
        $purok->status = !$purok->status;
        $purok->save();
    }

    public function updatedSearch($value) {
        $this->resetPage('purok');
    }

    public function render()
    {
        $search = $this->search;
        $barangays = Barangay::where('user_id', auth()->user()->id)->get();
        $lists = Purok::where('name',  'like', '%'.$this->search.'%')
        ->where('user_id', auth()->user()->id)->paginate(10, ['*'], 'purok');
        return view('livewire.list-of-purok', ['lists' => $lists, 'barangays' => $barangays]);
    }
}
