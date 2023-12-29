<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp"/>
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre">

                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu Email">

                <label for="telefono">Telefono</label>
                <input id="telefono" type="tel" placeholder="Tu Telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupuesto">Presupuesto o Precio</label>
                <input id="presupuesto" type="number" placeholder="Tu precio o presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto">

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto">
                </div>
                <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>

                <label for="fecha">Fecha</label>
                <input id="fecha" type="date">
                
                <label for="hora">hora</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>