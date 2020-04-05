<?php
class OpercaionesBasicas
{
    public static function Insert($IdCa,$Nombre){
$usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";
    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());
// verificar que la categoria existe
    $consulta = "select idCategoria from categoria where categoria='".$IdCa."'";
    $resultados = mysqli_query( $Conexion , $consulta );
   
    while ($obj = mysqli_fetch_object($resultados)) {
          $Idp=$obj->idCategoria;
    }
    // Para verificar si ya existe el producto registrado
    $SQL="select * from catalogoproducto where nombre='".$Nombre."'";
    $res = mysqli_query( $Conexion , $SQL );
    
        while ($obj2 = mysqli_fetch_object($res)) {
          $Nom=$obj2->nombre;
    }
    //Insertar a la base de datos
    if($Nombre==$Nom){
      echo "<script src='../Diseno/assets/bootstrap/js/AlertasMalas/Error.js'></script>";
    }else{$consulta = "insert into catalogoproducto (nombre,idCategoria,cantidadExistente) values ('".$Nombre."',".$Idp.",".(0).")";
    $resultado = mysqli_query( $Conexion , $consulta );
 mysqli_close($Conexion);

    echo "<script type='text/javascript'>";
    echo "window.history.back(-2)";
    echo "</script>";

echo "<script src='../Diseno/assets/bootstrap/js/AlertassCorrectas/Producto.js'></script>";}
    
    
    
    }

    
    public static function Registro($NE,$D,$C,$E,$CP,$T,$EM,$CE,$CO,$Ti){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";

    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());
     $SQL="select * from usuarios where Email='".$EM."'";
    $res = mysqli_query( $Conexion , $SQL );
    
        while ($obj2 = mysqli_fetch_object($res)) {
          $EME=$obj2->Email;
    }
    if($EM==$EME){
     echo "<script src='../Diseno/assets/bootstrap/js/AlertasMalas/ErrorCliente.js'></script>";
    }else{
    $consulta = "insert into usuarios values ('".$NE."','".$D."','".$C."','".$E."','".$CP."','".$T."','".$EM."','".$CE."','".$CO."','".$Ti."')";
    $resultador = mysqli_query( $Conexion , $consulta );
     mysqli_close($Conexion);
    echo "<script type='text/javascript'>";
    echo "window.history.back(-1)";
    echo "</script>";
    echo "<script src='../Diseno/assets/bootstrap/js/AlertassCorrectas/Cliente.js'></script>";
    echo "<a href='../Presentacion/Login.php'> Inicio Sesion </a>";
    }
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
 
header("Location: http://pw20201.com:8080/Free-for-all/Presentacion/index.html");
mysqli_close($Conexion);
    }
    else{
     echo "<script src='../Diseno/assets/bootstrap/js/AlertasMalas/Info.js'></script>";
     mysqli_close($Conexion);
    }
    }
    
    }
}