@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Edit Book</h2>
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nom:</label>
                        <input type="text" name="name" id="name" value="{{ $book->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700">Autor:</label>
                        <input type="text" name="author" id="author" value="{{ $book->author }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="releaseYear" class="block text-gray-700">Any de publicació:</label>
                        <input type="number" name="releaseYear" id="releaseYear" value="{{ $book->releaseYear }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <!-- Afegit el camp de Vendes -->
                    <div class="mb-4">
                        <label for="vendes" class="block text-gray-700">Vendes:</label>
                        <input type="number" name="vendes" id="vendes" value="{{ $book->vendes }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <!-- Afegit el camp de Categoria -->
                    <div class="mb-4">
                        <label for="categoria" class="block text-gray-700">Categoria:</label>
                        <input type="text" name="categoria" id="categoria" value="{{ $book->categoria }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Update Book</button>
                        <a class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('books.index') }}">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
