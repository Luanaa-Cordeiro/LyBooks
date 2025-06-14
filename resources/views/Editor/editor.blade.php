<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editoras</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>

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
               <span class="flex-1 ms-3 whitespace-nowrap">Livros</span>
               <!--<span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ">3</span>-->
            </a>
         </li>
         <li>
            <a href="{{route('editoras.index')}}" class="links_nav flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
           <!--<img src="{{ asset('assets/images/home.png') }}" alt="">-->
               <span class="active flex-1 ms-3 whitespace-nowrap">Editoras</span>
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




    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center">
        <!-- Overlay background (escurecido apenas ao redor do modal) -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Modal content -->
        <div class="relative p-4 w-full max-w-md max-h-full z-10 bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    Criar Editora
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('editoras.store')}}" method="post">
                    @csrf
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome Editora <span style="color:red;">*</span></label>
                        <input name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nome" value='{{old("nome")}}' />
                    </div>
                    <button style="background-color:#035353;" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Criar</button>
                </form>
            </div>
        </div>
    </div>


    <div class="p-4 sm:ml-80">
        <div class="tabela p-4 border-2 border-gray-200 border-dashed rounded-lg mt-25">

            <div class="topo">
                <h1>Editoras!</h1>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">Adicionar</button>
            </div>

            @if(session()->has('message'))
            <div id="alert" class=" my-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">

                <span class="block sm:inline"> {{ session()->get('message') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endif

            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">{{ $error }}</strong>
                <span onclick="this.parentElement.remove()" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endforeach
            @endif


            <div class="mt-4">
    @if($editoras->isEmpty())
        <div class="text-center text-gray-500 text-lg font-medium rounded p-4">
            Nenhuma Editora cadastrado ainda.
        </div>
    @else
            <div class="  mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($editoras as $editora)
                <div style="background-color:white;" class="cartao relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-400">
                <div class="">
                    <a href="#">
                    <div style="background-color:#013C3C;" class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <div class="itens_cartoes">
                            <h5 style="color:white" class="mb-1 text-2xl tracking-tight text-gray-900">{{$editora->nome}}</h5>
                        </div>
                        </div>
                    </a>
                    <p class="px-3 pt-3 mb-3 font-normal text-gray-700">ID: {{$editora->id}}</p>
                    <div class="botao_tab mb-5 mr-5 flex gap-2">
                    <a href="{{ route('editoras.edit', ['editor' => $editora->id]) }}"><button class="editar">Editar</button></a>
                    <form class="inline" action="{{ route('editoras.destroy', ['editor' => $editora->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta editora?');">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="deletar text-red-600 hover:text-red-800">Excluir</button>
                                </form>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
            @endif
            </div>





            <script>
                //Modal
                document.addEventListener('DOMContentLoaded', () => {
                    const modal = document.getElementById('authentication-modal');
                    const openModalButton = document.querySelector('[data-modal-target="authentication-modal"]');
                    const closeModalButton = document.querySelector('[data-modal-hide="authentication-modal"]');

                    // Abrir o modal
                    openModalButton.addEventListener('click', () => {
                        modal.classList.remove('hidden'); // Exibe o modal
                    });

                    // Fechar o modal
                    closeModalButton.addEventListener('click', () => {
                        modal.classList.add('hidden'); // Esconde o modal
                    });

                    // Fechar o modal ao clicar fora dele

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