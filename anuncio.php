<?php
    // Validar que sea un ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /bienesraices/index.php');
    }

    // Importar Credenciales
    require 'includes/config/database.php';
    $db = conectarDB();
    
    // Obtener los datos de la propiedad
    $consulta = "SELECT titulo, precio, wc, habitaciones, descripcion, estacionamiento FROM propiedades WHERE id = $id";
    $resultado = mysqli_query($db, $consulta);
    if($resultado->num_rows === 0) {
        header('Location: /bienesraices/index.php');
    }
    $propiedad = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>

        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen <?php echo $propiedad['titulo'] ?>">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo number_format($propiedad['precio']); ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
            </ul>

            <?php echo $propiedad['descripcion'] ?>

        </div>
    </main>
<?php
    // Cerrar la conexion
    mysqli_close($db);
    incluirTemplate('footer');
?>