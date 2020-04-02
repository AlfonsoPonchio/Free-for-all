<?php
$usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";
    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());

        
        
        //$SQL="select catalogoproducto.nombre, categoria.categoria, catalogoproducto.cantidadExistente from catalogoproducto,categoria where catalogoproducto.idCategoria=categoria.idCategoria group by catalogoproducto.nombre";
        $SQL="select catalogoproducto.nombre, categoria.categoria, sum(catalogoproducto.cantidadExistente) as 'cantidadExistente' from catalogoproducto,categoria where catalogoproducto.idCategoria=categoria.idCategoria group by catalogoproducto.nombre";   
        $Result=mysqli_query ($Conexion,$SQL);
        
        ////$array =mysqli_fetch_array($Result);

?>