<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="basetpt";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

    $consulta = "select categoriaProd from categoria where categoria='".$IdCa."'";
    $resultados = mysqli_query( $Conexion , $consulta );
   
    while ($obj = mysqli_fetch_object($resultados)) {
          $Idp=$obj->idCategoria;
    }
 //recuperar las variables -Registro empresas-
 $nombreEm=$_POST['Nombre'];
 $direccionEm=$_POST['Direccion'];
 $ciudadEm=$_POST['Ciudad'];
 $estadoEm=$_POST['Estado'];
 $codigoEm=(int)$_POST['CP'];
 $telefonoEm=(int)$_POST['Telefono'];
 $emailEm=$_POST['Email'];
 $celularEm=(int)$_POST['Celular'];
 $passEm=$_POST['Pass'];
 
 //Recuperar las variables -Registro productos-
  //$nombreProd=$_POST['Nombre'];
  //$categoriaProd=$_POST['Categoria'];
  //$cantidadProd=$_POST['Cantidad'];
  
 //hacemos la sentencia de sql
 //Registro Empresa
 $sql = "INSERT INTO regempresa (nombreEm,direccionEm,ciudadEm,estadoEm,codigoEm,telefonoEm,emailEm,celularEm,passEm) VALUES('".$nombreEm."','".$direccionEm."','".$ciudadEm."','".$estadoEm."',".$codigoEm.",".$telefonoEm.",'".$emailEm."',".$celularEm.",'".$passEm."')";
 
 //Registro Producto
// $sql = "INSERT INTO regproducto (Nombre,Categoria,Cantidad) values ('".$nombreProd."',".$categoriaProd.",".$cantidadProd.")";
 
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
?>
