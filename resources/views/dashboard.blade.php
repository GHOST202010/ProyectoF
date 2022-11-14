<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
                <h2 class="">Página para gestionar su usuario.</h2>
                <p>Si desea regresar a la página principal
                </p>
                <a href="/" class="text-black bg-blue-700 underline">Click
                    aquí</a>

            </div>
        </div>
    </div>
</x-app-layout>
