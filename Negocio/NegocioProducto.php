
<?php
class Funcion
    {
        
        public function Insertar()
        {
            
            if (isset($_POST["nomPro"])) {
                
                $Cantidad=$_POST["cant"];
                $Categoria=$_POST["Categoria"];
                $Nombre=$_POST["nomPro"];    
                $respuesta=OpercaionesBasicas::Insert($Categoria,$Nombre,$Cantidad);
                if ($respuesta) {
                    echo '<strong>'.$respuesta.'</strong>';
                }
            }
    
        }
    }
 ?>