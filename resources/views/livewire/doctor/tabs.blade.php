<div>
    <div class="bg-white p-3 shadow-sm rounded-sm">
        <div class="w-full mx-auto mt-4  rounded">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full px-1 pt-2 ">
          {{--     <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a  href="#first">Cuentas</a></li> --}}
              <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a id="default-tab" href="#second">Solicitudes Atendidas</a></li>
              <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Solicitudes Pendientes</a></li>
              <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Mi Firma</a></li>
              <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fivth">Agenda</a></li>
              @can('role-delete')
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#sixth">Servicios</a></li>
              @endcan
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
              {{-- <div id="first" class="p-4">
                    @livewire('doctor.tabs.cuentas',['doctor' => $doctor])
              </div> --}}
              <div id="second" class="hidden p-4">
                    @livewire('doctor.tabs.atendidas',['doctor' => $doctor])
              </div>
              <div id="third" class="hidden p-4">
                    @livewire('doctor.tabs.pendientes',['doctor' => $doctor])
              </div>
              <div id="fourth" class="hidden p-4">
                    @livewire('doctor.tabs.firma',['doctor' => $doctor])
              </div>
              <div id="fivth" class="hidden p-4">
                    @livewire('doctor.tabs.agenda',['doctor' => $doctor])
                </div>
                @can('role-delete')
                <div id="sixth" class="hidden p-4">
                    @livewire('doctor.tabs.services',['doctor' => $doctor])
                </div>
                @endcan
            </div>
          </div>
    </div>
</div>
