@extends('welcome')
@section('contenido')
<!--CONTENIDO DE LA PAGINA-->
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">RUTAS EN LARABEL 8</h2>

          <p>Es el concepto de configurar URI como por ejemplo http://localhost:8000/hello . Las rutas podemos encontrarlas en el directorio llamado route Por defecto tenemos dos archivos de rutas web.php y api.php , cada archivo expresan en su nombre para cual es su definicion.

            Dentro del archivo web.php podemos observar el siguiente codigo:</p>
          <hr>
          <p>Route::get('/', function(){ <br>
            return view('welcome');<br>
            });<br>
            </p>
         <h2>Verbos en rutas </h2>
          <p>Puedes haber notado que estamos utilizando Route::get en nuestra definicion de ruta, aqui estamos diciendole a Laravel que solo y unicamente compara con la ruta cuando la accion de la peticion HTTP sea GET. Laravel nos permite configurar otras opciones de verbos.</p>
          <ul>
            <li>Route::get('/', function () { return 'Hello, World!';});</li>
            <li>Route::post('/', function () {});</li>
            <li>Route::put('/', function () {});</li>
            <li>Route::delete('/', function () {});</li>
            <li>Route::any('/', function () {})</li>
            <li>Route::match(['get', 'post'], '/', function () {});</li>

          </ul>
          <p>En este caso para la creacion de nuestras rutas utilizamos GET</p>
          <img src="img/a5.jpg" style="width: 600px; height: 250px;">
          </div><!-- /.blog-post -->






      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Archivos de Rutas por defecto</h4>
          <img src='img/rutt.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Todas las rutas de Laravel se definen en los archivos que se encuentran en la carpeta routes. El framework carga estos archivos de forma automática. El archivo routes/web.php define las rutas para la interfaz web. A estas rutas se les asigna el grupo de middleware web, el cual proporciona algunas características como el estado de la sesión y la protección CSRF. Las rutas en routes/api.php no tienen estado y se les asigna el grupo de middleware api.</p>
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
@endsection
