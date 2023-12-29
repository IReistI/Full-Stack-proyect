<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp"/>
            <source srcset="build/img/destacada2.jpg" type="image/jpeg"/>
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el : <span>20/10/2023</span> por: <span>Admin</span> </p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, dolorem illum hic tenetur fugiat sequi magnam nobis aspernatur consectetur, nemo sed asperiores voluptates? Natus tempora quisquam quam. Asperiores, illo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut praesentium doloremque autem aliquam dignissimos placeat deleniti maxime accusantium dolorem ullam! Accusamus accusantium a tempore quibusdam eos non nobis, itaque repudiandae!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime molestiae harum sequi! Rerum eveniet earum quaerat distinctio quibusdam molestias excepturi! Labore, aliquid commodi? Ratione pariatur deleniti quas maxime molestiae ipsam!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nisi, laboriosam, blanditiis libero unde sit impedit recusandae maxime est obcaecati at modi numquam pariatur minima quia atque officiis consectetur eveniet!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus debitis explicabo cumque neque, suscipit saepe asperiores quis ea blanditiis at laborum laboriosam vero pariatur doloremque officia. Ducimus libero aut voluptates?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio at porro dolorem dolore dolor officia voluptates nisi, amet commodi fuga ipsam, id alias, facere impedit libero velit suscipit tempora quo?
            </p>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>