
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <title>Início</title>
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
               <span class="active  ms-3">Início</span>
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


<div class="cartoes sm:ml-90">
   <div class="p-3 rounded-lg mt-35">
   <div class="relative overflow-x-auto  sm:rounded-lg">
        <h1>Bem-Vindo(a) {{ auth()->user()->name }}!</h1>
    </div>
</div>
</div>

<div class=" sm:ml-90">
   <div class="p-3 rounded-lg mt-5">
   <div class=" dash  relative overflow-x-auto  sm:rounded-lg">

      <div class="graficos">
            

<div class=" grafic p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

    <div class="grafic_pizza">
        
<div style="height:450px" class="max-w-sm w-full bg-white rounded-lg shadow-sm p-4 md:p-6">

<div class="flex justify-between items-start w-full">
    <div class="flex-col items-center">
      <div class="flex items-center mb-1">
          <h5 class="text-xl font-bold leading-none text-gray-900 me-1">Livros</h5>
          <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
          </svg>
          <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
              <div class="p-3 space-y-2">
                  <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                  <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                  <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                  <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                  <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg></a>
          </div>
          <div data-popper-arrow></div>
      </div>
    </div>
    <div id="dateRangeDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
        <div class="p-3" aria-labelledby="dateRangeButton">
          <div date-rangepicker datepicker-autohide class="flex items-center">
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date">
              </div>
              <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End date">
            </div>
          </div>
        </div>
    </div>
  </div>

</div>

<!-- Line Chart -->
<div class="py-6" id="pie-chart"></div>


</div>
    </div>


<div class="infos_main">

<div class="info1">
<div  style=" height: 210px;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <div style=" display:flex; flex-direction:row; ">
    <a href="{{route('languages.index')}}">
        <h5 style="color:black; margin-right:10px" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Idiomas</h5>
    </a>
    <img class="rounded-t-lg w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" src="{{ asset('assets/images/idiomas.png') }}" alt="" >
    </div>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_languages}}</p>
</div>
</div>

<div class="info2">
<div  style=" height: 210px; ; " class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
<div style=" display:flex; flex-direction:row; ">
    <a href="">
        <h5 style="color:black; margin-right:10px" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Usuários</h5>
    </a>
    <img class="rounded-t-lg w-7 h-7 text-gray-500 mb-3" src="{{ asset('assets/images/pessoa.png') }}" alt="" >
    </div>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_user }}</p>
</div>
</div>

</div>

</div>
      </div>

      <div>
        <div class="tabelas">
            <div class="liv_gen">
            <div style="height: 150px; margin: 0px 10px; width: 350px; background-color:#027373;" class=" liv_ge max-w-sm p-6 bg-white rounded-lg shadow-sm">
            <img class="rounded-t-lg w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" src="{{ asset('assets/images/abra-o-livro.png') }}" alt="" >
    <a href="{{route('books.index')}}">
        <h5 style="color:white;" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Livros</h5>
    </a>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_book }} </p>
</div>



<div style="height: 150px; width: 350px;margin: 0px 10px; background-color:#FFB400;" class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
    <img class="rounded-t-lg w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" src="{{ asset('assets/images/fantasma.png') }}" alt="" >
    <a href="{{route('generos.index')}}">
    <h5 style="color:white;" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Gêneros</h5>
    </a>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_generos }}</p>
</div>

            </div>

            <div class="aut_edit">


            <div  style="height: 150px; width: 350px; margin: 10px 10px; background-color:#E63946; "  class="max-w-sm p-6 bg-white rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" src="{{ asset('assets/images/editora.png') }}" alt="" >
    <a href="{{route('editoras.index')}}">
        <h5 style="color:white;" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Editoras</h5>
    </a>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_editoras }}</p>
</div>



<div  style="height: 150px; width: 350px;margin: 10px 10px; background-color:#F2542D ; " class="max-w-sm p-6 bg-white rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-t-lg w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" src="{{ asset('assets/images/autores.png') }}" alt="" >
    <a href="{{route('authors.index')}}">
        <h5 style="color:white;" class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Autores</h5>
    </a>
    <p class="mb-3 font-normal text-black-500">Quantidade: {{ $total_authors }}</p>
</div>

            </div>
            
        </div>

        <div class="info">
        
<div class=" p-9 bg-white border border-gray-200 rounded-lg shadow-sm">
    <span style="font-size: 40px">{{ $total_aluguel }}</span>
    <p class="mb-3 font-normal text-black-500">Alugados</p>
</div>

        </div>
      </div>



    </div>
</div>
</div>

<script>
    
const getChartOptions = () => {
  return {
    series: [52.8, 26.8, 20.4],
    colors: ["#1C64F2", "#16BDCA", "#9061F9"],
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    stroke: {
      colors: ["white"],
      lineCap: "",
    },
    plotOptions: {
      pie: {
        labels: {
          show: true,
        },
        size: "100%",
        dataLabels: {
          offset: -25
        }
      },
    },
    labels: ["Terror", "Fantasia", "Romance"],
    dataLabels: {
      enabled: true,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "%"
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "%"
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
  chart.render();
}

</script>

</body>
</html>