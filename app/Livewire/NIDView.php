<?php

namespace App\Livewire;

use App\Models\Nid;
use Livewire\Component;

class NIDView extends Component
{
    public $nid;
    public $nids;
    public function render()
    {
        return view('livewire.n-i-d-view')->layout('layouts.app');
    }

    public function updatedNid()
    {
        $this->nids = Nid::where('id_number', 'like', '%' . $this->nid . '%')->get();
//        dd($this->nids);
    }
}
