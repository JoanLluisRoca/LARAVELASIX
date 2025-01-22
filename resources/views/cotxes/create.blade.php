@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Add New Car</h2>

                <!-- Mostrar els missatges d'error -->
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('cotxes.store') }}" method="POST">
                    @csrf

                    <!-- Camp de Marca -->
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700">Marca:</label>
                        <input type="text" name="brand" id="brand" placeholder="Marca" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <!-- Camp de Model -->
                    <div class="mb-4">
                        <label for="model" class="block text-gray-700">Model:</label>
                        <input type="text" name="model" id="model" placeholder="Model" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <!-- Camp Any de fabricació -->
                    <div class="mb-4">
                        <label for="any_fabricacio" class="block text-gray-700">Any de fabricació:</label>
                        <input type="number" name="any_fabricacio" id="any_fabricacio" placeholder="Any de fabricació" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <!-- Camp Preu -->
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700">Preu:</label>
                        <input type="number" name="price" id="price" placeholder="Preu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <!-- Camp Categoria -->
                    <div class="mb-4">
                        <label for="categoria" class="block text-gray-700">Categoria:</label>
                        <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <!-- Botons d'Acció -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Add Car</button>
                        <a href="{{ route('cotxes.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
