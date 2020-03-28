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
      <link rel="preload" as="style" href="../Diseno/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href=" ../Diseno/assets/mobirise/css/mbr-additional.css" type="text/css">
    <title>Document</title>
        <?php 
        require_once "../Negocio/NegocioClientes.php";
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
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="../Presentacion/index.html"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</a>
                </li></ul>

        </div>
    </nav>
</section>
      </section>
      <br>
      <br>
      <br>
      <br>
<legend>Registro nuevo usuario</legend>

<!-- Text input-->
    <form method="POST">
    <div class="form-group">
      <label class="col-md-4 control-label" for="Nombre">Nombre de empresa</label>  
      <div class="col-md-5">
      <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Direccion">Direccion</label>  
      <div class="col-md-8">
      <input id="Direccion" name="Direccion" type="text" placeholder="Direccion" class="form-control input-md">
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Empresa">Ciudad</label>  
      <div class="col-md-5">
      <input id="Ciudad" name="Ciudad" type="text" placeholder="Ciudad" class="form-control input-md" required="">
        
      </div>
    </div>
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Estado">Estado</label>
      <div class="col-md-4">
        <select id="Estado" name="Estado" class="form-control">
    <option value="Aguascalientes">Aguascalientes</option>
    <option value="Baja California">Baja California</option>
    <option value="Baja California Sur">Baja California Sur</option>
    <option value="Campeche">Campeche</option>
    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
    <option value="Colima">Colima</option>
    <option value="Chiapas">Chiapas</option>
    <option value="Chihuahua">Chihuahua</option>
    <option value="Distrito Federal">Distrito Federal</option>
    <option value="Durango">Durango</option>
    <option value="Guanajuato">Guanajuato</option>
    <option value="Guerrero">Guerrero</option>
    <option value="Hidalgo">Hidalgo</option>
    <option value="Jalisco">Jalisco</option>
    <option value="México">México</option>
    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
    <option value="Morelos">Morelos</option>
    <option value="Nayarit<">Nayarit</option>
    <option value="Nuevo León">Nuevo León</option>
    <option value="Oaxaca">Oaxaca</option>
    <option value="Puebla">Puebla</option>
    <option value="Querétaro">Querétaro</option>
    <option value="Quintana Roo">Quintana Roo</option>
    <option value="San Luis Potosí">San Luis Potosí</option>
    <option value="Sinaloa">Sinaloa</option>
    <option value="Sonora">Sonora</option>
    <option value="Tabascov">Tabasco</option>
    <option value="Tamaulipas">Tamaulipas</option>
    <option value="Tlaxcala">Tlaxcala</option>
    <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
    <option value="Yucatán">Yucatán</option>
    <option value="Zacatecas">Zacatecas</option>
        </select>
      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="CP">Código Postal</label>  
      <div class="col-md-5">
      <input id="CP" name="CP" type="text" placeholder="Código Postal" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Telefono">Telefono</label>  
      <div class="col-md-4">
      <input id="Telefono" name="Telefono" type="text" placeholder="Telefono" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Email">Email</label>  
      <div class="col-md-4">
      <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Celular">Celular</label>  
      <div class="col-md-4">
      <input id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control input-md">
        
      </div>
    </div>
    
    
    <!-- Text input-->
       <div class="form-group">
       <label class="col-md-4 control-label" for="Pass">Contraseña</label>  
       <div class="col-md-4">
       <input id="Pass" name="Pass" type="text" placeholder="Contraseña" class="form-control input-md" required="">
        
       </div>
       </div>
    
      <!-- Button -->
      <div class="form-group">
      <label class="col-md-4 control-label" for="Registrarse"></label>
        <div class="col-md-4">
        <?php 
                    $operar = new Clientes();
                    $operar -> Registrar();
                 ?>             
          <button id="Registrarse" type="submit" name="Registrarse" class="btn btn-dark">Registrarse</button>
        </div>
      </div>
    
    </form>
            <!--Zona JQuery-->
    <script src="../Diseno/js/jquery.min.js"></script>
    <!--Zona Boostrap-->
    <script src="../Diseno/js/bootstrap.min.js"></script>
</body>
</html>