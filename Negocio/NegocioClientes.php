<?php
class Clientes
    {
        
        public function Registrar()
        {
            
            if (isset($_POST["Nombre"])) {
                $Nombre=$_POST["Nombre"];
                $Direccion=$_POST["Direccion"];
                $Ciudad=$_POST["Ciudad"];
                $Estado=$_POST["Estado"];
                $CP=$_POST["CP"];
                $Telefono=$_POST["Telefono"];
                $Email=$_POST["Email"];
                $Celular=$_POST["Celular"];
                $Pass=$_POST["Pass"];
                   
                $respuesta=OpercaionesBasicas::Registro($Nombre,$Direccion,$Ciudad,$Estado,$CP,$Telefono,$Email,$Celular,$Pass);
                if ($respuesta) {
                    echo '<strong>'.$respuesta.'</strong>';
                }
            }
    
        }
                public function Inicio()
        {
            
            if (isset($_POST["Email"])) {
                $Email=$_POST["Email"];
                $Pass=$_POST["Pass"];
                   
                $respuesta=OpercaionesBasicas::InicioSesion($Email,$Pass);
                if ($respuesta) {
                    echo '<strong>'.$respuesta.'</strong>';
                }
            }
    
        }
    }
 ?>