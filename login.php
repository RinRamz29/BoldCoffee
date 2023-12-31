<?php

    require 'includes/config/database.php';
    $db = conectarDB();

    
    //Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST["password"]);

        if(!$email){
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password){
            $errores[] = "La contraseña es obligatoria";
        }

        if(empty($errores)){
            //Revisar si el usuario existe 
            $query = "SELECT * FROM user WHERE email = '$email'";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows){
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado); 

                $auth = password_verify($password, $usuario['password']);

                if ($auth){
                    //El usuario está autenticado
                    session_start();

                    //Llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');

                } else {
                    $errores[] = "El password es incorrecto";
                }

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }

    //Incluye el header
    require './includes/funciones.php';
    include 'header.php';
?>

    <main class="contenedor">
        <h1>Iniciar Sesión</h1>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error"> 
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST">
            <fieldset>
                <legend>Email y Password:</legend>

                <label for="email">E-mail</label>
                <input name="email" type="email" id="email" placeholder="Tu Email" required>

                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Tu Password" required >

            </fieldset>
            <input type="submit" value="Iniciar Sesión" class="boton boton--primario">
        </form>
    </main>

<?php
    include 'footer.php';
?>