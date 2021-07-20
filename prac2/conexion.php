<?php include "header.php";
    
?>

 <!-- Page Content -->
    <div class="container" style="font-family: 'PT Serif', serif;">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="font-weight-light">Conectar a mysql con php</h1>
            <p class="lead">
                
                <h3>¿Cuales son los argumentos o parametros necesarios en una conexión</h3>
                <p>
                    Para poder llevar a cabo la conexion requerimos de 4 argumentos:
                    <ol>
                        <li>EL servidor web que normalmente es una ip, un dominio o localhost</li>
                        <li>El usuario de base de datos</li>
                        <li>El password del usuario</li>
                        <li>El nombre de la bd</li>
                    </ol>
                </p>
                <h3>Ejemplo de conexión sencilla utilizando mysqli</h3>
                <p>
                    Para poder utilizar el API de mysqli, solo necesitamos llamar la función que vamos a utilizar, en este caso 
                    con usar la función "mysqli_connect", seguido de los 4 parametros necesarios:

                    <p>
                        <p>$servidor = "localhost";</p>
                        <p>$usuario = "root";</p>
                        <p>$password = "";</p>
                        <p>$bd = "mibd";</p>
                        <p>$conexion = mysqli_connect($servidor,$usuario,$password, $bd);</p>
                    </p>

                    De esta forma podemos conectar a mysql de una forma corta.
                </p>
            </p>
            <!---API  es un plan de desarrollo
            (Es un espacio de nombres)-->
        </div>
    </div>
<?php include "footer.php";?>