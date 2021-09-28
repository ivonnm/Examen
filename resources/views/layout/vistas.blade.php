@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">VISTAS EN LARAVEL 8</h2>
        <h3>Qué es una vista?</h3>
          <p>Archivo con extension php que contiene la estructura html, su diseño es en css y js</p>
          <img src="img/a.jpg" style="width: 300px; height: 400px;">
          <ul>
            <li>Las rutas de las vistas se encuentran en resources/views</li>
          </ul>
          <p>Qué es una ruta?</p>
          <ul>
            <li>Es un archivo de configuracion con extension php</li>
            <li>Las rutas se encuentran en el archivo routes</li>
            <li>Las rutas pueden ser de tipo get, post, put</li>
          </ul>
          <p>Como llamar a una vista?</p>
          <ul>
            <li>Estas vistas se llaman desde el archivo routes/web</li>
            <li>Ejemplo</li>
            <img src="img/rut.jpg" style="width: 800px; height: 450px;">
            <li>Las rutas pueden ser de tipo get, post, put</li>
          </ul>
           </div><!-- /.blog-post -->
</div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">vista</h4>
          <img src='img/im.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Las vistas en Laravel son la parte pública que el usuario de nuestro sistema va a poder ver, se escriben en HTML junto con un motor de plantillas llamado Blade.</p>
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
