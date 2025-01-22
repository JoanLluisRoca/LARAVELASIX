@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">CRUD de Cotxes</h2>
                <div class="flex justify-end mb-4">
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('cotxes.create') }}">Add Cotxe</a>
                </div>
                <div class="overflow-x-auto">
                    <div class="hidden md:block">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marca</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Any de fabricació</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preu</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">categoria</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($cotxes as $cotxe)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-gray-900"><a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.show', $cotxe->id) }}">{{ $cotxe->id }}</a></td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $cotxe->brand }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $cotxe->model }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $cotxe->any_fabricacio }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $cotxe->price }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $cotxe->categoria }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-2">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.edit', $cotxe->id) }}">Edit</a>
                                        <a class="ml-2 bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.delete', $cotxe->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="block md:hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse($cotxes as $cotxe)
                                <li class="py-4 flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.show', $cotxe->id) }}">ID: {{ $cotxe->id }}</a>
                                        <div class="flex space-x-2">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.edit', $cotxe->id) }}">Edit</a>
                                            <a class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('cotxes.delete', $cotxe->id) }}">Delete</a>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900"><strong>Marca:</strong> {{ $cotxe->brand }}</p>
                                        <p class="text-sm text-gray-900"><strong>Model:</strong> {{ $cotxe->model }}</p>
                                        <p class="text-sm text-gray-900"><strong>Any de fabricació:</strong> {{ $cotxe->any_fabricacio }}</p>
                                        <p class="text-sm text-gray-900"><strong>Preu:</strong> {{ $cotxe->price }}</p>
                                        <p class="text-sm text-gray-900"><strong>Categoria:</strong> {{ $cotxe->categoria }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
