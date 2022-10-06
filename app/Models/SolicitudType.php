<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudType extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];


    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }
}
