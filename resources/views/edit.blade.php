<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificar Película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('edit') }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="year" class="block text-sm font-medium text-gray-700">Año</label>
                            <input type="text" name="year" id="year" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="director" class="block text-sm font-medium text-gray-700">Director</label>
                            <input type="text" name="director" id="director" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="poster" class="block text-sm font-medium text-gray-700">Poster</label>
                            <input type="text" name="poster" id="poster" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="synopsis" class="block text-sm font-medium text-gray-700">Resumen</label>
                            <textarea name="synopsis" id="synopsis" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Modificar película</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
