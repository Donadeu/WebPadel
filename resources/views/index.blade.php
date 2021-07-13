@extends('layouts.app')

@section('content')
    <div class="background-imatge grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Vols informar-te sobre el nostre club?
                </h1>
                <a href="/"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Saber més
                </a>
            </div>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-4 gap-10 w-4/5 mx-auto py-15 border-b
    border-gray-200">
        <div class="w-3/10">
            <img src="https://cdn.pixabay.com/photo/2014/01/12/17/30/tennis-242949_960_720.jpg"
            width="500" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-3/10 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                INFORMACIÓ D'INTERÈS:
            </h2>
            <p class="py-8 text-gray-500 text-s">
                <b>Horaris: </b>
                <br>
                - De dilluns a divendres de 8h a 23h.
                <br>
                - Dissabtes de 8h a 21h.
                <br>
                - Diumenges de 8h a 20h.
                <br><br>
                <a href="{{ route('reserva') }}"><b>Reserva de pistes: </b></a>
                <br>
                - Les pistes de pàdel es poden reservar amb 1 setmana d'antel·lació.
                <br><br>
                <b>Preus: </b>
                <br>
                - Pista de pàdel: 8 euros/hora.
                <br> - Llum: 4 euros/hora.
            </p>
        </div>
        <div class="m-auto sm:m-auto text-left w-2/10 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                PENYES DE PÀDEL:
            </h2><br>
            <a href="https://www.padelnest.com/club/4qafqhzm3v" target="_blank">
                <img src="https://www.padelnest.com/pictures/pic/IA/IAME/IAMEDQZM8J_s.png" style="width:125px;height:125px;">
            </a><br>
            <a href="https://www.pvitoriana.com/club-padel-vitoria/" target="_blank">
                <img src="https://www.pvitoriana.com/wp-content/uploads/2021/03/LogoLaPen%CC%83a50Aniv1.png" style="width:125px;height:125px;">
            </a>             
        </div>
        <div class="m-auto sm:m-auto text-left w-2/10 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                ALTRES ENLLAÇOS:
            </h2>
            <br><br><br><br>
            <a href="{{ route('reserva') }}" class="uppercase bg-black border-2 border-gray-100 text-gray-100 text-m font-extrabold py-3 px-5 rounded-3xl">
                RESERVAR PISTA
            </a>
            <br><br><br><br><br><br>
            <a href="https://clubtennisvic.cat/escola-tennis-padel/escola-de-padel/" target="_blank" class="uppercase bg-black border-2 border-gray-100 text-gray-100 text-m font-extrabold py-3 px-5 rounded-3xl">
                ESCOLES DE PÀDEL
            </a>
            <br><br><br><br><br><br>
            <a href="https://www.decathlon.es/es/sport/c0-deportes/c1-padel/_/N-m38e1w" target="_blank" class="uppercase bg-black border-2 border-gray-100 text-gray-100 text-m font-extrabold py-3 px-5 rounded-3xl">
                COMPRAR EQUIPAMENT
            </a>            
        </div>

    </div>
@endsection