   <?php require '../Conexiones/Enlatados.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../Diseno/assets/images/logo-122x92.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
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

  
  
  </head>
  <body>
    <section class="menu cid-qTkzRZLJNu"  id="menu1-0">

    

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
                    <a class="nav-link link text-white display-4" href="../Presentacion/categorias.php"><span class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Categorías</a>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="../Presentacion/login.php"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</a></li>
            </ul>
                </div>
        </div>
        
      </nav>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>    
    <section>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre de organización</th>
                <th scope="col">Medida</th>
                <th scope="col">Disponible/NO</th>
              </tr>
            </thead>
            <tbody>
              <?php
        foreach ($Result as $row ){
        ?>
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['CantidadDonada']; ?></td>
            <td><?php echo $row ['NombreEmpresa']?></td>
            <td><?php echo $row ['medida']?></td>
            <td><?php echo $row ['Disponibilidad']?></td>
        </tr>
        <?php }?>
            </tbody>
          </table>
    </section>