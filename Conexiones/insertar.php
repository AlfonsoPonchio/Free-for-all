<?php
class OpercaionesBasicas
{
    public static function Insert($IdCa,$Nombre,$CantidaExistente){
$usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";
    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());

    $consulta = "select idCategoria from categoria where categoria='".$IdCa."'";
    $resultados = mysqli_query( $Conexion , $consulta );
   
    while ($obj = mysqli_fetch_object($resultados)) {
          $Idp=$obj->idCategoria;
    }
    //$consulta = "insert into catalogoproducto (nombre,idCategoria,cantidadExistente) values ( ".$Nombre." , ".$Idp." , ".$CantidaExistente.")";
    $consulta = "insert into catalogoproducto (nombre,idCategoria,cantidadExistente) values ('".$Nombre."',".$Idp.",".$CantidaExistente.")";
    $resultado = mysqli_query( $Conexion , $consulta );

header("Location: http://pw2020.com/sistematpt/Presentacion/registroPro.php");
    }
    
    
    public static function Registro($NE,$D,$C,$E,$CP,$T,$EM,$CE,$CO){
    
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";

    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());
    
    $consulta = "insert into usuarios values ('".$NE."','".$D."','".$C."','".$E."','".$CP."','".$T."','".$EM."','".$CE."','".$CO."')";
    $resultador = mysqli_query( $Conexion , $consulta );
    echo "<script type='text/javascript'>";
    echo "window.history.back(-2)";
    echo "alert(Se a registrado de forma correcta);";
    echo "</script>";
    
    echo "<a href='../Presentacion/Login.php'> Inicio Sesion </a>";
    }
    
    public static function InicioSesion($EM,$CO){
    
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";

    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());
    
$consulta = "select * from usuarios where Email='".$EM."'";
    $resultados = mysqli_query( $Conexion , $consulta );
   
    while ($obj = mysqli_fetch_object($resultados)) {
          $EMP=$obj->Email;
          $COP=$obj->Contrasena;
    }

if($EM==$EMP)
{    
    if($CO==$COP)
{

header("Location: http://pw2020.com/sistematpt/Presentacion/index.html");
    }
    }
    
    }
}