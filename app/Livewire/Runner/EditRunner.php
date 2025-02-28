<?php

namespace App\Livewire\Runner;

use App\Models\Runner;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditRunner extends Component
{
    use WithFileUploads;

    public $runner;
    public $name;
    public $profile_picture;

    public function mount(Runner $runner)
    {
        // Load the runner data into public properties
        $this->runner = $runner;
        $this->name = $runner->name;
        $this->profile_picture = $runner->profile_picture;
    }

    public function updateRunner()
    {
        // Validate the input data
        $this->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // If a new profile picture is uploaded, store it
        if ($this->profile_picture) {
            $profilePicturePath = $this->profile_picture->store('profiles', 'public');
            $this->runner->profile_picture = $profilePicturePath;
        }

        // Update the runner's name and profile picture if provided
        $this->runner->name = $this->name;
        $this->runner->save();

        // Optionally, add a success message
        session()->flash('success', 'Runner updated successfully!');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.runner.edit-runner');
    }
}
