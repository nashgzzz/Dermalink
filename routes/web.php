<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StepsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\TransbankController;
use App\Http\Livewire\Steps;
use App\Models\Doctor;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('storage-link', function(){
    Artisan::call('storage:link');
    return '<h1>Storage link creado</h1>';
})->middleware('auth');

Route::get('/', function () {
    $doctores = Doctor::where('state',1)->get();
    return view('welcome', compact('doctores'));
})->name('/');

Route::get('terminos-y-condiciones', function(){
    return view('terms');
})->name('terms');

Route::get('/dashboard', function () {
    if(auth()->user()->roles[0]->id == 2){

        return redirect()->route('paciente.show', auth()->user()->patient->id);
    }
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/* Route::get('step-two',[StepsController::class, 'stepTwo'])->name('step.two');
Route::get('step-three',[StepsController::class, 'stepThree'])->name('step.three');
Route::get('step-four',[StepsController::class, 'stepFour'])->name('step.four');
Route::get('step-five',[StepsController::class, 'stepFive'])->name('step.five');
Route::get('step-six',[StepsController::class, 'stepSix'])->name('step.six');
Route::get('step-seven',[StepsController::class, 'stepSeven'])->name('step.seven');
Route::get('step-eight',[StepsController::class, 'stepEight'])->name('step.eight');
Route::get('step-nine',[StepsController::class, 'stepNine'])->name('step.nine');
Route::get('step-ten',[StepsController::class, 'stepTen'])->name('step.ten');
Route::get('step-two',[StepsController::class, 'stepTwo'])->name('step.two'); */

Route::post('to-step-two',[StepsController::class, 'toStepTwo'])->name('step.create.one');
Route::middleware('guest')->group(function () {

    Route::get('register/doctor', [RegisteredUserController::class, 'create_doc'])
                ->name('register.doc');
});
require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {


    Route::get('step-one',Steps::class)->middleware(['role:Patient'],['role:Admin'])->name('step.one');

    Route::get('/admin',[HomeController::class, 'index'])->name('admin');
    Route::resource('roles', RoleController::class)->middleware(['role:Admin']);
    Route::resource('users', UserController::class)->middleware(['role:Admin']);
    Route::get('solicitudes',[SolicitudController::class, 'index'])->name('solicitudes');
    Route::get('pacientes',[PatientController::class, 'index'])->name('pacientes');
    Route::get('pacientes/{id}/ver',[PatientController::class, 'show'])->name('paciente.show');
/*     Route::get('doctores',[DoctorController::class, 'index'])->name('doctores'); */

    Route::get('resumen',[ResumenController::class, 'index'])->name('resumen');
    Route::get('resumen-show/{res}',[ResumenController::class, 'show'])->name('resumen.show');
    Route::get('receta',[ResumenController::class, 'receta'])->name('receta.demo');
    Route::post('crear/receta',[ResumenController::class,'crearReceta'])->name('crear.receta');

    Route::get('repetir/{id}/receta',[SolicitudController::class, 'repetir'])->name('repetir.receta');

    //Livewire full page components
    Route::get('solicitudes/{solicitud?}/ver',\App\Http\Livewire\Recetas\Index::class)->name('solicitud.show');
    Route::get('doctores/{doctor}/ver', \App\Http\Livewire\Doctor\Index::class)->name('doctor.show');
    Route::get('doctores', \App\Http\Livewire\Doctor\Lista::class)->name('doctores');

});

//Transbank
Route::post('iniciar-compra',[TransbankController::class, 'iniciarCompra'])->name('iniciar.compra');
Route::match(array('GET','POST'),'/confirmar-pago', [TransbankController::class, 'confirmar_pago'])->name('confirmar.pago');

Route::get('/pago-ok/{id_transaccion}', [TransbankController::class, 'pago_ok'])->name('pago.ok');
Route::get('/pago-fallido',[TransbankController::class,'pago_fallido'])->name('pago.fallido');
