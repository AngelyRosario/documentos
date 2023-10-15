@extends('layouts.home')

@section('title',' - Mesa de partes')

@push('css')

@endpush

@section('content')

<section class="bg-gray-100 dark:bg-gray-900 mt-14">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-2 gap-8">
            <!----Realizar trámite--->
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Realizar un trámite</h2>
                <img src="{{asset('img/registro.png')}}" alt="Realiza trámite" class="md:w-[50%]">
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Quieres realizar un trámite y enviarlo a la mesa de partes de la Fisme, registra tu trámite aquí.</p>
                <a href="{{ route('expedientes.create')}}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Realizar trámite
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            <!----Realizar seguimiento--->
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">

                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Consultar trámite</h2>
                <img src="{{asset('img/consultar.png')}}" alt="Consultar trámite" class="md:w-[50%] my-8">
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Realiza el seguimiento al trámite registrado, recuerda tener a mano el código de seguridad y el número de registro.</p>
                <a href="{{ route('expediente.buscar') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Consultar trámite
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')

@endpush