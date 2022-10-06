<x-app-layout>
    <!--Hero-->
	<div class="pt-1 mb-5">
		<div class="container pl-20 mx-auto flex flex-wrap flex-col md:flex-row items-center">
			<!--Left Col-->
			<div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left -mt-24">
				<p class="uppercase tracking-loose w-full text-sky-700 font-extrabold">En Dermalink encuentras</p>
				<h1 class="my-4 text-4xl font-bold leading-tight">"Tu mejor solución para <br>combatir tus problemas a la piel"</h1>
				<p class="leading-normal text-xl mb-8 text-gray-700">  Haz tu consulta con médicos especialistas, y recibe un diagnóstico personalizado, en menos de 48 hrs hábiles sin salir de casa.</p>

				<a href="{{ route('step.one') }}" class="bg-azul hover:bg-blue-800 mx-auto lg:mx-0 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg">
                    Comenzar Consulta
                </a>
			</div>
			<!--Right Col-->
			<div class="w-full md:w-2/5 pt-28 -pb-52 z-10">
				<img class="px-12 mx-auto z-50 rounded-3xl bg-transparent" src="{{ asset('img/mobile-dermalink.png') }}">
			</div>
		</div>
	</div>

    <div class="relative -mt-12 lg:-mt-72">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#0369a1" fill-rule="nonzero">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#0369a1" fill-rule="nonzero">
                    <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                </g>
            </g>
        </svg>
    </div>

{{-- <form action="{{ route('iniciar.compra') }}" method="POST">
    @csrf
    <div class="relative z-0 mb-6 w-full group">
        <label for="first" class="text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 mb-5">
                        Boton de prueba transbank
                        <hr>

                        <input type="hidden" value="50" name="precio">
                        <button type="submit" class="text-white bg-azul cursor-pointer hover:bg-azul-900 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center float-right">
                            Pagar
                        </button>
    </div>
</form> --}}


<!--Inicio Sección 1-->
<section class="h-auto bg-sky-700">
    <div class="px-10 py-24 mx-auto max-w-7xl mt">
        <div class="w-full mx-auto text-left md:text-center  mt-16">
            <span class="text-white font-bold text-5xl">Tu dermatologo</span><span class="text-white text-5xl font-italic"> más cerca de ti</span>
            <p class="px-0 mb-6 text-lg text-gray-50 md:text-xl lg:px-24 mt-5">A través de <span class="font-bold">DERMALINK</span>, podrás acceder a atención especializada para tus controles, resolver dudas o urgencias. Del mismo modo, en  <span class="font-bold">DERMALINK</span>, podrás realizar tu primera consulta de un problema dermatológico, la que será evaluada por el médico especialista. En muchos casos esta evaluación a distancia será suficiente para indicar tratamiento, pero en otros será necesaria la evaluación presencial.</p>
        </div>
        <div class="flex flex-row items-center gap-x-1.5 mt-10 justify-center w-full">
            <div class="flex flex-row text-center gap-12">


                    <div class="basis-1/4 content-center x-auto">
                        <img class="" src="{{ asset('img/recursos/icon2.png')}}" alt="">
                        <p class="text-white text-xl font-medium">Consulta</p>
                        <p class="text-white  text-xl font-medium">Virtual</p>
                    </div>
                    <div class="basis-1/4 content-center">
                        <img class="" src="{{ asset('img/recursos/icon1.png')}}" alt="">
                        <p class="text-white  text-xl font-medium">Antención</p>
                        <p class="text-white  text-xl font-medium">Personalizada</p>
                    </div>
                    <div class="basis-1/4 content-center">
                        <img class="" src="{{ asset('img/recursos/icon3.png')}}" alt="">
                        <p class="text-white  text-xl font-medium">Profesionales</p>
                        <p class="text-white  text-xl font-medium">de alto nivel</p>
                    </div>
                    <div class="basis-1/4 content-center">
                        <img class="" src="{{ asset('img/recursos/icon4.png')}}" alt="">
                        <p class="text-white  text-xl font-medium">Seguimiento</p>
                        <p class="text-white  text-xl font-medium">de consultas</p>
                    </div>
                </div>
          </div>
    </div>
</section>
<!--Fin Sección 1-->

<!--Inicio Sección 2 imagen full-->
<section class="bg-white">
    <img src="{{ asset('img/recursos/columnaimagen.png')}}" alt="">
</section>
<!--Fin Sección 2 imagen full-->

