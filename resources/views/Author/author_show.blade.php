
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
    
@extends('nav')



<div class="px-50 py-15 sm:ml-80">
<div style="background-color:#013C3C;  box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="mt-20 p-4 rounded-lg">
   <div style="background-color:white; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.267);" class="mostrar m-2 p-4 rounded-lg ">
      
   <div>
   <img src="{{ asset('assets/images/pessoa.png') }}" alt="">
   </div>

   <div class="infos_show">
   <h1 class="text-4xl font-bold text-gray-900">{{$authors->nome}}</h1>
   <p><span style="color:black; font-weight: 500;">Descrição:</span> {{$authors->descricao}}</p>

   <div class="delet_volt h-full w-full">
   <form action="{{ route('authors.destroy', ['author' => $authors->id]) }}" method="post"  onsubmit="return confirm('Tem certeza que deseja excluir este autor?');">
    @csrf
    <input type="hidden" name="_method" value="delete">
   <button class="w-full block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">
    Deletar
</button>
<a href="{{route('authors.index')}}">
                    <button style="background-color:white; color:black;" type="button" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" id="criar">Voltar
                    </button>
                    </a>
                    </form>
                    </div>
   </div>

   </div>
</div>
</div>


<script>

        //Modal
        document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('popup-modal');
        const openModalButton = document.querySelector('[data-modal-target="popup-modal"]');
        const closeModalButtons = document.querySelectorAll('[data-modal-hide="popup-modal"]');

        // Ação para abrir o modal
        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');  // Exibe o modal
        });

        // Ação para fechar o modal (clicando no botão de fechar ou no botão de cancelamento)
        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                modal.classList.add('hidden');  // Esconde o modal
            });
        });

        // Fechar o modal se clicar fora dele
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');  // Esconde o modal se clicar fora dele
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
