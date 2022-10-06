<?php

namespace App\Http\Livewire\Doctor\Tabs;

use Livewire\Component;
use App\Models\Doctor;

class Atendidas extends Component
{
    public $atendidas;

    public function mount($doctor){

        $doctor = Doctor::find($doctor);
        $this->solicitudes = $doctor->solicituds->where('status',1);
    }

    public function render()
    {
        return view('livewire.doctor.tabs.atendidas');
    }
}
