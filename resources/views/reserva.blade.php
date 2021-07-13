@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    RESERVA PISTA
                </header>
                
                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="post"
                    action="reserva">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="num_pista" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Número de pista:
                        </label>

                        <input id="num_pista" type="number" class="form-input w-full @error('num_pista')  border-red-500 @enderror"
                            name="num_pista" value="{{ old('num_pista') }}" required autocomplete="num_pista" autofocus min="1" max="5">

                        @error('num_pista')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ "Introdueix el número de la pista que vols reservar" }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="dia" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Dia de la reserva:
                        </label>

                        <input id="dia" type="date"
                            class="form-input w-full @error('dia') border-red-500 @enderror" name="dia"
                            value="{{ old('dia') }}" required autocomplete="dia">

                        @error('dia')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ "Introdueix una data vàlida per la reserva" }}
                        </p>
                        @enderror
                    </div>                   
                    @if (Auth::check())
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 py-4">
                                Reserva
                            </button>
                        </div>
                    @else
                        <div class="flex flex-wrap">
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline p-3 py-3" href="{{ route('register') }}">
                                Registra't per poder fer reserves
                            </a>
                        </div>
                    @endif
                    
                </form>              
            </section>
            <br>
            @if (session()->has('message'))
                <div class="w-4/5 m-auto mt-10 pl-2">
                    <p class="w-4/5 mb-4 text-gray-50 bg-green-500 roundex-3xl py-4 text-center">
                        {{ session()->get('message') }}
                    </p>
                </div>
            @endif
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    RESERVES ACTUALS
                </header>
                <div class="sm:grid grid-cols-2 gap-10 w-5/5 mx-auto py-5 border-b border-gray-200">
                    <div class="">
                        <header class="font-semibold bg-gray-200 text-gray-700 py-3 px-2 sm:py-6 sm:px-8 sm:rounded-t-md">
                            NÚMERO DE PISTA
                        </header>
                    </div>
                    <div class="">
                        <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                            DIA
                        </header>
                    </div>
                </div>                
                @foreach ($reserves as $reserva)
                    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-3 border-b
                    border-gray-200">
                        <div class="">
                            <p class="text-left text-gray-700 font-bold pb-4 bg-gray-200">
                                {{ $reserva->num_pista }}
                            </p>
                        </div>
                        <div class="">
                            <p class="text-left text-gray-700 font-bold pb-4 bg-gray-200">
                                {{ $reserva->dia }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</main>
@endsection
