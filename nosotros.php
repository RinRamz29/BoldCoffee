
<?php
    include 'header.php';
?>
    <main class="contenedor">
        <h3 class="centrar-text">Sobre Nosotros</h3>
        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <picture>
                    <source srcset="build/img/nosotros.avif" type="image/avif">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/nosotros.jpg" alt="Imagen con muchas tazas con café con arte latte">
                </picture>
            </div>
            <div class="sobre-nosotros__text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe necessitatibus, tempora dolores atque error molestias aspernatur? Voluptas autem laborum ipsum praesentium quo accusamus optio quod nihil. Quod inventore nulla excepturi!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, autem. Accusantium assumenda consequatur voluptatum nihil facilis molestiae, dolor at vero dolore rem quia commodi maiores! Hic minus deserunt maxime laborum!</p>
            </div>
        </div>
    </main>
<?php 
    include 'footer.php';
?>