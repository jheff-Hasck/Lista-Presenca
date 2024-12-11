@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-gray-700 shadow-xl rounded-lg mt-8 border border-gray-200">
        <h1 class="text-3xl font-semibold text-white mb-8 text-center">Editar Participante</h1>

        <form action="{{ route('presencas.update', $presenca) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="nome" class="block text-sm font-medium text-gray-200">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $presenca->nome }}" required 
                       class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-sm text-gray-900">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input type="email" name="email" id="email" value="{{ $presenca->email }}" required 
                       class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none sm:text-sm text-gray-900">
            </div>

            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-200">Presente</label>
                <div class="flex items-center space-x-8">
                    <div class="flex items-center">
                        <input type="radio" name="presente" id="presente_sim" value="1" required 
                               class="h-5 w-5 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-500"
                               {{ $presenca->presente == 1 ? 'checked' : '' }}>
                        <label for="presente_sim" class="ml-2 text-sm text-gray-200">Sim</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="presente" id="presente_nao" value="0" required 
                               class="h-5 w-5 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-500"
                               {{ $presenca->presente == 0 ? 'checked' : '' }}>
                        <label for="presente_nao" class="ml-2 text-sm text-gray-200">Não</label>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" 
                        class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
@endsection
