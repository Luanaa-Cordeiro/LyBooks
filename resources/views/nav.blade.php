
<nav class="fixed top-0 left-0 z-50 ">
           <div class="flex">
        <aside>
            <div class="navs">
                <div class="logo">
                <img src="Logo.png" alt="">
            </div>
                <h1>LyBooks</h1>
                <ul>
                    <li >Início</li>
                    <li class="ativo">Livros</li>
                    <li>Autores</li>
                    <li>Editoras</li>
                    <li>Gêneros</li>
                    <li>Idiomas</li>
                    <li>Alugados</li>
                </ul>
            </div>
        </aside>
    
        <div class="flex-1 ml-10 p-6">
            <!--Pesquisa e Perfil-->
            <div class="navbars">
                <div class="pesquisa">
                    <span>Pesquisar</span>
                </div>

                <div class="perfil">
                    <div class="name"> {{ auth()->user()->name }}</div>
                    <div class="foto"></div>
                </div>
            </div> 
       

  </div>


