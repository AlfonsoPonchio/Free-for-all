
<?php
class Funcion
    {
        
        public function Insertar()
        {
            
if (isset($_POST["nomPro"])) {
                
                $Categoria=$_POST["Categoria"];
                $Nombre=$_POST["nomPro"];
                
                $respuesta=OpercaionesBasicas::Insert($Categoria,$Nombre);
                if ($respuesta) {
                    echo '<strong>'.$respuesta.'</strong>';
                }

    }
        }
    }
 ?>