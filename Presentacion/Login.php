<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Diseno/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="../Diseno/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../Diseno/assets/tether/tether.min.css">
    <link rel="stylesheet" href="../Diseno/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../Diseno/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="../Diseno/assets/theme/css/style.css">
    <link rel="preload" as="style" href="../Diseno/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="../Diseno/assets/mobirise/css/mbr-additional.css" type="text/css">
    
<?php 
        require_once "../Negocio/NegocioClientes.php";
        require_once "../Conexiones/insertar.php";
     ?>
</head>

<body>
    <section class="menu cid-qTkzRZLJNu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="../Presentacion/index.html">
                         <img src="../Diseno/assets/images/logo-122x92.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="../Presentacion/index.html">
                        TPT</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="../Presentacion/index.html"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</a>
                </li></ul>

        </div>
    </nav>
</section>
      <br>
      <br>
      <br>
      <br>
  <form method="POST" enctype="multipart/form-data">
    <!-- Default form login -->
        <p class="h4 mb-4">Inicia sesión</p>

    <!-- Email -->
            <input type="email" name="Email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
             <input type="password" name="Pass" class="form-control mb-4" placeholder="Contraseña">
                <!-- Sign in button -->
            <?php 
                    $operar = new Clientes();
                    $operar -> Inicio();
                 ?>
            <button class="btn btn-dark btn-block my-4"  type="submit">Entrar</button>




  </form>    <!-- Register -->
        <p>¿No tienes cuenta?
            <a href="../Presentacion/RegistroNuevo.php">Registrate</a>
         </p>
        
        
          <script src="../Diseno/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../Diseno/assets/popper/popper.min.js"></script>
  <script src="../Diseno/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Diseno/assets/tether/tether.min.js"></script>
  <script src="../Diseno/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="../Diseno/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="../Diseno/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../Diseno/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../Diseno/assets/theme/js/script.js"></script>
  
</body>

</html>