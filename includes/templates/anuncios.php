<?php
    // Importar la conexion
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();

    // Consultar
    $query = "SELECT * FROM propiedades LIMIT $limite";

    // Obtener el resultado
    $resultado = mysqli_query($db, $query);

?>
<div class="contenedor-anuncios">
    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
    <div class="anuncio">

        <img src="/bienesraices/imagenes/<?php echo $row['imagen']; ?>" alt="anuncio <?php echo $row['titulo']; ?>" loading="lazy">

        <div class="contenido-anuncio">
            <h3><?php echo $row['titulo']; ?></h3>
            <p><?php echo substr($row['descripcion'], 0, 30); ?> ...</p>
            <p class="precio">$<?php echo number_format($row['precio']); ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono sw">
                    <p><?php echo $row['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $row['estacionamiento']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $row['habitaciones']; ?></p>
                </li>
            </ul>
            <a href="/bienesraices/anuncio.php?id=<?php echo $row['id']; ?>" class="boton-amarillo-block">Ver Propiedad</a>
        </div><!--.contenido-anuncio-->
    </div><!--.anuncio-->
    <?php endwhile; ?>
</div><!--.contenedor-anuncio-->
<?php
    // Cerrar la conexion
        mysqli_close($db);
?>