@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200 text-center">
                <!-- Títol principal de la landing page -->
                <h1 class="text-4xl font-bold mb-4">Benvingut al Projecte de Laravel</h1>

                <!-- Descripció del projecte -->
                <p class="text-lg text-gray-700 mb-6">
                    Aquest projecte és una aplicació web creada amb <strong>Laravel</strong>, un potent framework de PHP, utilitzant el patró de disseny MVC (Model-View-Controller). L'objectiu és desenvolupar una plataforma de gestió de llibres que permeti fer operacions CRUD (Crear, Llegir, Actualitzar i Eliminar) sobre una base de dades SQLite.
                </p>

                <!-- Objectius del projecte -->
                <h2 class="text-2xl font-semibold mb-4">Objectius del Projecte</h2>
                <p class="text-lg text-gray-700 mb-6">
                    L'objectiu principal d'aquest projecte és aprendre a utilitzar Laravel en la creació d'aplicacions web, seguint el patró MVC, i implementar una aplicació funcional per a gestionar llibres. El projecte inclou les següents funcionalitats:
                </p>
                <ul class="list-disc pl-6 mb-6 text-gray-700">
                    <li>Crear i gestionar llibres (CRUD complet)</li>
                    <li>Utilitzar base de dades SQLite per emmagatzemar informació</li>
                    <li>Crear rutes i vistes dinàmiques amb Blade</li>
                    <li>Crear components reutilitzables per a la navegació (Navbar) i informació del creador (Footer)</li>
                    <li>Desenvolupar una aplicació responsive per a diferents dispositius</li>
                </ul>

                <!-- Descripció del Flux del Projecte -->
                <h2 class="text-2xl font-semibold mb-4">Flux del Projecte</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Aquest projecte es compon de tres pàgines principals:
                </p>
                <ul class="list-disc pl-6 mb-6 text-gray-700">
                    <li><strong>Pàgina Principal</strong>: Una landing page que explica el projecte i mostra opcions per navegar a les altres seccions.</li>
                    <li><strong>CRUD de Llibres</strong>: Un sistema de gestió de llibres on es poden afegir, editar, eliminar i veure llibres existents.</li>
                    <li><strong>CRUD Personalitzat</strong>: Una secció on es pot implementar un CRUD per a qualsevol altra temàtica relacionada amb els llibres, com per exemple autors, editorials, etc.</li>
                </ul>

                <!-- Botons per navegació -->
                <div class="flex justify-center space-x-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('books.index') }}">
                        Explorar aplicació
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
