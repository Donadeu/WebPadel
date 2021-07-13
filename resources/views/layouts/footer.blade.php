<footer class="bg-gray-800 py-10 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pàgines
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                <li class="pb-1">
                    <a href="{{ route('register') }}">
                        Registra't
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Contacta'ns
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/">
                        Direcció
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Telèfon
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Contacte
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                <a href="{{ route('reserva') }}">Reserva de pistes</a>
            </h3>            
        </div>
    </div>
    <br>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100" pt-6>
        Copyright 2020-2021 Club de pàdel Taradell. Tots els drets reservats.
    </p>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100" pt-6>
        Carrer de l'esport número 30 · T 666 89 39 34 · <a href="" class="hover:underline"> jordidonadeucasassa@gmail.com</a> · <a href="" class="hover:underline">Avís legal</a>
    </p>
</footer>