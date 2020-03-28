<?php require '../Conexiones/Consulta.php'?>

<!DOCTYPE html>
<html lang="en">


<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../Diseño/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Diseño/css/solid.css">
    <link rel="stylesheet" href="../Diseño/css/fontawesome.css">
    <title>Document</title>
    
    <?php 
        require_once "../Negocio/NegocioProducto.php";
        require_once "../Conexiones/insertar.php";
     ?>
    
</head>

<body>
    <div class="container-fluid">
     <form id="Formu" method="POST" enctype="multipart/form-data">
        <label> Nombre del producto</label>
        <br>
        <input type="text" name='Nombre'>
        <br>
        <label>Cantidad</label>
        <br>
        <input type="text"name='Cantidad'>
        <br>
        <label>Categoria</label>
        <br>
        <select name="Categoria" >
            <Option>-- Seleccion Categoria --</Option>
            <option value="Comida">Comida</option>
            <option value="Ropa">Ropa</option>
            <option value="Medicamentos">Medicamentos</option>
        </select>
        <br>
        <?php 
                $operar = new Funcion();
                $operar -> Insertar();
             ?>             
         <button type="submit">Enviar</button>
    </form>
    </div>
    
<div class="container-fluid">
<table class="table table-striped tabla hover">
    <thead class="table table-success">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody id=datos>
        <?php
        foreach ($Result as $row ){
        ?>
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['cantidadExistente']; ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>


</div>




<script src="../Diseño/js/jquery.min.js"> </script>
    <script src="../Diseño/js/bootstrap.js"></script>
    <script src="../Diseño/js/fontawesome.min.js"></script>
    <script src="../Diseño/js/solid.js"></script>
    <script src=../Diseño/js/dist/jquery.validate.min.js></script>
    <script>
        
        $.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
		} );
    </script>
<script>
		$( function () {
			$( "#Formu" ).validate( {
				rules: {
					Nombre: {
						required: true,
						minlength: 2
					},
					//password: {
					//	required: true,
					//	minlength: 5
					//},
					//confirm_password: {
					//	required: true,
					//	minlength: 5,
					//	equalTo: "#password"
					//},
                    Categoria: {
						required: true,
					},
					Cantidad: {
						required: true,
                        
						minlength:1,
                        maxlenght:4,
                         maxlength:14
					},
					agree: "required"
				},
				messages: {
					Nombre:{
						required: "Porfavor llene su nombre",
						minlength: "Su nombre requiere minimo 3 caracteres"
					},
					//password: {
					//	required: "Please provide a password",
					//	minlength: "Your password must be at least 5 characters long"
					//},
					//confirm_password: {
					//	required: "Please provide a password",
					//	minlength: "Your password must be at least 5 characters long",
					//	equalTo: "Please enter the same password as above"
					//},
					Categoria:{
						required: "Porfavor seleccione una opcion",
					},
                    Cantidad:{
						required: "Porfavor llene campo Cantidad",
						minlength: "Minimo 1",
                        maxlength:"maximo 999"
					},
					agree: "Porfavor confirme sus datos"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );
        
    </script>
</body>

</html>