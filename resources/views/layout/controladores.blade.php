@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">CONTROLADORES EN LARABEL 8</h2>

          <p>Los controladores pueden agrupar la lógica de gestión de peticiones relacionadas en una única clase. Estos controladores se encuentran normalmente en el directorio app/Http/Controllers.</p>
          <hr>
            <h2>Genera un controlador</h2>
          <p>Para generar un nuevo controlador con el comando: <br> artisan make:controller pasandole el nombre que queremos darle. En el ejemplo el nombre es vistasController</p>
          <p>php artisan make:controller VistasController</p>
          <p>Una vez ejecutado el comando, en el directorio app/Htttp/Controllers tendremos nuestro controlador</p>
          <p>VistasController</p>
          <img src='img/a6.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p>En este caso se creo un controlador para cada vista</p>
          <p>Dentro de los controladores creamos funciones para invocar a nuestra vista en este caso para invocar a la vista principal se usa invoque y retornamos la vista que ira al principio en este caso es mi vista llamada inicio</p>
          <img src='img/a7.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p>Para las vistas secundarias solo se agrega la funcion su nombre y se retorna a la vista que deseamos en este caso ya no usamos invoque</p>
          <img src='img/a8.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <img src='img/a9.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <h3>Enlazar una ruta a un controlador</h3>
          <p>Para enlazar una ruta a un controlador pasamos como argumento el nombre del controlador y del metodo que queremos enlazar, separados por una coma , en este caso queremos enlazar la ruta /instalacion al controlador InstalacioControlle</p>
          <p>En este caso asociaremos todas las rutas de nuestro proyecto a su respectivo controlador, esto se realiza en el apartado de web.php</p>
          <img src='img/aa.jpg' class="card-img-top" style="width: 600px; height: 350px;">
      </div><!-- /.blog-post -->





      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Controladores</h4>
          <img src='img/aaa.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Los controladores son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas y de esta forma organizar mejor nuestro código. En esta quinta lección del Curso de Laravel desde cero aprenderemos a hacer uso de ellos y veremos además cómo las pruebas unitarias nos permiten verificar los cambios que introducimos en nuestro código de forma fácil y rápida.
        </p>
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
