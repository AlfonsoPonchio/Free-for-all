<?php require '../Conexiones/Consulta.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Document</title>
    <?php 
        require_once "../Negocio/NegocioProducto.php";
        require_once "../Conexiones/insertar.php";
     ?>
</head>

<body>
        <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

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
          
    </nav>
</section>
      </section>
      <br>
      <br>
      <br>
      <br>
</nav>
<!--modificar -->
<form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
<fieldset>

<!-- Form Name -->
<legend>Registro de producto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Nombre del producto</label>  
  <div class="col-md-4">
  <input  name="nomPro" type="text" placeholder="Nombre del producto" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Categoria">Categoría</label>
  <div class="col-md-4">
    <select name="Categoria" class="form-control">
      <option value="Frutas">Frutas</option>
      <option value="Verduras">Verduras</option>
      <option value="Enlatados">Enlatados</option>
      <option value="Ropa">Ropa</option>
      <option value="Miscelanea">Miscelanea</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Cantidad</label>  
  <div class="col-md-4">
  <input  name="cant" type="text" placeholder="Cantidad ej. 2kg" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnEnviar"></label>
  <div class="col-md-4">
        <?php
                $operar = new Funcion();
                $operar -> Insertar();
             ?> 
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
<br>


</fieldset>
</form>

<div class="container-fluid">
<table class="table table-striped tabla hover">
    <thead class="table table-success">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody id=datos>
        <?php
        foreach ($Result as $row ){
        ?>
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['cantidadExistente']; ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>


</div>

                <!--Zona JQuery-->
    <script src="../Diseno/js/jquery.min.js"></script>
    <!--Zona Boostrap-->
    <script src="../Diseno/js/bootstrap.min.js"></script>
</body>

</html>