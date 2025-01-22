@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Edit Cotxe</h2>
                <form action="{{ route('cotxes.update', $cotxe->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700">Marca:</label>
                        <input type="text" name="brand" id="brand" value="{{ $cotxe->brand }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="model" class="block text-gray-700">Model:</label>
                        <input type="text" name="model" id="model" value="{{ $cotxe->model }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="any_fabricacio" class="block text-gray-700">Any de fabricació:</label>
                        <input type="number" name="any_fabricacio" id="any_fabricacio" value="{{ $cotxe->year }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <!-- Afegit el camp de Preu -->
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700">Preu:</label>
                        <input type="number" name="price" id="price" value="{{ $cotxe->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <!-- Camp Categoria -->
                    <div class="mb-4">
                        <label for="categoria" class="block text-gray-700">Categoria:</label>
                        <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Update Cotxe</button>
                        <a class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('cotxes.index') }}">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
