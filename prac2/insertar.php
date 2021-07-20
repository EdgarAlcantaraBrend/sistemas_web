<?php include "header.php";
    
?>

 <!-- Page Content -->
    <div class="container" style="font-family: 'PT Serif', serif;">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="font-weight-light">Insertar datos con php a mysql usando mysqli</h1>
            <p class="lead">
                Para poder insertar datos desde php con mysqli, solo 
                necesitamos crear la cadena de sql valida y ejecutarla 
                con una conexion valida, los parametros a ser insertados,
                deben ir en variables como convensión, no necesitamos más que
                saber la respuesta de mysli_query para saber si se llevo con 
                exito la inserción.
                <h3>Ejemplo de como insertar con php a mysql</h3>
                <p>$sql = "INSERT INTO (campo1, campo2) VALUES('$variable1', 'variable2')"</p>
                <p>$respuesta = mysqli_query($conexion, $sql);</p>
                <p>La variable $respuesta nos retornara un 1 o un 0 si se ejecuto o no, asi sabremos si se logro.</p>

            </p>
            
        </div>
    </div>
<?php include "footer.php";
    
?>