<!--Fin Section 3 Como funciona  Título-->
<section class="h-auto bg-white text-center content-center items-center justify-between">
    <div class="max-w-7xl mx-auto pb-16  pt-12 px-10 sm:px-6 lg:px-8 sm:text-center content-center">
        <div class="flex flex-row items-center gap-x-1.5 mt-10 justify-center w-full">
            <img class="w-48 align-middle" src="{{ asset('/img/DermaLink.svg')}}" alt="">
        </div>
        <span class="mt-1 text-3xl text-sky-700 sm:text-3xl sm:tracking-tight lg:text-6xl">¿Cómo funciona <span class="font-extrabold">la consulta digital?<span></span> </div>
</section>
<!--Fin Section 3 Como funciona  Título-->



<!--Inicio Section registro -->
<section class="w-full bg-white pt-7 md:pt-2">
    <div class="box-border flex flex-col items-center content-center mx-auto leading-6 text-black border-0 border-gray-300 border-solid -mt-54 md:flex-row max-w-7xl mr-32">

        <!-- Image -->
        <div class="box-border relative w-full max-w-md mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 ">
            <img src="{{ asset('img/register.PNG') }}" class="w-full ">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:order-none">
            <h3 class="m-0 text-lg font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-xl">
            1.-Registro
            </h3>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-2 lg:text-sm">
                Deberás ingresar algunos de tus datos personales
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-5 h-5 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Tu Nombre
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-5 h-5 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Tu correo
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-5 h-5 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Eliges tu contraseña
                </li>
            </ul>
        </div>
        <div class="w-1/2">
        </div>
        <!-- End  Content -->
    </div>
</section>
<!--Fin Section registro -->

<!--Inicio Section antecedentes -->
<section class="w-full bg-white pb-7 md:pb-5">
    <div class="box-border flex flex-col items-center content-center mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl ml-32 -mt-24">

        <div class="w-1/2">

        </div>
        <div class="box-border relative w-full max-w-md px-4 mt-12 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
            <img src="{{ asset('img/encuesta.PNG') }}" class="w-full">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
            <h3 class="m-0 text-lg font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-xl">
                2.-Antecedentes clínicos
            </h3>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span>  Responderás una encuesta médica detallada
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Fin Section antecedentes -->


<!--Inicio Section Imágenes -->
<section class="w-full bg-white pt-7 md:pt-2">
    <div class="box-border flex flex-col items-center content-center mx-auto leading-6 text-black border-0 border-gray-300 border-solid -mt-54 md:flex-row max-w-7xl mr-32">

        <!-- Image -->
        <div class="box-border relative w-full max-w-md mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 ">
            <img  src="{{ asset('img/upload.PNG') }}"  class="w-full">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:order-none">
            <h3 class="m-0 text-lg font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-xl">
                3.-Fotografías y documentos
            </h3>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-2 lg:text-sm">
                Te solicitaremos archivos multimedia
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Imágenes referente a la consulta
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Recetas, exámenes, tec...
                </li>
            </ul>
        </div>
        <div class="w-1/2">


        </div>
        <!-- End  Content -->
    </div>

</section>
<!--Fin Section Imágenes -->

<!--Inicio Section Pago -->
<section class="w-full bg-white mt-54 pb-7 md:pb-5">
    <div class="box-border flex flex-col items-center content-center mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl ml-32  -mt-24">
        <div class="w-1/2">

        </div>
        <div class="box-border relative w-full max-w-md px-4 mt-12 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
            <img src="{{ asset('img/payment.PNG') }}" class="w-full">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
            <h3 class="m-0 text-lg font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-xl">
               4.- Pago
            </h3>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-azul rounded-full"><span class="text-sm font-bold">✓</span></span> Paga tu consulta a través de Webpay. Recibirás tu boleta en tu mail. </li>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Fin Section Pago -->

<!-- Inicio Divisor con ondas -->
<div class="relative bg-white">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
           {{--  <g transform="translate(-2.000000, 44.000000)" fill="#0369a1" fill-rule="nonzero">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g> --}}
            <g transform="translate(-4.000000, 76.000000)" fill="#f3f4f6" fill-rule="nonzero">
                <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
            </g>
        </g>
    </svg>
</div>
<!-- Fin Divisor con ondas -->

