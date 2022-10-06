<?php

namespace App\Http\Livewire\Recetas\Tabs;

use Livewire\Component;
use App\Models\Prescription;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPrescription;


class Fourth extends Component
{
    public $recetas;
    public $receta;
    public $recetaEdit;
    public $solicitud;
    public $open= false;
    public $openTwo = false;
    public $crear = false;
    public $enviar = false;
    public $firma;
    public $repetir = false;
    public $repetirEdit = false;
    public $veces;
    public $detalle;
    public $editMessage;
    public $editRepeat;
    public $editRange;
    public $editState;
    public $correoEnviar;


    protected $rules = [
        'recetaEdit.*' => 'required',
    ];


    public function mount($solicitud){

        $this->recetas = Prescription::where('solicitud_id',$solicitud->id)->get();
        $this->firma = $solicitud->doctor->firma;
        $this->solicitud = $solicitud;

    }

    public function render()
    {
        return view('livewire.recetas.tabs.fourth');
    }


    public function edit(Prescription $receta){

        $this->recetaEdit = $receta;

        if($this->recetaEdit->repeat == 0){
            $this->repetirEdit = '';
        }else{
            $this->repetirEdit = true;
        }
        $this->editMessage = $receta->message;
        $this->editRange = $receta->range;

        $this->open = true;
        $this->openTwo = '';
    }

    public function visualizar(Prescription $receta){
        $this->receta = $receta;
        $this->openTwo = true;
    }

    public function cerrar(){
        $this->open = '';
        $this->openTwo = '';
        $this->crear = '';
        $this->enviar = '';
    }

    public function create(){
        $this->crear = true;
    }

    public function update(){

        $receta = Prescription::find($this->recetaEdit->id);

        if($this->repetirEdit == true){
            $receta->repeat = 1;
            $receta->range = $this->editRange;
        }else{
            $receta->repeat = 0;
            $receta->range = NULL;
        }

        $receta->message = $this->editMessage;

        $success = $receta->save();



        if($success){
            $this->dispatchBrowserEvent('toast:success',[
                'message' => 'Receta actualizada correctamente'
            ]);
        }else{
            $this->dispatchBrowserEvent('toast:error',[
                'message' => 'Problemas al intentar actualizar el registro'
            ]);
        }
         $this->cerrar();

         $this->mount($this->solicitud);
    }

    public function enviar(Prescription $receta){

        $this->emailEnviar = $this->solicitud->patient->user->email;
        $this->receta = $receta;
        $this->enviar = true;


    }

    public function enviarReceta(){


        Mail::to($this->emailEnviar)->send(new SendPrescription($this->receta));

/*         Mail::send('emails.order', $data, function ($message) use ($data, $pdf) {
            $message->to($this->emailEnviar)
            ->subject("Receta Dermalink")
                ->attachData($pdf->output(), "receta-dermalink.pdf");
        }); */

        $rec = Prescription::find($this->receta->id);
        $rec->sends++;
        $rec->save();

        $this->cerrar();
        $this->mount($this->solicitud);

    }
}
