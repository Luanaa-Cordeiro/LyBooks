<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deletar Autores</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>





  <div class="px-50 py-15 sm:ml-80">
    <div style="background-color:#013C3C;  box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="mt-20 p-4 rounded-lg">
      <div style="background-color:white; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="mostrar m-2 p-4 rounded-lg ">

        <div>
          <img src="{{ asset($books->image_path) }}">
        </div>

        <div class="infos_show">
          <h1 class="text-4xl font-bold text-gray-900">{{$books->nome}}</h1>
          <p class="mb-3 font-normal text-gray-700"><span style="color:black; font-weight: 500;">Autor:</span> {{ $books->author->nome }}</p>
          <p class="mb-3 font-normal text-gray-700"><span style="color:black; font-weight: 500;">Linguagem:</span> {{ $books->language->idioma }}</p>
          <p class="mb-3 font-normal text-gray-700"><span style="color:black; font-weight: 500;">Gênero:</span> {{ $books->genero->nome }}</p>
          <p class="mb-3 font-normal text-gray-700"><span style="color:black; font-weight: 500;">Editora:</span> {{ $books->editor->nome }}</p>


          <div class="delet_volt h-full w-full">
            <form action="{{ route('books.destroy', ['book' => $books->id]) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este livro?');">
              @csrf
              <input type="hidden" name="_method" value="delete">
              <button class="w-full block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">
                Deletar
              </button>
              <a href="{{route('books.index')}}">
                <button style="background-color:white; color:black;" type="button" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" id="criar">Voltar
                </button>
              </a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 bottom-0 z-50 justify-center items-center flex bg-opacity-50">
    <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow">
        <!-- Botão de fechar -->
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="popup-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>

        <div class="p-4 md:p-5 text-center">
          <!-- Ícone do modal -->
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500">Tem certeza que deseja apagar esse autor?</h3>
          <h4 class="mb-5  font-normal text-gray-500">Você apagará tudo relacionado a ele</h4>
          <form action="{{ route('books.destroy', ['book' => $books->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <!-- Botões dentro do modal -->
            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
              Apagar
            </button>

            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancelar</button>
          </form>
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
    //Modal
    document.addEventListener('DOMContentLoaded', () => {
      const modal = document.getElementById('popup-modal');
      const openModalButton = document.querySelector('[data-modal-target="popup-modal"]');
      const closeModalButtons = document.querySelectorAll('[data-modal-hide="popup-modal"]');

      // Ação para abrir o modal
      openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden'); // Exibe o modal
      });

      // Ação para fechar o modal (clicando no botão de fechar ou no botão de cancelamento)
      closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
          modal.classList.add('hidden'); // Esconde o modal
        });
      });

      // Fechar o modal se clicar fora dele
      window.addEventListener('click', (event) => {
        if (event.target === modal) {
          modal.classList.add('hidden'); // Esconde o modal se clicar fora dele
        }
      });
    });


    //Fechar
    // Selecionando o botão de fechar
    const closeButton = document.getElementById('close-alert');
    const alertBox = document.getElementById('alert');

    // Adicionando um evento de clique para fechar o alerta
    closeButton.addEventListener('click', () => {
      alertBox.style.display = 'none'; // Esconde o alerta
    });
  </script>
</body>