<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, dolorem illum hic tenetur fugiat sequi magnam nobis aspernatur consectetur, nemo sed asperiores voluptates? Natus tempora quisquam quam. Asperiores, illo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut praesentium doloremque autem aliquam dignissimos placeat deleniti maxime accusantium dolorem ullam! Accusamus accusantium a tempore quibusdam eos non nobis, itaque repudiandae!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime molestiae harum sequi! Rerum eveniet earum quaerat distinctio quibusdam molestias excepturi! Labore, aliquid commodi? Ratione pariatur deleniti quas maxime molestiae ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nisi, laboriosam, blanditiis libero unde sit impedit recusandae maxime est obcaecati at modi numquam pariatur minima quia atque officiis consectetur eveniet!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus debitis explicabo cumque neque, suscipit saepe asperiores quis ea blanditiis at laborum laboriosam vero pariatur doloremque officia. Ducimus libero aut voluptates?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio at porro dolorem dolore dolor officia voluptates nisi, amet commodi fuga ipsam, id alias, facere impedit libero velit suscipit tempora quo?
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h2>Titulo Pagina</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos ea nesciunt consequatur voluptatem eos illo laudantium a molestiae dolore est ipsam possimus fugiat, numquam vero modi impedit, officiis ab. Impedit.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos ea nesciunt consequatur voluptatem eos illo laudantium a molestiae dolore est ipsam possimus fugiat, numquam vero modi impedit, officiis ab. Impedit.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos ea nesciunt consequatur voluptatem eos illo laudantium a molestiae dolore est ipsam possimus fugiat, numquam vero modi impedit, officiis ab. Impedit.</p>
            </div>
        </div>
    </section>
<?php
    incluirTemplate('footer');
?>