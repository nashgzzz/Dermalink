<?php

namespace App\Http\Livewire\Doctor\Tabs;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Doctor;
use App\Models\SolicitudType;

class Services extends Component
{
    public $fecha;
    public $doctor;
    public $services;
    public $openEdit;
    public $service;
    public $name;
    public $description;
    public $price;
    public $errores;

    public function mount($doctor){

        $this->fecha = Carbon::now();
        $this->doctor = Doctor::find($doctor);
        $this->services = SolicitudType::all();
    }

    public function render()
    {
        return view('livewire.doctor.tabs.services');
    }

    public function cerrar(){
        $this->openEdit = '';
        $this->errores = '';
    }

    public function show($id){
        $this->openEdit = true;
        $this->service = SolicitudType::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->price = $this->service->price;
    }

    public function update(){
        $this->service->name = $this->name;
        $this->service->description = $this->description;
        $this->service->price = $this->price;
        $this->service->save();
        $this->services = SolicitudType::all();
        $this->cerrar();
    }

}
