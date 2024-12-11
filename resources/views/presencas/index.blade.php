@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-8 bg-gradient-to-r from-blue-600 via-gray-600 to-gray-800 shadow-lg rounded-xl mt-12">
     

        <h1 class="text-4xl font-bold text-gray-200 mb-6 text-center">Lista de Presença</h1>

     

        <div class="flex justify-between items-center mb-6">
           


            <a href="{{ route('presencas.create') }}">
                <button class="px-6 py-3 bg-gray-700 text-gray-100 font-medium rounded-lg shadow-md transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50">
                    Adicionar Participante
                </button>
            </a>

          
            <a href="{{ route('presencas.exportarTxt') }}">
                <button class="px-6 py-3 bg-gray-700 text-gray-100 font-medium rounded-lg shadow-md transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50">
                    Download
                </button>
            </a>
        </div>

        

        <div class="overflow-x-auto bg-gray-800 rounded-xl shadow-lg">
            <table class="min-w-full table-auto text-sm text-gray-100">
              
                <thead class="bg-gray-700 text-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Nome</th>
                        <th class="px-6 py-3 text-left font-semibold">Email</th>
                        <th class="px-6 py-3 text-left font-semibold">Presente</th>
                        <th class="px-6 py-3 text-left font-semibold">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-600">
                    @foreach ($presencas as $presenca)  
                        <tr class="hover:bg-gray-700">
                            <td class="px-6 py-4 text-gray-100">{{ $presenca->nome }}</td>
                            <td class="px-6 py-4 text-gray-100">{{ $presenca->email }}</td>
                            <td class="px-6 py-4 text-gray-100">{{ $presenca->presente ? 'Sim' : 'Não' }}</td>
                            <td class="px-6 py-4 flex space-x-4">
                        
                                <a href="{{ route('presencas.edit', $presenca) }}" class="text-indigo-500 hover:text-indigo-700 transition duration-200 ease-in-out">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                   
                                        <form action="{{ route('presencas.destroy', $presenca) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 transition duration-200 ease-in-out">
                                               <i class="fas fa-trash-alt"></i> Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('styles')
   
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
@endpush
