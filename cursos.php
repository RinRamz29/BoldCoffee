<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HN6EQRPV6C"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HN6EQRPV6C');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoldCoffee</title>
    <meta name="description" content="Página web de cursos de café">
    <!-- Prefetch -->
    <link rel="prefetch" href="nosotros.php" as="document">

    <!--Preload-->
    <link rel="preload" href="build/css/app.css" as="style">
    <link rel="stylesheet" href="build/css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:ital,wght@0,400;1,700&display=swap" crossorigin="crossorigin" as="font" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" crossorigin="crossorigin" as="font">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header class="header not-index">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="Index.php">
                    <h1 class="logo__nombre no-margin centrar-text">Bold<span class="logo__bold">Coffee</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                    <a href="contacto.php" class="navegacion__enlace">Contacto</a>
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                </nav>
            </div>
        </div>
        <div class="header__text">
            <h2 class="no-margin">BoldCoffee Cursos</h2>
            <p class="no-margin">Aprende de los expertos con nuestros cursos especializados</p>
        </div>
    </header>
        
    <main class="contenedor">
        <div class="curso">
            <div class="curso-imagen">
                <picture>
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Imagen de café molido">
                </picture>
            </div>
            <div class="curso-informacion">
                <h4 class="no-margin">Técnicas de extracción de café</h4>
                <p class="curso__label">Precio:
                    <span class="curso__info">Gratis</span>
                </p>
                <p class="curso__label">Cupo:
                    <span class="curso__info">20</span>
                </p>
                <a href="entrada.php" class="boton boton--secundario">Más Información</a>
                <p class="curso__descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rem, vel et eligendi aut esse velit unde nulla libero modi aspernatur doloremque asperiores minima, natus delectus, corrupti repellat voluptatem ex!
                </p>
            </div>
        </div>

        <div class="curso">
            <div class="curso-imagen">
                <picture>
                    <source srcset="build/img/blog2.avif" type="image/avif">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog2.jpg" alt="Imagen de una taza de café con un libro">
                </picture>   
            </div>
            <div class="curso-info">
                <h4 class="no-margin">Taller para tostar y moler granos</h4>
                <p class="curso__label">Precio:
                    <span class="curso__info">Gratis</span>
                </p>
                <p class="curso__label">Cupo:
                    <span class="curso__info">20</span>
                </p>
                <a href="entrada.php" class="boton boton--secundario">Más Información</a>
                <p class="curso__descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rem, vel et eligendi aut esse velit unde nulla libero modi aspernatur doloremque asperiores minima, natus delectus, corrupti repellat voluptatem ex!
                </p>
            </div>
        </div>

        <div class="curso">
            <div class="curso-imagen">
                <picture>
                    <source srcset="build/img/blog3.avif" type="image/avif">
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog3.jpg" alt="build/imgen de taza de café con granos de café a los lados">
                </picture>
            </div>
            <div class="curso-info">
                <h4 class="no-margin">Cuatro recetas de café para principiantes</h4>
                <p class="curso__label">Precio:
                    <span class="curso__info">Gratis</span>
                </p>
                <p class="curso__label">Cupo:
                    <span class="curso__info">20</span>
                </p>
                <a href="entrada.php" class="boton boton--secundario">Más Información</a>
                <p class="curso__descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rem, vel et eligendi aut esse velit unde nulla libero modi aspernatur doloremque asperiores minima, natus delectus, corrupti repellat voluptatem ex!
                </p>
            </div>
        </div>
    </main>


        <footer class="footer">
            <div class="contenedor contenedor--footer">
                <div class="barra">
                    <a class="logo" href="Index.php">
                        <h1 class="logo__nombre no-margin">Bold<span class="logo__bold">Coffee</span></h1>
                    </a>
                    <nav class="navegacion">
                        <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                        <a id="enlace-contacto" href="contacto.php" class="navegacion__enlace">Contacto</a>
                        <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                        <a href="https://www.Instagram.com" class="navegacion__enlace">Instagram</a>
                        <a href="https://www.Facebook.com" class="navegacion__enlace">Facebook</a>
                    </nav>
                </div>
            </div>
        </footer>

        <script src="js/modernizr.js"></script>
</body>
</html>