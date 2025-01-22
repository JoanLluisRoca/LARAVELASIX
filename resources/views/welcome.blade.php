@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200 text-center">
                <!-- Títol principal de la landing page -->
                <h1 class="text-4xl font-bold mb-4">Benvingut al Projecte de Laravel</h1>

                <!-- Descripció del projecte -->
                <p class="text-lg text-gray-700 mb-6">
                    Aquesta aplicació web ha estat creada amb Laravel seguint el patró MVC i utilitzant una base de dades SQLite.
                    L'objectiu és gestionar llibres, però es poden afegir altres funcionalitats segons el projecte.
                </p>

                <!-- Botons per navegació (si es vol) -->
                <div class="flex justify-center space-x-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="{{ url('/informacio') }}">
                        Més informació
                    </a>
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('books.index') }}">
                        Explorar aplicació
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
