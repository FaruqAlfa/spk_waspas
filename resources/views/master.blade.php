<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SPK Waspas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
<body class="flex flex-col h-screen">
    <nav class="bg-gray-50 border-solid border-2 border-black dark:bg-gray-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a class="flex">
                <img src="{{ asset('docs/logoWaspas.png') }}" class="h-8" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
               
            </div>
        </div>
    </nav>

    <div class="flex-grow flex bg-gray-700">
        {{-- sidebar --}}
        <div class="w-1/5 p-8 bg-gray-200 dark:bg-primary">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('data-kriteria.index') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="ml-3">Kriteria</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('data-alternatif.index') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="ml-3">Alternatif</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('decision-matrix.create') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="ml-3">Buat Matriks</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('decision-matrix.index') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="ml-3">Matriks Keputusan</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('normalisasi.index') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="ml-3">Tabel Normalisasi</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('score.index') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span class="ml-3">Score dan Ranking</span>
                    </a>
                 </li>

        </div>
        <div class="w-4/5 bg-white">
            <div class="content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
