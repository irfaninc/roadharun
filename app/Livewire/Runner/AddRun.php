<?php

namespace App\Livewire\Runner;

use App\Models\Distance;
use App\Models\Runner;
use Livewire\Component;


class AddRun extends Component
{
    public $runner_id, $distance, $date, $time, $description, $type;
    public $runners;

    public function mount(){
        $this->runners = Runner::all();
    }

    protected $rules = [
        'runner_id' => 'required|exists:runners,id',
        'distance' => 'required|numeric|min:0.1',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i', // Ensures time is in HH:MM format
        'description' => 'nullable|string|max:255',
        'type' => 'required|string|in:Walk,Run', // Ensures only allowed types are used
    ];

    public function addRunDistance() {
        $this->validate();

        Distance::create([
            'runner_id' => $this->runner_id,
            'date' => $this->date,
            'time' => $this->time,
            'distance' => $this->distance,
            'description' => $this->description,
            'type' => $this->type,
        ]);
        session()->flash('success', 'Run added successfully');
        return redirect()->route('addrun');
    }

    public function render()
    {
        $runs = Distance::with('runner')
                    ->orderByDesc('id')
                    ->paginate(5); // Adjust the number per page as needed

        return view('livewire.runner.add-run', compact('runs'));
    }
}
