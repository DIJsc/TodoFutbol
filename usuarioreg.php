<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style3.css">
  <link rel="stylesheet" media="(max-width: 800px)" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>source = "js/functions"</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>

<body>
  

  <div class="topnav" id="myTopnav">
   
    <li class="elementos">
      <ul>
        <a class="logo" href="index.html"> <img src="img/logo_size_invert.jpg" width="60px" height="45px"></a>
        <ul class="centrado">

          <a class="Inicio" href="usuarioreg.html" class="active">Inicio</a>
          <a class="Noticias" href="#Noticias">Noticias</a>
          <a class="Pencas" href="#Pencas">Pencas</a>
          <a class="Nosotros" href="#Nosotros">Nosotros</a>
        </ul>
        <ul id="menu">
        <li><a class="fotoperf"> <img src="img/account_circle_FILL0_wght400_GRAD0_opsz48.png"></a>
          <ul>
            <li><a class="Usuario" href="">Usuario</a></li>
            <li><a class="Opciones" href="">Opciones</a></li>
            <li><a class="cerrarcuenta" href="index.html">Cerrar cuenta</a></li>
            <?php
              session_start();
              session_destroy();
              header('location: index.html');
            ?>
          </ul>  
        </li>
    </li>
    </ul>
    </ul>
    </li>
  
  
  </header>







</body>

</html>