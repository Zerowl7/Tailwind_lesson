<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie App</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--   JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>




</head>

<body class="font-sans bg-gray-900 text-white" style="background-color: rgb(14, 12, 20)">

    {{-- Nav-bar --}}
    <nav class="border-b border-gray-800 " style="fill: #ffffff">

        <div class="container mx-auto flex flex-col md:flex-row  justify-between px-4 py-6">
            {{-- left-bar --}}
            <ul class="flex flex-col md:flex-row items-center" style="padding-left: 0px">

                <li>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-camera-reels-fill" viewBox="0 0 16 16" style="fill: #ffffff">
                            <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            <path
                                d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" />
                        </svg>
                    </a>
                </li>

                <li class=" md:ml-16   ">
                    <a href="#" class=" md:text-base lg:text-xl text-white hover:text-gray-300" style="text-decoration: none;">
                        Movies </a>
                </li>

                <li class=" md:ml-16 mt-0.5  md:mt-0">
                    <a href="#" class=" md:text-base lg:text-xl text-white hover:text-gray-300" style="text-decoration: none;">
                        TV Shows </a>
                </li>

                <li class=" md:ml-16 mt-0.5  md:mt-0">
                    <a href="#" class=" md:text-base lg:text-xl text-white hover:text-gray-300"
                        style="text-decoration: none;">Actors </a>
                </li>

            </ul>

            <div class="flex flex-col md:flex-row items-center">
                {{-- left-search --}}
                <div class="relative mt-3  md:mt-0">

                    <input  type="text"
                        class="bg-gray-800 rounded-3xl w-64 px-8 py-1 focus:outline focus:shodow-outline"
                        placeholder="Search" style="border-radius: 9999px;">

                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-1.5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by
                            @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                        </svg>


                    </div>
                </div>

                {{-- avatar_photo --}}

                <div class="md:ml-4 mt-3  md:mt-0">
                    <a href="#">
                        <img src="/img/avatar3.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>


        </div>

    </nav>
    @yield('content')
</body>

</html>
