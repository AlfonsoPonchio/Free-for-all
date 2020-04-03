<?php

    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";
    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());

        
        
        //$SQL="select catalogoproducto.nombre, categoria.categoria, catalogoproducto.cantidadExistente from catalogoproducto,categoria where catalogoproducto.idCategoria=categoria.idCategoria group by catalogoproducto.nombre";
        $SQL="select catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Verduras'";   
        $Result=mysqli_query ($Conexion,$SQL);
        mysqli_close($Conexion);
?>