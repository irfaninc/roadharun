<?php

namespace App\Livewire\Runner;

use App\Models\Distance;
use Livewire\Component;
use Livewire\WithPagination;


class RunnerActivity extends Component
{
    use WithPagination;

    public function render()
    {
        // Fetch paginated data directly in the render method
        $activitys = Distance::with('runner')
                    ->orderByDesc('id')
                    ->paginate(20); // 10 items per page

        return view('livewire.runner.runner-activity', [
            'activitys' => $activitys, // Pass the paginated data to the view
        ]);
    }
}
