<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>
    <div class="py-40 px-100 sm:ml-80">

        <div style="background-color:white; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div style="background-color:#013C3C;" class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 style="color:white" class="text-xl font-semibold text-gray-900">Editar Livro</h3>
            </div>

            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">{{ $error }}</strong>
                <span onclick="this.parentElement.remove()" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                    <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endforeach
            @endif

            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome do Livro <span class="text-red-600">*</span></label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome', $book->nome) }}"
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                        <span id="nome-error" class="text-red-600 text-sm hidden mt-1">Digite o nome do livro</span>
                    </div>

                    <!-- Autor -->
                    <div>
                        <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900">Autor <span style="color:red; margin-left:2px;">*</span></label>
                        <select name="author_id" id="author_id" class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                            <option value="">Selecione um autor</option>
                            @foreach($authors as $author)
                            <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                                {{ $author->nome }}
                            </option> @endforeach
                        </select>
                         <span id="author_id-error" class="text-red-600 text-sm hidden mt-1">Selecione um autor</span>
                    </div>

                    <!-- Linguagem -->
                    <div>
                        <label for="linguagem_id" class="block mb-2 text-sm font-medium text-gray-900">Linguagem <span style="color:red; margin-left:2px;">*</span></label>
                        <select name="language_id" id="language_id" class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                            <option value="">Selecione uma linguagem</option>
                            @foreach($languages as $language)
                            <option value="{{ $language->id }}" {{ $book->language_id == $language->id ? 'selected' : '' }}>{{ $language->idioma }}</option>
                            @endforeach
                        </select>
                        <span id="language_id-error" class="text-red-600 text-sm hidden mt-1">Selecione uma linguagem</span>
                    </div>

                    <!-- Gênero -->
                    <div>
                        <label for="genero_id" class="block mb-2 text-sm font-medium text-gray-900">Gênero <span style="color:red; margin-left:2px;">*</span></label>
                        <select name="genero_id" id="genero_id" class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                            <option value="">Selecione um gênero</option>
                            @foreach($generos as $genero)
                            <option value="{{ $genero->id }}" {{ $book->genero_id == $genero->id ? 'selected' : '' }}>{{ $genero->nome }}</option>
                            @endforeach
                        </select>
                        <span id="genero_id-error" class="text-red-600 text-sm hidden mt-1">Selecione um gênero</span>
                    </div>

                    <!-- Editora -->
                    <div>
                        <label for="editor_id" class="block mb-2 text-sm font-medium text-gray-900">Editora <span style="color:red; margin-left:2px;">*</span></label>
                        <select name="editor_id" id="editor_id" class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                            <option value="">Selecione uma editora</option>
                            @foreach($editoras as $editor)
                            <option value="{{ $editor->id }}" {{ $book->editor_id == $editor->id ? 'selected' : '' }}>{{ $editor->nome }}</option>
                            @endforeach
                        </select>
                        <span id="editor_id-error" class="text-red-600 text-sm hidden mt-1">Selecione uma editora</span>
                    </div>

                    <!-- Botões -->
                    <button type="submit" style="background-color:#035353;" class="w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>

                    <a href="{{ route('books.index') }}">
                        <button type="button" style="background-color:white; color:black;" class="w-full font-medium rounded-lg text-sm px-5 py-2. text-center">Voltar</button>
                    </a>
                </form>

            </div>
        </div>

    </div>

    <nav class="fixed top-0 w-full z-50 navs">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>

                </div>
                <div class="relative inline-block text-left flex-direction:row">
                    <div style="margin-right:20px">
                        <button style="margin-right:70px; margin-top:50px; color:black; background-color:white; width:150px" type="button" class="drop inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ auth()->user()->name }}
                            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>




                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden hidden" id="dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">

                            <form method="POST" action="{{ route('logout') }}" role="none">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Sair</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>




    <aside id="logo-sidebar" class="sides fixed top-0 z-40 w-80 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
        <div class=" side px-5 pb-4 overflow-y-auto ">

            <ul class="space-y-2 font-medium">
                <li>
                    <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="">
                    <h1 style="color:white; margin-top:15px;">LyBooks</h1>
                </li>
                <li>
                <li>
                    <a href="{{route('dashboard')}}" class=" links_nav flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="ms-3">Início</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('books.index')}}" class=" links_nav flex items-center p-2 text-gray-900 rounded-lg  hover:bg-white group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="active flex-1 ms-3 whitespace-nowrap">Livros</span>
                        <!--<span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ">3</span>-->
                    </a>
                </li>
                <li>
                    <a href="{{route('editoras.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="flex-1 ms-3 whitespace-nowrap">Editoras</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('authors.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="flex-1 ms-3 whitespace-nowrap">Autores</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('languages.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="flex-1 ms-3 whitespace-nowrap">Linguagens</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('generos.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="flex-1 ms-3 whitespace-nowrap">Gêneros</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('alugueis.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
                        <span class="flex-1 ms-3 whitespace-nowrap">Alugados</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('.input-validate');

       
        form.addEventListener('submit', (e) => {
            let isValid = true;

            inputs.forEach(input => {
                const errorSpan = document.getElementById(`${input.id}-error`);
                const value = input.value.trim();

                if (!value) {
                    isValid = false;
                    input.classList.remove('border-gray-300', 'border-green-500');
                    input.classList.add('border-red-500');
                    errorSpan?.classList.remove('hidden');
                } else {
                    input.classList.remove('border-gray-300', 'border-red-500');
                    input.classList.add('border-green-500');
                    errorSpan?.classList.add('hidden');
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });

        // Validação ao sair do campo (blur) e em tempo real (input)
        inputs.forEach(input => {
            const errorSpan = document.getElementById(`${input.id}-error`);

            // blur = quando sai do campo
            input.addEventListener('blur', () => {
                const value = input.value.trim();

                if (!value) {
                    input.classList.remove('border-gray-300', 'border-green-500');
                    input.classList.add('border-red-500');
                    errorSpan?.classList.remove('hidden');
                } else {
                    input.classList.remove('border-gray-300', 'border-red-500');
                    input.classList.add('border-green-500');
                    errorSpan?.classList.add('hidden');
                }
            });

           
            input.addEventListener('input', () => {
                const value = input.value.trim();

                if (!value) {
                    input.classList.remove('border-gray-300', 'border-green-500');
                    input.classList.add('border-red-500');
                    errorSpan?.classList.remove('hidden');
                } else {
                    input.classList.remove('border-gray-300', 'border-red-500');
                    input.classList.add('border-green-500');
                    errorSpan?.classList.add('hidden');
                }
            });
        });
    });
</script>

</body>

</html>