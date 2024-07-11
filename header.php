<?php session_start();
    $sesion = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Good Deal</title>
    <link href="assets/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/owl-carousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/docs/assets/owlcarousel/assets/owl.theme.default.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/Css/style.css">
    <link rel="icon" type="image/png" href="assets/Img/logo.svg" />
  </head>
  <body style="    background-color: #f9f9f9;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark margin-right: 1rem">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Navegación de palanca">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample08" style="">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inicio </font></font><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actual)</font></font></span></a>
          </li>
        <?php if ($sesion != null)
        { ?>
          <li class="nav-item">
            <a class="nav-link" href="misBeneficios.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mis Preferencias</font></font></a>
          </li>
      <?php  } ?>
          <li class="nav-item">
       <a class="nav-link" href="viajes.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Viajes</font></font></a>
     </li>
          <li class="nav-item">
       <a class="nav-link" href="restaurantes.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Restaurantes</font></font></a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Otras categorias</font></font></a>
       <div class="dropdown-menu" aria-labelledby="dropdown08">
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entretencion</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bienestar</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Relax</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiendas</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Electronica</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Canje de puntos</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoteles</font></font></a>
         <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Servicios</font></font></a>
       </div>
     </li>

      <li class="nav-item">
       <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conoce los beneficios</font></font></a>
     </li>

       <li class="nav-item">
       <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tienda</font></font></a>
     </li>
          <?php if ($sesion == null)
          { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar Sección</font></font></a>
              <div class="dropdown-menu" aria-labelledby="dropdown08">
                <a class="dropdown-item" href="login.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usa tu cuenta </font></font></a>
                <a class="dropdown-item" href="registrar.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crea una cuenta </font></font></a>
              </div>
            </li>
        <?php  }
        else
        { ?>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mi cuenta</font></font></a>
             <div class="dropdown-menu" aria-labelledby="dropdown08">
               <a class="dropdown-item" href="misDatos.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mis Datos</font></font></a>
               <a class="dropdown-item" href="acciones/cerrar.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar Sesion</font></font></a>
             </div>
           </li>
      <?php  } ?>
        </ul>
      </div>
    </nav>
