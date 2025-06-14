<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Modal content -->
        <div class="relative p-4 w-full max-w-md max-h-full z-10 bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">Criar Livro</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" id="book-form">
                    @csrf

                    <!-- Imagem -->
                    <div>
                        <label for="image_path" class="block mb-2 text-sm font-medium text-gray-900">Imagem do Livro <span style="color:red;">*</span></label>
                        <input type="file" name="image_path" id="image_path" required
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <span id="image_path-error" class="text-red-600 text-sm hidden mt-1">Escolha uma imagem</span>
                    </div>

                    <!-- Nome do livro -->
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome do Livro <span style="color:red;">*</span></label>
                        <input name="nome" id="nome" required
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Nome do livro" />
                        <span id="nome-error" class="text-red-600 text-sm hidden mt-1">Digite o nome do livro</span>
                    </div>

                    <!-- Autor -->
                    <div>
                        <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900">Autor <span style="color:red;">*</span></label>
                        <select name="author_id" id="author_id"
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="">Selecione um autor</option>
                            @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->nome }}</option>
                            @endforeach
                        </select>
                        <span id="author_id-error" class="text-red-600 text-sm hidden mt-1">Selecione um autor</span>
                    </div>

                    <!-- Linguagem -->
                    <div>
                        <label for="language_id" class="block mb-2 text-sm font-medium text-gray-900">Linguagem <span style="color:red;">*</span></label>
                        <select name="language_id" id="language_id"
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="">Selecione uma linguagem</option>
                            @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->idioma }}</option>
                            @endforeach
                        </select>
                        <span id="language_id-error" class="text-red-600 text-sm hidden mt-1">Selecione uma linguagem</span>
                    </div>

                    <!-- Gênero -->
                    <div>
                        <label for="genero_id" class="block mb-2 text-sm font-medium text-gray-900">Gênero <span style="color:red;">*</span></label>
                        <select name="genero_id" id="genero_id"
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="">Selecione um gênero</option>
                            @foreach($generos as $genero)
                            <option value="{{ $genero->id }}">{{ $genero->nome }}</option>
                            @endforeach
                        </select>
                        <span id="genero_id-error" class="text-red-600 text-sm hidden mt-1">Selecione um gênero</span>
                    </div>

                    <!-- Editora -->
                    <div>
                        <label for="editor_id" class="block mb-2 text-sm font-medium text-gray-900">Editora <span style="color:red;">*</span></label>
                        <select name="editor_id" id="editor_id"
                            class="input-validate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="">Selecione uma editora</option>
                            @foreach($editoras as $editor)
                            <option value="{{ $editor->id }}">{{ $editor->nome }}</option>
                            @endforeach
                        </select>
                        <span id="editor_id-error" class="text-red-600 text-sm hidden mt-1">Selecione uma editora</span>
                    </div>

                    <!-- Botão -->
                    <div class="flex justify-end">
                        <button style="background-color:#035353;" type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Criar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="p-4 sm:ml-90">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-25">

            <!-- Mensagens -->
            @if(session()->has('message'))
            <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
                <span class="block sm:inline"> {{ session()->get('message') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endif


            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 mt-4">
                <strong class="font-bold">{{ $error }}</strong>
                <span onclick="this.parentElement.remove()" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                    <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endforeach
            @endif


            <!-- Lista de livros -->
            <div class="sticky top-[120px] z-30 py-10"> <!-- mesma altura da navbar -->
                <div class="main flex justify-between items-center">
                    <div class="title">
                        <h1 class="text-2xl font-semibold">Livros</h1>
                    </div>
                    <div class="id">
                        <span>ID</span>
                    </div>
                    <div class="genero">
                        <span>Gêneros</span>
                    </div>
                    <div class="adicionar">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" text-white px-5 py-2.5 rounded-lg">Adicionar</button>
                    </div>
                </div>
                <hr class="mt-2">
            </div>

            <div id="scrollContainer" style="height: 500px; overflow-y: auto;">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                    <!-- livros -->
                    @foreach($books as $book)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between w-full h-[500px] overflow-hidden">
                        <a href="#">
                            <img src="{{ asset($book->image_path) }}"
                                class="w-full h-90 object-cover rounded-t-lg"
                                alt="Imagem do livro">
                        </a>
                        <div class="px-5 pb-1 mt-2 flex flex-col justify-between flex-1">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{$book->nome}}</h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-3">
                                <span>Avaliação: 4/5</span>
                            </div>
                            <div class="mb-5 flex justify-end gap-2">
                                <a href="{{ route('books.edit', ['book' => $book->id]) }}"><button style="background-color:green;" class="editar">Editar</button></a>
                                <a href="{{ route('books.show', ['book' => $book->id]) }}"><button style="background-color:#035353;" class="deletar">Mostrar</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    </div>

    <nav class="fixed top-0 w-full z-50 navs">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class=" teste flex items-center justify-start rtl:justify-end">
                    <div class="search">
                        <img src="{{ asset('assets/images/lupa.png') }}" alt="">
                        <span>Pesquisar..</span>
                    </div>

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
        // Seleciona o botão e o menu dropdown
        const menuButton = document.getElementById('menu-button');
        const dropdownMenu = document.getElementById('dropdown-menu');




        // Evento para abrir e fechar o menu
        menuButton.addEventListener('click', function(event) {
            event.stopPropagation();
            // Alterna a classe 'hidden' para mostrar/ocultar o menu
            dropdownMenu.classList.toggle('hidden');

            // Atualiza o atributo 'aria-expanded' para true ou false
            const isExpanded = dropdownMenu.classList.contains('hidden');
            menuButton.setAttribute('aria-expanded', !isExpanded);
        });




        // Fechar o menu se clicar fora dele
        window.addEventListener('click', function(event) {
            if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });


        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('authentication-modal');
            const openModalButton = document.querySelector('[data-modal-target="authentication-modal"]');
            const closeModalButton = document.querySelector('[data-modal-hide="authentication-modal"]');

            openModalButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });


            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });


            const closeButton = document.getElementById('close-alert');


            if (closeButton && alertBox) {
                closeButton.addEventListener('click', () => {
                    alertBox.style.display = 'none';
                });
            }
        });



        document.addEventListener('DOMContentLoaded', () => {
            const scrollDiv = document.getElementById('scrollContainer');

            // Garante que está com overflow habilitado
            scrollDiv.style.overflowY = 'auto';
            scrollDiv.style.maxHeight = '500px'; // ou o valor desejado


            // Rolar para o topo
            scrollDiv.scrollTop = 0;

            // Rolar para o final (opcional)
            // scrollDiv.scrollTop = scrollDiv.scrollHeight;
        });

        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('book-form');
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

            inputs.forEach(input => {
                input.addEventListener('blur', () => {
                    const errorSpan = document.getElementById(`${input.id}-error`);
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