@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">VISTAS CON BLADE EN LARAVEL 8</h2>

          <h4>Cómo se usan las plantillas con Blade</h4>
          <hr>

          <p>Las vistas en Blade se compilan a código PHP y se cachean hasta que son modificadas, básicamente esto se traduce en que Blade añade sobrecarga cero a las aplicaciones. Las vistas en Blade usan la extensión.blade.php y normalmente se almacenan en el directorio resources/views.</p>
          <h2>Herencia de plantillas</h2>
          <p>Dos de los principales beneficios de usar Blade son la herencia de la plantilla y las secciones. Para empezar, echemos un vistazo a un simple ejemplo. Primero, examinaremos un diseño de página "maestro". Dado que la mayoría de las aplicaciones web mantienen la misma disposición general en varias páginas, es conveniente definir esta disposición como una sola vista de Blade:</p>
          <p>Creamos un nuevo proyecto con el comando <br>
           composer create-project laravel/laravel nombreDelProyecto </p>
          <img src="img/a1.jpg" style="width: 550px; height: 150px;">
          <p>Creamos nuestra vista principal, en este caso sera welcome que es la vista que nos da por defecto al crear un proyecto</p>
          <img src="img/a2.jpg" style="width: 300px; height: 150px;">
          <p>Dentro de este archivo crearemos la plantilla principa que contendra</p>
          <ul>
            <li>Header</li>
            <li>Body</li>
            <li>Footer</li>
            <li>Extensiones de esta pagina web</li>
          </ul>
          <img src="img/a3.jpg" style="width: 800px; height: 500px;">
          <p>La directiva @ section, como su nombre indica, define una sección de contenido, mientras que la directiva @ yield se utiliza para mostrar el contenido de una sección determinada.
            Ahora que hemos definido un diseño para nuestra aplicación, definamos una página hija que herede el diseño.
            Extender una plantilla
            Cuando defina una vista infantil, utilice la directiva Blade @ extends para especificar qué diseño debe "heredar" la vista infantil. Las vistas que extienden un diseño Blade pueden inyectar contenido en las secciones del diseño utilizando las directivas @ section. Recuerde que, como se ve en el ejemplo anterior, el contenido de estas secciones se mostrará en la maqueta utilizando @ yield:
            </p>
            <img src="img/a4.jpg" style="width: 400px; height: 200px;">
            <p>Extends lleara el nombre de la vsta de la que estendemos en este caso welcome</P>
            <p>Section tendra el nombre que se le dio a yield en la vista principal en este caso Contenido</P>
            <p>Y cerramos la extension con arroba ensection</p>
            </div><!-- /.blog-post -->


      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Views</h4>
          <img src='img/vista.png' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Laravel nos permite separar la logica de presentacion de la logica de nuestra aplicacion a travez de las vista.</p>
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
