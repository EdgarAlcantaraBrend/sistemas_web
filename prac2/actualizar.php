<?php include "header.php";
    
?>

 <!-- Page Content -->
    <div class="container" style="font-family: 'PT Serif', serif;">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="font-weight-light">Actualizar datos de php a mysqli</h1>
            <p class="lead">
                Para poder actualizar datos con php usando mysqli, necesitamos crear 
                la cadena sql valida y ejecutarla con el objeto de conexion por otra 
                parte la información que se desea actualizar debe estar contenida en 
                variables por convensión.
                <p style="color:red">
                    Nota: No olvidar el where o te corren jaja
                </p>

                <h3>Ejemplo de actualización con php y mysqli</h3>
                <p>$sql = "UPDATE  t_tabla SET campo1 = '$variable1', campo2 = '$variable2' WHERE id= '$variableID'"</p>
                <p>$respuesta = mysqli_query($conexion, $sql);</p>

            </p>
            
        </div>
    </div>
<?php include "footer.php";
    
?>