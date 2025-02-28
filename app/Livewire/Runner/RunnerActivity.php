<?php

namespace App\Livewire\Runner;

use App\Models\Distance;
use Livewire\Component;


class RunnerActivity extends Component
{
    public $runs;

    public function mount(){

        $this->runs = Distance::with('runner')
                    ->orderByDesc('date')
                    ->get();

    }

    public function render()
    {
        return view('livewire.runner.runner-activity');
    }
}
