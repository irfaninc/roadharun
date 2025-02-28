<?php

namespace App\Livewire\Runner;

use App\Models\Distance;
use App\Models\Runner;
use Livewire\Component;


class AddRun extends Component
{
    public $runner_id, $distance, $date;
    public $runners, $runs;

    public function mount(){
        $this->runners = Runner::all();

        $this->runs = Distance::with('runner')
                    ->orderByDesc('date')
                    ->get();

    }

    protected $rules = [
        'runner_id' => 'required|exists:runners,id',
        'distance' => 'required|numeric|min:0.1',
        'date' => 'required|date',
    ];

    public function addRunDistance() {
        $this->validate();

        Distance::create([
            'runner_id' => $this->runner_id,
            'date' => $this->date,
            'distance' => $this->distance,
        ]);
        session()->flash('success', 'Run added successfully');
        return redirect()->route('addrun');
    }

    public function render()
    {
        return view('livewire.runner.add-run');
    }
}
