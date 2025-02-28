<?php

namespace App\Livewire;

use App\Models\Distance;
use App\Models\Runner;
use Livewire\Component;


class Leaderboard extends Component
{
    public $leaderboard;

    public function mount() {
        $this->leaderboard = Runner::withSum('distances', 'distance')
            ->orderByDesc('distances_sum_distance') // Order by total distance (highest first)
            ->get();
    }
    

    public function render()
    {
        return view('livewire.leaderboard');
    }
}
