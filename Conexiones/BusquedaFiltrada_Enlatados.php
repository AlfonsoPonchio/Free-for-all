<?php
$usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = 'localhost' ;
    $database = "pruebas";
    $Conexion= mysqli_connect ($servidor, $usuario, $contrasena, $database) or die ("Error al conectar a la BD".mysql_error());

        $Salida='';
        //$SQL="select catalogoproducto.nombre, categoria.categoria, catalogoproducto.cantidadExistente from catalogoproducto,categoria where catalogoproducto.idCategoria=categoria.idCategoria group by catalogoproducto.nombre";
        $Query="select catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Enlatados'";   
        if(isset($_POST['Consulta'])){
            $q=$Conexion->real_escape_string($_POST['Consulta']);
            $Query="select catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Enlatados' and catalogoproducto.nombre like '%".$q."%'";
            
        }
        $Resultado = $Conexion->query($Query);
        if($Resultado -> num_rows >0){
            $Salida="<table class='table table-bordered'>
            <thead>
              <tr>
                <th scope='col'>Nombre</th>
                <th scope='col'>Descripción</th>
                <th scope='col'>Cantidad</th>
                <th scope='col'>Nombre de organización</th>
                <th scope='col'>Medida</th>
                <th scope='col'>Disponible/NO</th>
              </tr>
            </thead>
            <tbody>";
            while($fila=$Resultado->fetch_assoc()){
                $Salida.="<tr>
                <td>".$fila['nombre']."</td>
                <td>".$fila['Descripcion']."</td>
                <td>".$fila['CantidadDonada']."</td>
                <td>".$fila['NombreEmpresa']."</td>
                <td>".$fila['medida']."</td>
                <td>".$fila['Disponibilidad']."</td>
                </tr>";
                
            }
              $Salida.="</tbody></table>";
            }
        else {
            $Salida.="No hay datos";
        }
        echo $Salida;
        $Conexion->close();
?>