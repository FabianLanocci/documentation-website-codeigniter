<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type = "text/css"  href ="<?php echo base_url(); ?>styles.css">
    <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>

    <title>Documentación PHP</title>

  </head>
  <body>
  <!--Añadir un botoncito siguiente / atrás-->
    <main id="main-doc">
      <nav id="navbar">
        <header id="PHP">Documentación PHP</header>
          <ul id="nav-list">
            <?php foreach($documentos as $d){ ?>
            <li class="nav-links"><a href="<?php echo site_url("documento/ver/".$d['documento_id']); ?>"><?php echo $d['titulo']; ?></a></li>
            <?php } ?>
          </ul>
      </nav>
      <?php	if(isset($_view) && $_view)
	      $this->load->view($_view);
      ?>
      <button id="buttonScrollToTop">
        <i class="material-icons">arrow_upward</i>
      </button>
    </main>
    
    <script>
      //Const ocupa espacio en ram, para algo que no voy a reutilizar mucho
      const buttonScrollToTop = document.querySelector("#buttonScrollToTop");

      //Usando jquery, deberia de usar On, no agregar el eventListener
      buttonScrollToTop.addEventListener("click", function(){
        /*windows.scrollTo(0, 0)
        >> Esto probablemente sea compatible con varios navegadores, entre ellos IE pero no tiene animación. Ta feito.
        */

        /*window.scrollTo({
          top: 0,
          left: 0,
          behavior: "smooth"
        });
        >> Esto ya tiene animación pero probablemente sea menos compatible.
        */

        $("html, body").animate({scrollTop: 0}, "slow");
        /* 
        >> Quizás la mejor opción y la más compatible. Usamos jquery para hacerla. No hace falta que pasemos el top y el left,
        directamente poniendo scrollTop ya está. Y con slow claramente controlamos el behavior
        */
      });
    </script>
  </body>
</html>