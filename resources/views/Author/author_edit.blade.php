<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autores</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>
<body>
    
@extends('nav')

<div class="px-100 py-45 sm:ml-80">
    <div style="background-color:white; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div style="background-color:#013C3C;" class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
            <h3 style="color:white"class="text-xl font-semibold text-gray-900">
                Editar Autor
            </h3>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
        <form class="space-y-4" action="{{ route('authors.update', ['author' => $authors->id])}}" method='post'>
                @csrf
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome do Autor<span style="color:red; margin-left:5px;">*</span></label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                          value="{{$authors->nome}}" type="text" id="nome" name="nome" placeholder="Nome"/>
                          <input type="hidden" name="_method" value="PUT">
                    </div>
                    <div>
                    <label for="Descrição" class="block mb-2 text-sm font-medium text-gray-900">Descrição<span style="color:red; margin-left:5px;">*</span></label>
                          <textarea style="height:100px"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                           type="text" id="descricao" name="descricao" placeholder="Descricao">{{$authors->descricao}}</textarea>
                    </div>
                    <button style="background-color:#035353;" type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" id="criar">Editar
                    </button>
                    <a href="{{route('authors.index')}}">
                    <button style="background-color:white; color:black;" type="button" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" id="criar">Voltar
                    </button>
                    </a>
                </form>
        </div>
    </div>
   </div>
</body>
