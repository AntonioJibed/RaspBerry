<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Peliculas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <img src="{{ $pelicula['poster'] }}" class="w-full h-auto md:w-96 md:h-full" alt="{{ $pelicula['title'] }}">
                        </div>
                        <div class="md:pl-4">
                            <h1 class="text-4xl font-bold">{{ $pelicula['title'] }}</h1>
                            <p class="text-lg"><strong>Año: {{ $pelicula['year'] }} Director: {{ $pelicula['director'] }}</strong></p>
                            <p><strong>Sinopsis:</strong> {{ $pelicula['synopsis'] }}</p>

                            @if ($pelicula['rented'])
                                <p><strong>Estado:</strong>Película actualmente alquilada</p>
                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Devolver Pelicula</button>
                                @else
                                <p><strong>Estado:</strong>Película disponible</p>
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Alquilar Pelicula</button>
                                @endif

                                <button type="button" onclick="window.location='{{ route('edit') }}'" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar pelicula</button>

                                <button type="button" onclick="window.location='{{ route('catalog') }}'" class="py-2.5 px-5 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Volver al listado
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
