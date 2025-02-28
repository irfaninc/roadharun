<?php

namespace App\Livewire\Runner;

use App\Models\Runner;
use Livewire\Component;


class ViewRunners extends Component
{
    public $runners;
    public function mount(){
        $this->runners = Runner::all();
    }
    
    public function render()
    {
        return view('livewire.runner.view-runners');
    }
}