<!-- Inicio Profesionales -->
<section class="relative pb-20 overflow-hidden bg-gray-100">
        <div class="max-w-7xl mx-auto pt-16 pb-16 px-10 sm:px-6 lg:px-8 sm:text-center content-center">
            <p class="mt-1 text-xl text-sky-700 sm:tracking-tight">Somos un equipo de alto nivel</p>
            <span class="mt-1 text-2xl text-gray-900 sm:text-3xl sm:tracking-tight lg:text-6xl">Profesionales destacados<span></span>
        </div>
    <span class="absolute bottom-0 left-0"> </span>
    @foreach ($doctores as $doctor)
        <div class="relative px-16 mx-auto max-w-7xl">
            <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-3 lg:grid-cols-4">
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tl-none shadow-2xl bg-sky-700"></div>
                            @if ($doctor->user->avatar)
                            <img class="relative z-20 w-full rounded-full hover:grayscale grayscale-0.5" src="{{ Storage::url($doctor->user->avatar) }}">
                            @else
                            <img class="relative z-20 w-full rounded-full hover:grayscale grayscale-0.5" src="{{ asset('img/icon-doctor.png') }}">
                            @endif
                    </div>
                    <div class="space-y-2 text-center">
                        <div class="pt-6 text-center">
                            <p class="text-lg leading-normal font-bold mb-1">{{ $doctor->user->name }}</p>
                            <p class="text-gray-500 leading-relaxed font-light">Dermatólogo</p>
                            <!-- social icon -->
                            <div class="mt-2 mb-5 space-x-2">
                                <a class="hover:text-blue-700" aria-label="Twitter link" href="#">
                                    <!-- <i class="fab fa-twitter text-twitter"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="1rem" height="1rem" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path>
                                    </svg>
                                </a>
                                <a class="hover:text-blue-700" aria-label="Facebook link" href="#">
                                    <!-- <i class="fab fa-facebook text-facebook"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="1rem" height="1rem" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path>
                                    </svg>
                                </a>
                                <a class="hover:text-blue-700" aria-label="Instagram link" href="#">
                                    <!-- <i class="fab fa-instagram text-instagram"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="1rem" height="1rem" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path>
                                        <path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path>
                                        <path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path>
                                    </svg>
                                </a>
                                <a class="hover:text-blue-700" aria-label="Linkedin link" href="#">
                                    <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="1rem" height="1rem" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
<!-- Fin Profesionales -->

<!-- Preguntas frecuentes -->
<section class="text-gray-700">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">

          <span class="mt-1 text-3xl text-gray-900 sm:text-3xl sm:tracking-tight lg:text-6xl">Preguntas Frecuentes<span></span>
          <p class="mt-1 text-xl text-sky-700 sm:tracking-tight">Las preguntas más comunes sobre cómo funcionamos y qué podemos hacer por ti.</p>
        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2 mt-5">
          <div class="w-full lg:w-1/2 px-4 py-2">
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                How Long is this site live?
              </summary>

              <span>
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold bg-gray-200 rounded-md py-2 px-4">
                Can I install/upload anything I want on there?
              </summary>

              <span>
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                How can I migrate to another site?
              </summary>

              <span>
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
          </div>
          <div class="w-full lg:w-1/2 px-4 py-2">
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                Can I change the domain you give me?
              </summary>

              <span class="px-4 py-2">
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                How many sites I can create at once?
              </summary>

              <span class="px-4 py-2">
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
            <details class="mb-4 cursor-pointer">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                How can I communicate with you?
              </summary>

              <span class="px-4 py-2">
                Laboris qui labore cillum culpa in sunt quis sint veniam.
                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                minim velit nostrud pariatur culpa magna in aute.
              </span>
            </details>
          </div>
        </div>
      </div>
</section>
<!-- Fin Preguntas frecuentes -->

<!-- Testimonios -->
<div class="max-w-7xl mx-auto pt-16 px-10 py-12 sm:px-6 lg:px-8 sm:text-center content-center">
    <span class="mt-1 text-3xl text-gray-900 sm:text-3xl sm:tracking-tight lg:text-6xl">Testimonios Pacientes<span></span>
    <p class="mt-1 text-xl text-sky-700 sm:tracking-tight">Comprometidos con tu bienestar</p>
</div>
<section class="flex items-center justify-center pb-24 bg-gray-100 min-w-screen">
    <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
        <div class="flex flex-col items-center lg:flex-row">
            <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-8">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-azul fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">Awesome product! And the customer service is exceptionally well.</p>
                        </div>

                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                            Jane Cooper
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                        </h3>
                    </div>
                    <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                </blockquote>
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-azul fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">I can't express enough, how amazing this service has been for my company.</p>
                        </div>
                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                            John Doe
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                </blockquote>
            </div>
            <div class="w-full lg:w-1/2">
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-azul fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">I can't express enough, how amazing this service has been for my company.</p>
                        </div>
                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                            John Doe
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                </blockquote>
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-azul fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">I can't express enough, how amazing this service has been for my company.</p>
                        </div>

                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                            John Smith
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!--Fin Testimonios -->

@include('layouts.partials.footer')

</x-app-layout>
