@extends('layouts.guest')
@section('content')
    <div class="container mx-auto px-4 pt-16">



        {{-- Title --}}
        <div class="popular_movies">


            <h2 class="uppercase tracking-winder text-orange-500 text-lg font-semibold">POPULAR MOVIES</h2>

            {{-- Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="{{ route('movies.show') }}">
                        <img src="/img/parasite.jpg" alt="parasite"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">frozen</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the Hedgehog</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sarah.jpg" alt="sarah"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Ratched</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/dool.jpg" alt="dool"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Russian Dool</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/Gray.jpg" alt="gray"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Gray Man</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/strange.jpg" alt="strange"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Stranger Things</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/star.jpg" alt="star"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Star Wars</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/kristy.jpg" alt="kristy"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Women</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>



            </div>

        </div>






        
        {{-- now_playing --}}
        <div class="now_playing mt-24 mb-16">


            <h2 class="uppercase tracking-winder text-orange-500 text-lg font-semibold">NOW PLAYING</h2>

            {{-- Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="frozen"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">frozen</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="sonic"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the Hedgehog</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sarah.jpg" alt="sarah"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Ratched</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/dool.jpg" alt="dool"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Russian Dool</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/Gray.jpg" alt="gray"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Gray Man</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/strange.jpg" alt="strange"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Stranger Things</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/star.jpg" alt="star"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Star Wars</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/kristy.jpg" alt="kristy"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Women</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-star-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>

                        {{-- Janres --}}
                        <div class="text-gray-400 text-sm">
                            <span>Action,Thriller,Comedy</span>
                        </div>
                    </div>
                </div>



            </div>

        </div>


    </div>
@endsection
