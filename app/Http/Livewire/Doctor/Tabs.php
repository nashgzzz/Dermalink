<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;

class Tabs extends Component
{
    public $doctor;

    public function mount($doctor){
        $this->doctor = $doctor;
    }

    public function render()
    {
        return view('livewire.doctor.tabs');
    }
}
