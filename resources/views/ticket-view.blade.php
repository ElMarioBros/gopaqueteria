@extends('includes.includes')
@section('title')
Rastreo | {{ $ticket->track_number }}
@endsection
@section('content')
<style>

    .barcode {
        left: 50%;
        display: inline-block;
        transform: translateX(-70px);
    }

</style>

<div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover">
    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl my-12">
        <div class="flex flex-col">
            <div class="bg-white relative drop-shadow-2xl rounded-3xl p-4 m-4">
                <div class="flex-none sm:flex">
                    <div class="flex-auto justify-evenly">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center  my-1">
                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                    <img src="{{ asset('images/assets/logo.png') }}" alt="GO" class="h-8 p-1">
                                </span>
                                <h2 class="font-medium">Go</h2>
                            </div>
                            <div class="ml-auto text-blue-800">{{ $ticket->track_number }}</div>
                        </div>
                        <div class="border-b border-dashed border-b-2 my-5"></div>
                        <div class="flex items-center">
                            <div class="flex flex-col">
                                <div class="flex-auto text-xs text-gray-400 my-1">
                                    {{-- <span class="mr-1 ">MO</span><span>19 22</span> --}}
                                </div>
                                <div class="text-xs">Origen</div>
                                <div class="w-full flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->origin }}</div>

                            </div>
                            <div class="flex flex-col mx-auto">
                                <img src="{{ asset('images/assets/logo.png') }}" alt="Go" class="w-20 p-1">

                                </div>
                                <div class="flex flex-col ">
                                    <div class="flex-auto text-xs text-gray-400 my-1">
                                        {{-- <span class="mr-1">MO</span><span>19 22</span> --}}
                                    </div>
                                    <div class="text-xs">Destino</div>
                                    <div class="w-full flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->destination }}</div>

                                </div>
                            </div>
                            <div class="border-b border-dashed border-b-2 my-6 pt-5">
                                <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
                                <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
                            </div>
                            <div class="flex items-center mt-12 mb-4 px-5">
                                <div class="flex flex-col text-sm">
                                    <span class="">{{ $ticket->name }}</span>
                                    <div class="font-semibold">{{ $ticket->description }}</div>

                                </div>
                            </div>
                            <div class="border-b border-dashed border-b-2 my-5 pt-5">
                                <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
                                <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
                            </div>
                            <div class="flex items-center px-5 pt-3 text-sm">
                                <div class="flex flex-col">
                                    <span class="">Paquetero</span>
                                    <div class="font-semibold w-max">{{ strtoupper($ticket->registered_by_id)  }}</div>

                                </div>
                                <div class="flex flex-col mx-auto">

                                </div>
                                <div class="flex flex-col">
                                    <span class="float-right">Registrado el</span>
                                    <div class="font-semibold">{{ $ticket->created_at }}</div>

                                </div>
                            </div>
                            <div class="flex flex-col py-5  justify-center text-sm ">
{{--                                 <h6 class="font-bold text-center">Boarding Pass</h6>

                                <div class="barcode inline-block mt-4 relative left-auto">
                                    <img id="qrcode" src="https://courtingthelaw.com/wp-content/uploads/QR-code-example.jpg" alt="PZExpress" class="w-36 p-1">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-2xl mx-auto w-full">
    
                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 text-center">Sin imagen frontal</span>
                            <img src="{{ asset($ticket->image_front) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 text-center">Sin imagen trasera</span>
                            <img src="{{ asset($ticket->image_back) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 text-center">Sin imagen izquierda</span>
                            <img src="{{ asset($ticket->image_left) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 text-center">Sin imagen derecha</span>
                            <img src="{{ asset($ticket->image_right) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
            
            </div>
        </div>

        <a href="{{ route('search') }}" class="mb-12 flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 mt-12 rounded transition duration-150" title="Return Home">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            <span>Volver a buscar</span>
        </a>


    </div>
</div>
@endsection