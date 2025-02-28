<?php

namespace App\Livewire\Runner;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Runner;

class AddRunner extends Component
{
    use WithFileUploads;

    public $name, $profile_picture;

    protected $rules = [
        'name' => 'required|string|max:255',
        'profile_picture' => 'required|image|max:2048', // Max 2MB image
    ];

    public function addRunner() {
        $this->validate();

        $profilePicturePath = $this->profile_picture 
            ? $this->profile_picture->store('runners', 'public') 
            : null;

        Runner::create([
            'name' => $this->name,
            'profile_picture' => $profilePicturePath,
        ]);

        //$this->reset('name', 'profile_picture');
        session()->flash('success', 'Runner added successfully');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.runner.add-runner');
    }
}
