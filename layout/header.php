<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
  	<link rel="stylesheet" href="css/mi-slider.css">
    <script src="js/jquery.nivo.slider.js"></script>

    <title>Planilla | En desarrollo</title>

</head>
<body>

<!-- VENTANA EMERGENTE INICIAR SESION-->
<div class="overlay" id="overlay">
            <div class="popup" id="popup">
              <div class="cerrar-popup">
                <a id="btn-cerrar-popup" class="btn-cerrar-popup" ><i class="fa fa-times"></i></a>
              </div>
              <h4>Iniciar sesion</h4>
              <form action="">
                <div class="contenedor-inputs">
                  <input type="text" placeholder="Correo electronico">
                  <input type="password" placeholder="Contraseña">
                </div>
                <input type="submit" class="btn-submit" value="Acceder">
                <div class="login-registrar">
                  <a href="#" id="registrar" >Registrar nueva cuenta</a>|
                  <a href="#" id="olvidar-contrasena" >¿Olvidaste tu contraseña?</a>
                </div>
              </form>
            </div>
          </div>

<header>
      <!-- MENU -->
      <div id="header-inner">
        <a href="#" id="logo"><img src="img/pics/soditec.png" alt=""></a>
        <nav class="nav">
          <a href="#" id="menu-icon"><i class="fa fa-bars"></i></a>
          <ul class="menu">
            <li><a href="index.php" class="current">Inicio</a></li>
            <li><a href="">Tramites</a></li>
            <li><a href="">Vivienda</a></li>
            <li><a href="gestores.php">Gestores</a></li>
            <li><a href="">Concepto 30</a></li>
            <li><a href="">Fas 30</a></li>
            <li><a href="">Becas</a>
             <!-- <ul class="submenu">
              <li><a href="index.php" class="current">Citas</a></li>
              <li><a href="index.php" class="current">Solicitudes</a></li>
              <li><a href="index.php" class="current">Convocatorias</a></li>
              </ul>         --> 
            </li>
            <li><a href="">Convocatorias</a></li>
            <li><a href="">Escalafon</a>
            <!--  <ul class="submenu">
              <li><a href="index.php" class="current">Convocatorias</a></li>
              <li><a href="index.php" class="current">Solicitud</a></li>
              </ul>-->
            </li>
            <li><a href="convenios.php">Convenios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a id="btn-abrir-popup" class="btn-abrir-popup"><i class="fa fa-user"></i></a></li>
          </ul>

        </nav>    

      </div>

      <!-- DIVISION A 1200PX-->
      <div id="wrapper">

       <!-- SLIDER -->
       <div class="slider-wrapper theme-mi-slider">
      		<div id="slider" class="nivoSlider">
      		    <img src="img/slider/1.jpg" alt="" title="#htmlcaption1" />
      		    <img src="img/slider/2.jpg" alt="" title="#htmlcaption2" />
      		    <img src="img/slider/3.jpg" alt="" title="#htmlcaption3" />
              <img src="img/slider/4.jpg" alt="" title="#htmlcaption4" />
              <img src="img/slider/5.jpg" alt="" title="#htmlcaption5" />
      		</div>
      	</div>

      </div>
    </header>

    <div id="wrapper-body">