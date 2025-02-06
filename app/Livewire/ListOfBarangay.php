<?php

namespace App\Livewire;

use App\Models\Barangay;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfBarangay extends Component
{
    use WithPagination;
    public $barangay;
    public $search;
    
    public function addBarangay() {
        $is_exists = Barangay::where('user_id', auth()->user()->id)->where('name', $this->barangay)->exists();
        if(!$is_exists) {
            if($this->barangay == "") {
                session()->flash('empty', 'Please input data.');
                return;
            }
            Barangay::create([
                'name' => $this->barangay,
                'user_id' => auth()->user()->id
            ]);
            
            session()->flash('message', 'Added successfully.');
        } else {
            session()->flash('duplicate', $this->barangay.' is already exists.');
        }
        $this->barangay = "";
        $this->resetPage('barangay');
    }

    public function updateStatus($id) {
        $brgy = Barangay::find($id);
        $brgy->status = !$brgy->status;
        $brgy->save();
    }

    public function updatedSearch($value) {
        $this->resetPage('barangay');
    }

    public function render()
    {
        $search = $this->search;
        $lists = Barangay::where('user_id', auth()->user()->id)
        ->where('name','LIKE', '%'.$search.'%')
        ->paginate(10, ['*'], 'barangay');
        return view('livewire.list-of-barangay', ['lists' => $lists]);
    }
}
