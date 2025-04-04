
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <title>Início</title>
</head>
<body>
@extends('nav')
<div class="cartoes sm:ml-64">
   <div  style="background-color:#D09953;" class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-20">
   <div class=" cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Livros</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/abra-o-livro.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: 0</p>
        <div class="botao_home">
        <a href="{{route('dashboard')}}">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>

<div class="cartoes sm:ml-64">
   <div style="background-color:#D09953;"  class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-14">
   <div class="cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Editoras</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/editora.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: {{ $total_editoras }}</p>
        <div class="botao_home">
        <a href="{{route('editoras.index')}}">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>

<div class="cartoes sm:ml-64">
   <div style="background-color:#D09953;"  class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-14">
   <div class="cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Autores</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/autores.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: 0</p>
        <div class="botao_home">
        <a href="{{route('dashboard')}}">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>

<div class="cartoes sm:ml-64">
   <div style="background-color:#D09953;"  class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-14">
   <div class="cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Linguagens</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/idiomas.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: {{ $total_languages }}</p>
        <div class="botao_home">
        <a href="{{route('languages.index')}}">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>

<div class="cartoes sm:ml-64">
   <div style="background-color:#D09953;"  class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-14">
   <div class="cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Gêneros</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/fantasma.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: {{ $total_generos }}</p>
        <div class="botao_home">
        <a href="{{route('generos.index')}}">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>

<div class="cartoes sm:ml-64">
   <div style="background-color:#D09953;"  class="p-3 border-2 border-gray-600 border-dashed rounded-lg mt-14">
   <div class="cartao relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-5">
        <a href="#">
            <div class="itens_cartoes"> 
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Alugados</h5>
            <img class="rounded-t-lg" src="{{ asset('assets/images/abra-o-livro.png') }}" alt="" />
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">Quantidade: 0</p>
        <div class="botao_home">
        <a href="#">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg">Conferir
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
        </a>
        </div>
    </div>
</div>
</div>
</div>


</body>
</html>