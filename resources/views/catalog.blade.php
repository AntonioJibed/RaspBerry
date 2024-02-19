<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('VIDEOCLUB') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-4">
                        @foreach ($arrayPeliculas as $key => $pelicula)
                            <a href="{{ route('show', ['id' => $key]) }}">
                            <img src="{{ $pelicula['poster'] }}" style="height: 200px">
                                <h4 style="min-height:45px;margin:5px 0 10px 0">
                                    {{ $pelicula['title'] }}
                                </h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
