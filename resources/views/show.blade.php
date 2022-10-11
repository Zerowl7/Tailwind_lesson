@extends('layouts.guest')
@section('content')
    <div class="movie-info border-b border-gray-800">
        {{-- m_card --}}
        <div class="container max-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="parasite" class="w-96" style="w-64 md:24rem">


            {{-- inf --}}
            <div class="pt-6 md:ml-24 md:pt-0">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>


                <div class='flex flex-wrap items-center text-gray-400 text-sm mt-3'>
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>

                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                {{-- description --}}
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex praesentium hic aliquam tempore cum
                    molestias amet dolorem aperiam nihil, consequuntur, voluptatum nam quia recusandae magnam illum ullam,
                    culpa enim porro provident inventore esse. Eum sunt optio, fugit maiores cum adipisci veritatis minus
                    nemo voluptatibus, in ducimus. Quod voluptate distinctio totam.
                </p>

                {{-- Casts --}}
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>
                                Bong Joon-ho
                            </div>
                            <div class="text-sm text-gray-400">
                                Director, Story, Screenplay
                            </div>
                        </div>

                        <div class="ml-8">
                            <div>
                                Han Jin-won
                            </div>
                            <div class="text-sm text-gray-400">
                                Screenplay
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Button --}}
                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 text-gray-900 rounded 
                    font-semibold px-4 py-3 hover:bg-orange-600 transition ease-in-out duration-150">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                        </svg>

                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

            </div>

        </div>
    </div>
    {{-- end --}}

    {{-- Movie Cast --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 ">
            <h2 class="text-4xl font-semibold">Cast</h2>
            {{-- Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/actor1.jpg" alt="actor"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/actor2.jpg" alt="actor"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/actor3.jpg" alt="actor"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/actor4.jpg" alt="actor"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/actor5.jpg" alt="actor"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>
                    {{-- Text --}}
                    <div class="mt-2">
                        {{-- Title --}}
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                        {{-- inf --}}
                        <div class='flex items-center text-gray-400 text-sm mt-1'>
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>





            </div>
        </div>


    </div>

    {{-- Images Movies --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            {{-- Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image1.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image2.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image3.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image4.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image5.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>
                {{-- Row --}}
                {{-- Photo --}}
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/image6.jpg" alt="interiers"
                            class="hover:opacity-60 transition ease-in-out duration-200">
                    </a>

                </div>






            </div>
        </div>


    </div>
@endsection
