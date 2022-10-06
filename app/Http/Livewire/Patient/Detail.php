<?php

namespace App\Http\Livewire\Patient;

use App\Models\User;
use App\Models\Patient;
use Livewire\Component;

class Detail extends Component
{
    public $patient;
    public $open = false;
    public $name;
    public $rut;
    public $email;
    public $fecha_nacimiento;
    public $user;

    public function mount($paciente){

        $this->user = $paciente;
        $this->name=$paciente->user->name;
        $this->rut=$paciente->user->rut;
        $this->email=$paciente->user->email;
        $this->birthday=$paciente->user->birthday;
        $this->emit('update',$paciente->id);
    }

    public function render()
    {
        return view('livewire.patient.detail');
    }

    public function open(){
        $this->open =true;
    }

    public function cancel(){
        $this->open = '';
    }

    public function update(){
        $this->user->user->name = $this->name;
        $this->user->user->rut = $this->rut;
        $this->user->user->email = $this->email;
        $this->user->user->birthday = $this->birthday;
        $this->user->user->save();
        $this->open = '';
        $this->mount($this->user);

    }

}
