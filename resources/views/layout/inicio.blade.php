@extends('welcome')
@section('contenido')
<div class="container">

    <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-ARIAL border-bottom">

            </h3>

            <div class="blog-post">
              <h2 class="blog-post-title">LARABEL</h2>
              <p class="blog-post-meta">Septiembre 27, 2021 <a href="#">Ivonne Avila</a></p>

              <p>Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Un marco web proporciona una estructura y un punto de partida para crear su aplicación, lo que le permite concentrarse en crear algo sorprendente mientras nos preocupamos por los detalles.</p>
              <hr>
              <p>Laravel se esfuerza por proporcionar una experiencia de desarrollador increíble al tiempo que proporciona funciones poderosas como la inyección de dependencias exhaustiva, una capa de abstracción de base de datos expresiva, colas y trabajos programados, pruebas de integración y unidad, y más.</p>

              <h2>Tu primer proyecto Laravel</h2>
              <p>Hay una variedad de opciones para desarrollar y ejecutar un proyecto de Laravel en su propia computadora. Si bien es posible que desee explorar estas opciones más adelante, Laravel proporciona Sail , una solución incorporada para ejecutar su proyecto de Laravel usando Docker .</p>
              <p>Docker es una herramienta para ejecutar aplicaciones y servicios en "contenedores" pequeños y livianos que no interfieren con el software o la configuración instalados en su computadora local. Esto significa que no tiene que preocuparse por configurar o configurar herramientas de desarrollo complicadas como servidores web y bases de datos en su computadora personal. Para comenzar, solo necesita instalar Docker Desktop .</p>
              <p>Laravel Sail es una interfaz de línea de comandos liviana para interactuar con la configuración predeterminada de Docker de Laravel. Sail proporciona un excelente punto de partida para construir una aplicación Laravel usando PHP, MySQL y Redis sin requerir experiencia previa en Docker</p>
              </div><!-- /.blog-post -->



          </div><!-- /.blog-main -->

          <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
              <h4 class="font-italic">¿Comó se creo esta pagina web?</h4>
              <img src='img/im.jpg' class="card-img-top" style="width: 300px; height: 180px;">
              <p class="mb-0"><em>Para crear esta pagina web utilizamos algunos elementos que se describiran en orden en la parte de abajo continua navengando en la pagina..!!</p>
            </div>

            <div class="p-3">
              <h4 class="font-italic">TUTORIAL</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="/instalacion">Instalacion de Larabel 8</a></li>
                <li><a href="/vistas">Vistas en Larabel 8</a></li>
                <li><a href="/vistasblade">Vistas con blade</a></li>
                <li><a href="/rutas">Rutas</a></li>
                <li><a href="/controladores">Controladores</a></li>
                <li><a href="/migracion">Migraciones de BD</a></li>
              </ol>
            </div>
          </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

      </main><!-- /.container -->
</div>
@endsection
