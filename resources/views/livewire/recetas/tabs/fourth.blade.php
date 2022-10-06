<div>
        <button wire:click='create' class="block w-full md:w-auto mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Crear receta
        </button>
    <!-- Default Modal -->


        @unless (count($recetas) > 0)
            <tr class="bg-white border-b text-center dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 mt-5">
                <td class="px-6 py-4"> No existen recetas activas</td>
            </tr>
        @else
        <table id="dataTableSolicitudes" class="w-full shadow-md text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="px-6 py-3">Fecha de creación</th>
                <th scope="col" class="px-6 py-3">Repetir</th>
                <th scope="col" class="px-6 py-3">Rango</th>
                <th scope="col" class="px-6 py-3">Estado</th>
                <th scope="col" class="px-6 py-3">Enviado</th>
               {{--  <th scope="col" class="px-6 py-3">Prioridad</th> --}}
                <th scope="col" class="px-6 py-3"></th>
            </tr>
            </thead>
            <tbody>
                        @foreach ($recetas as $receta)
                            <tr class="bg-white border-b text-center dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">   {{Carbon\Carbon::parse($receta->prescription_send)->format('h:i | d-m-Y')}}</td>
                                <td class="px-6 py-4">
                                @if ($receta->repeat == 1)
                                    <span>Repetición</span>
                                @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($receta->repeat == 1)
                                        @if ($receta->range == 0)
                                            <span>3 Meses</span>
                                        @elseif($receta->range == 1)
                                            <span>6 Meses</span>
                                        @elseif($receta->range == 2)
                                            <span>12 Meses</span>
                                        @elseif($receta->range == 3)
                                            <span>Sin límite</span>
                                        @endif
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($receta->state == 1)
                                        <span>Activa</span>
                                        @else
                                        <span>Inactiva</span>
                                    @endif
                                </td>
                                <td>
                                    {{$receta->sends}}
                                </td>
                                <td class="px-6 py-4">
                                    <a wire:click="edit({{$receta}})" type="button"class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <a wire:click="visualizar({{$receta}})" type="button"class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a wire:click="enviar({{$receta}})" type="button"class=" ml-2 cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                          </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

            </tbody>
            </table>

            @endunless

        @if($open)
            <div tabindex="-1" class="bg-[#4d515dab] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
                        <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                Editar receta
                            </h3>
                            <button wire:click="cerrar" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="medium-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                <!-- Modal body -->
                <form wire:submit.prevent="update" >
                        <div class="p-6 space-y-6">
                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text"name="name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="{{$solicitud->patient->user->name}}" required readonly />
                                    <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre del paciente</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="{{$solicitud->patient->user->email}}" type="email" required readonly />
                                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
                                </div>
                            </div>

                            <div class="grid xl:grid-cols-2 xl:gap-6">
                                <div class="relative z-0 w-full mb-6 group">
                                    @if($recetaEdit->repeat)
                                        <label for="checked-toggle" class="inline-flex relative items-center cursor-pointer">
                                            <input type="checkbox"  name="repetirEdit" wire:model='repetirEdit' value="" id="checked-toggle" class="sr-only peer" checked>
                                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">¿Repetir receta?</span>
                                          </label>
                                    @else
                                        <label class="inline-flex relative items-center cursor-pointer">
                                            <input name="recetaEdit.repetir" wire:model='repetirEdit' type="checkbox" id="default-toggle" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">¿Repetir receta?</span>
                                        </label>
                                        @endif
                                </div>
                                @if ($repetirEdit)

                                        <div class="relative z-0 w-full mb-6 group">
                                            <label for="underline_select" class="sr-only"></label>
                                            <select wire:model="editRange" wire:ignore class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                <option value="0" @if ($editRange == 0) selected @endif> 3 meses</option>
                                                <option value="1" @if ($editRange == 1) selected @endif> 6 meses</option>
                                                <option value="2" @if ($editRange == 2) selected @endif> 12 meses</option>
                                                <option value="3" @if ($editRange == 3) selected @endif> Sin límite de repetición</option>
                                            </select>
                                        </div>
                                @endif

                            </div>
                            <!-- component -->
                            <div class="relative">
                                <textarea rows="5" type="text" wire:model="editMessage" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Ingrese el detalle de la receta</label>
                            </div>
                        </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar receta</button>
                                <button wire:click="cerrar" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
        @endif


    @if($openTwo)
        <div tabindex="-1" class="bg-[#4d515dab] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
                    <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
               {{-- <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                            Crear receta
                        </h3>
                        <button wire:click="cerrar" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="medium-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div> --}}
            <!-- Modal body -->
            <form wire:submit.prevent="update" >
                    <div class="p-6 space-y-6">

                        <div class="grid xl:grid-cols-3 xl:gap-3">
                            <div class="relative z-0 w-full mb-6 group">
                                    <img src="{{ asset('img/DermaLink.svg') }}" alt="">
                            </div>
                            <div class="relative z-0 w-full mb-6 group">

                            </div>
                            <div class="relative z-0 w-full mb-6 group text-right">
                                {{\Carbon\Carbon::parse($solicitud->created_at)->format('Y-m-d')}}

                            </div>
                        </div>

                        <div class="grid xl:grid-cols-3 xl:gap-3">
                            <div class="relative z-0 w-full mb-0 group">
                                <input type="text"name="name" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            value="Dr. {{$solicitud->doctor->user->name}}" required readonly />
                                <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            value="Rut. {{$solicitud->doctor->user->rut}}" required readonly />
                                {{-- <input type="text"name="" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            value="Rut. {{$solicitud->doctor->user}}" required readonly /> --}}
                            </div>
                        </div>

                        <div class="grid xl:grid-cols-1 xl:gap-1">
                            <div class="relative z-0 w-full group">
                                <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="Nombre: {{$solicitud->patient->user->name}}" required readonly />
                            </div>
                        </div>
                        <div class="grid xl:grid-cols-2 xl:gap-2">
                            <div class="relative z-0 w-full group">
                                <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="Edad: {{\Carbon\Carbon::parse($solicitud->patient->user->birthday)->age}} años" required readonly />
                            </div>
                            <div class="relative z-0 w-full group">
                                <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="Rut: {{$solicitud->patient->user->rut}}" required readonly />
                            </div>
                        </div>


                        <div class="grid xl:grid-cols-1 xl:gap-1">
                            <textarea readonly rows="5" type="text" name="mensaje" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">{!!$receta->message!!}</textarea>
                        </div>

                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                @if ($receta->range == 0)
                                    <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="Repetir receta : por 3 meses" required readonly />
                                    @elseif($receta->range == 1)
                                    <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="Repetir receta : por 6 Meses" required readonly />
                                    @elseif($receta->range == 2)
                                    <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="Repetir receta : por 12 Meses" required readonly />
                                    @elseif($receta->range == 3)
                                    <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                value="Repetir receta : indefinido" required readonly />
                                    @elseif($receta->range == 'null')
                                                <input type="text"name="rut" id="floating_name" class="block py-0 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-transparent appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            value="NO REPETIR RECETA" required readonly />
                                @endif
                            </div>
                        </div>
                        <div class="grid xl:grid-cols-3 xl:gap-6 mt-5">
                            <div class="relative z-0 w-full group">
                            </div>
                            <div class="relative z-0 w-full mb-2 group text-center">
                                @if ($firma)
                                    <img width="120" src="{{ Storage::url($firma)}}" alt="">
                                @endif
                                <hr class="mt-3">
                                <span>Firma</span>
                            </div>
                            <div class="relative z-0 w-full group">
                            </div>
                        </div>

                    </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
                            <button wire:click="cerrar" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
    @endif

    @if ($crear)
    <div tabindex="-1" class="bg-[#4d515dab] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Crear receta
                    </h3>
                    <button wire:click="cerrar" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                    <form action="{{ route('crear.receta') }}" method="POST">
                        @csrf
                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                <div class="p-6 space-y-6">
                                    <div class="grid xl:grid-cols-2 xl:gap-6">
                                        <div class="relative z-0 w-full mb-6 group">
                                            <input type="text"name="name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                        value="{{$solicitud->patient->user->name}}" required readonly />
                                            <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre del paciente</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                        value="{{$solicitud->patient->user->email}}" type="email" required readonly />
                                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
                                        </div>
                                    </div>
                                    <div class="grid xl:grid-cols-2 xl:gap-6">
                                        <div class="relative z-0 w-full mb-6 group">

                                                <label  for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                                                    <input name="repeat" wire:model='repetir' type="checkbox" id="default-toggle" class="sr-only peer">
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">¿Repetir receta?</span>
                                                </label>
                                        </div>

                                        @if ($repetir)
                                            <div class="relative z-0 w-full mb-6 group">
                                                <label for="underline_select" class="sr-only"></label>
                                                <select name="range" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                    <option value="" selected>-Rango máximo-</option>
                                                    <option value="0"> 3 meses</option>
                                                    <option value="1"> 6 meses</option>
                                                    <option value="2"> 12 meses</option>
                                                    <option value="3"> Sin límite de repetición</option>
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- component -->
                                    <div class="relative">
                                        <textarea rows="5" type="text" name="mensaje" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "> </textarea>
                                        <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Ingrese el detalle de la receta</label>
                                    </div>
                                </div>
         <!-- Modal footer -->
         <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear receta</button>
            <button wire:click="cerrar" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
        </div>
        </form>
        </div>
        </div>
    </div>
@endif

@if($enviar)
<div tabindex="-1" class="bg-[#4d515dab] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
            <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Enviar receta
                </h3>
                <button wire:click="cerrar" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="medium-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
    <!-- Modal body -->
    <form wire:submit.prevent="enviarReceta" >
            <div class="p-6 space-y-6">
                <div class="grid xl:grid-cols-1 xl:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" wire:model="emailEnviar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
                    </div>
                </div>
            </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar receta</button>
                    <button wire:click="cerrar" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
@endif
</div>
