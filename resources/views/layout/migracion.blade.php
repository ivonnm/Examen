@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">Migracion de una Base de Datos</h2>

          <p>Las migraciones son como un control de versiones para su base de datos, lo que le permite a su equipo definir y compartir la definición del esquema de la base de datos de la aplicación. Si alguna vez ha tenido que decirle a un compañero de equipo que agregue manualmente una columna a su esquema de base de datos local después de extraer sus cambios desde el control de fuente, se ha enfrentado al problema que resuelven las migraciones de la base de datos. <br>

            La Schema fachada de Laravel proporciona soporte independiente de la base de datos para crear y manipular tablas en todos los sistemas de base de datos compatibles con Laravel. Normalmente, las migraciones utilizarán esta fachada para crear y modificar tablas y columnas de bases de datos.</p>
          <hr>
            <h2>Generando migraciones</h2>
          <p>Puede utilizar el make:migration comando Artisan para generar una migración de base de datos. La nueva migración se colocará en su database/migrationsdirectorio. Cada nombre de archivo de migración contiene una marca de tiempo que permite a Laravel determinar el orden de las migraciones:</p>
          <p>php artisan make:migration create_flights_table</p>
         <p>Laravel usará el nombre de la migración para intentar adivinar el nombre de la tabla y si la migración creará una nueva tabla o no. Si Laravel puede determinar el nombre de la tabla a partir del nombre de la migración, Laravel completará previamente el archivo de migración generado con la tabla especificada. De lo contrario, simplemente puede especificar la tabla en el archivo de migración manualmente.</p>
          <br>
          <p>Si desea especificar una ruta personalizada para la migración generada, puede usar la --pathopción al ejecutar el make:migrationcomando. La ruta dada debe ser relativa a la ruta base de su aplicación.</p>
          <h2>Estructura de migracion</h2>
          <p>Una clase de migración contiene dos métodos: upy down. El upmétodo se utiliza para agregar nuevas tablas, columnas o índices a su base de datos, mientras que el downmétodo debe revertir las operaciones realizadas por el upmétodo.</p>
          <p>Dentro de estos dos métodos, puede utilizar el generador de esquemas de Laravel para crear y modificar tablas de forma expresiva. Para conocer todos los métodos disponibles en el Schemaconstructor, consulte su documentación . Por ejemplo, la siguiente migración crea una flightstabla:</p>

          <img src='img/migra.jpg' class="card-img-top" style="width: 300px; height: 180px;">
            </div><!-- /.blog-post -->





      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Migracion de BD</h4>
          <img src='img/mm.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Las migraciones son como un control de versiones para su base de datos, lo que le permite a su equipo definir y compartir la definición del esquema de la base de datos de la aplicación.
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
