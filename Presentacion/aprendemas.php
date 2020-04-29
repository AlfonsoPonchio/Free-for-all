<?php
$link= mysqli_connect('localhost','root','','pruebas') or die ('Error en conectar con la BD');
$sql_usuarios= 'select * from usuarios';
$rst_usuarios = mysqli_query($link , $sql_usuarios) or die ('error en la consulta');
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../Diseno/assets/images/logo-122x92.png" type="image/x-icon">
  <link rel="stylesheet" href="../Diseno/assets/fontawesome/fontawesome.css">
  <link rel="stylesheet" href="../Diseno/assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="../Diseno/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/solid.css">
  <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../Diseno/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../Diseno/assets/tether/tether.min.css">
  <link rel="stylesheet" href="../Diseno/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../Diseno/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../Diseno/assets/theme/css/style.css">
  <link rel="preload" as="style" href="../Diseno/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../Diseno/assets/mobirise/css/mbr-additional.css" type="text/css">
  <meta name="description" content="">
   <style type="text/css">
 	@import url('https://fonts.googleapis.com/css?family=Muli:300,400,600,700&display=swap');


 	body{
 		background: #FFFFFF;
 		font-family: 'Muli', sans-serif;


 	}
 	.fa{
 		color: #3FFF7F;
 		text-align: center;
 		padding: 30px;
 		font-size: 46px;
 	}
 	.card{
 		padding: 15px;
 		margin: 10px;
 		 box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.01);
    transition: box-shadow 0.3s ease-in-out;
    border:1px solid #ddd;
    cursor: pointer;
    border-radius: 4px;
 	}
 	.card:hover{
 		box-shadow: 0 5px 15px 2px rgba(0, 0, 0, 0.3);
 	}
 	h3{
 		text-align: center;
 		font-size: 22px;
 		color: #839192;
    font-weight: 600;

 	}
 	
 	p{
 		padding: 5px;
 		text-align: center;
 		font-size: 15px;
 		color: #839192;
 		line-height: 1.6;
    font-weight: 500;
    padding-top: 5px;
   
 	}

 </style>
  <title>Categorias</title>
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
                    <a class="nav-link link text-white display-4" href="https://mobirise.com"><span class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Categorías</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="../Presentacion/Login.php"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</a></li></ul>
                </a></div>
        </div>
        
    </nav>
</section>
  <br>
  <br>
  <br>
  <br>
  <div class="container mt-5">
  <h1 class="text-dark text-center pb-3">Empresas asociadas</h1>
  
  
  <div class="row">
       <?php
while($registro=mysqli_fetch_array($rst_usuarios)){
     ?>
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
 
      <div class="card" >
       
                
       	<h1><?php echo $registro['NombreEmpresa']; ?></h1>
      </div>


     </div>
        <?php // abrir php
       ////var_dump($registro);
     } // fin de ciclo while
     ?>
    </div>         
  </div>
  
  </body>
</html>