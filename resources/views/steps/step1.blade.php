<x-app-layout>

    @livewire('steps')
{{-- Inicio encuesta --}}
{{-- @include('steps.partials.title') --}}

{{-- <!-- component -->
<div class="w-full py-6">
<div class="flex">
  <div class="w-1/4">
    <div class="relative mb-2">
      <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
        <span class="text-center text-white w-full">
          <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-xs text-center md:text-base">Titulo1</div>
  </div>

  <div class="w-1/4">
    <div class="relative mb-2">
      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
          <div class="w-0 bg-green-300 py-1 rounded" style="width:10%"></div>
        </div>
      </div>

      <div class="w-10 h-10 mx-auto bg-white rounded-full text-lg text-white flex items-center">
        <span class="text-center text-gray-600 w-full">
          <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-xs text-center md:text-base">Titulo2</div>
  </div>

  <div class="w-1/4">
    <div class="relative mb-2">
      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
          <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
        </div>
      </div>

      <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
        <span class="text-center text-gray-600 w-full">
          <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-xs text-center md:text-base">Titulo3</div>
  </div>

  <div class="w-1/4">
    <div class="relative mb-2">
      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
          <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
        </div>
      </div>

      <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
        <span class="text-center text-gray-600 w-full">
          <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-xs text-center md:text-base">Titulo4</div>
  </div>

  <div class="w-1/4">
    <div class="relative mb-2">
      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
          <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
        </div>
      </div>

      <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
        <span class="text-center text-gray-600 w-full">
          <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-xs text-center md:text-base">Titulo5</div>
  </div>
</div>
</div> --}}

{{-- Fromulario --}}
{{-- <div class="flex">
<div class="mx-auto">
    <div class="w-full  sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">

                    {!! Form::open(['method' => 'POST','route' => ['step.create.one'],'']) !!}
                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0  w-full group">
                                <img class="w-2/5 mx-auto z-50 rounded-3xl bg-transparent" src="{{ asset('img/mobile-dermalink.png') }}">
                            </div>
                            <div class="relative z-0  w-full group">
                                {!! Form::textarea('pregunta-uno',null, array('required' => 'required' ,'placeholder' => ' ','class' => 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer')) !!}
                                <label for="pregunta-uno" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2">Cuéntanos, ¿qué te motiva a consultar?</label>
                                <button type="submit" class="text-white cursor-pointer z-50 mt-6 bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right">
                                    Comenzar
                                </button>
                            </div>

                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
{{-- Fin encuesta --}}


</x-app-layout>
