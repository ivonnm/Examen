@extends('welcome')
@section('contenido')

<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-ARIAL border-bottom">

        </h3>

        <div class="blog-post">
        <h2 class="blog-post-title">Una guía rápida para instalar Laravel 8 en Windows 10 XAMPP</h2>
          <p>Laravel es un marco de aplicación web basado en PHP, proporciona herramientas para construir aplicaciones potentes y robustas, es un marco de código abierto, que proporciona una estructura que ahorra mucho tiempo para construir y planificar aplicaciones grandes. Es una de las plataformas más seguras que utiliza una base PHP. Proporciona funciones integradas para la autorización del usuario, como inicio de sesión, registro y contraseña olvidada.</p>
          <hr>
          <h2>Configuración de Laravel en Windows 10</h2>
          <h3>1) Instale el composer en Windows: </h3>
          <p>Paso 1: descargue el archivo .exe de Composer <br>
            En el primer paso 1, debe abrir su navegador y escribir getcomposer. <br> Luego visite www.getcomposer.org . Y descarga composer. <br> Si ya tiene Composer, descargue / instaló Composer. Por lo tanto, debe continuar con el siguiente paso.
            Haga clic en Descargar Composer en <a href="https://getcomposer.org/">https://getcomposer.org/</a></p>
                <img src='img/compo.png' class="card-img-top" style="width: 300px; height: 400px;">
          <h3>Paso 2: ejecuta la configuración e instala Composer</h3>
          <p>En el paso 2, haga clic en descargar el archivo composer.exe. Luego abra un cuadro de aviso:</p>
                <img src='img/c2.png' class="card-img-top" style="width: 450px; height: 400px;">
          <p>Ahora establezca la ruta de PHP y haga clic en siguiente:</p>
                <img src='img/c3.png' class="card-img-top" style="width: 450px; height: 400px;">
          <p>Si tiene alguna URL de proxy, ingrese aquí, no sepa dejarla para hacer clic en siguiente:</p>
                <img src='img/c4.png' class="card-img-top" style="width: 450px; height: 400px;">
          <p>Ahora, revise el asistente de configuración del redactor. Y haga clic en instalar.</p>
                <img src='img/c5.png' class="card-img-top" style="width: 450px; height: 400px;">
          <p>Composer se ha instalado correctamente. Haga clic para finalizar el botón.</p>
                <img src='img/c6.png' class="card-img-top" style="width: 450px; height: 400px;">
          <p>Ahora, abra su terminal y escriba el siguiente comando en el símbolo del sistema:<strong>composer -v</strong></p>
          <p>Después de ejecutar el comando anterior en cmd. Si se verá como la imagen que se muestra a continuación. Así que composer se instaló correctamente en su xampp de Windows 10.</p>
                <img src='img/c7.png' class="card-img-top">
          <h2> Instalando Laravel:</h2>
          <p>Escriba el siguiente comando en la ventana del símbolo del sistema:  </p>
           <ul>
             <li>Composer global requiere "laravel / installer". </li>
             <li>Composer create-project –prefer-dist laravel / laravel Project_name: este comando instalará Laravel y otras dependencias y también generará la clave ANSI. .</li>
           </ul>
        </div><!-- /.blog-post -->



      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">¿Que es composer?</h4>
          <img src='img/insta.jpg' class="card-img-top" style="width: 300px; height: 180px;">
          <p class="mb-0"><em>Composer es un sistema de gestión de paquetes para programar en PHP el cual provee los formatos estándar necesarios para manejar dependencias y librerías de PHP. Fue desarrollado por Nils Adermann y Jordi Boggiano quienes continúan dirigiendo el proyecto. </p>
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
