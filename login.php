<?php 
    require 'includes/funciones.php';
    $auth = estaAutenticado();
    if($auth) {
        header('Location: /bienesraices/index.php');
    }
    require 'includes/config/database.php';
    $db = conectarDB();
    // Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Datos Sanitizados
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);
        // echo'<pre>';
        // var_dump($_POST);
        // echo'</pre>';
        

        if(!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio";
        }
        if(empty($errores)) {

            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($db, $query);
            // echo'<pre>';
            // var_dump($resultado);
            // echo'</pre>';
            if($resultado->num_rows) {
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si el password es correcto o no 
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // El usuario esta autenticado
                    session_start();

                    // lLenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;


                    header('Location: /bienesraices/admin/index.php');
                } else {
                    $errores[] ="El password es incorrecto";
                }
            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }


    // Incluye el header

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>
        
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>