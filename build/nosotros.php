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
    <link rel="preload" href="css/app.css" as="style">
    <link rel="stylesheet" href="css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:ital,wght@0,400;1,700&display=swap" crossorigin="crossorigin" as="font" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" crossorigin="crossorigin" as="font">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="Index.php">
                    <h1 class="logo__nombre no-margin centrar-text">Bold<span class="logo__bold">Coffee</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                    <a id="enlace-contacto" href="contacto.php" class="navegacion__enlace">Contacto</a>
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
        <h3 class="centrar-text">Sobre Nosotros</h3>
        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <picture>
                    <source srcset="img/nosotros.avif" type="image/avif">
                    <source srcset="img/nosotros.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="img/nosotros.jpg" alt="Imagen con muchas tazas con café con arte latte">
                </picture>
            </div>
            <div class="sobre-nosotros__text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe necessitatibus, tempora dolores atque error molestias aspernatur? Voluptas autem laborum ipsum praesentium quo accusamus optio quod nihil. Quod inventore nulla excepturi!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, autem. Accusantium assumenda consequatur voluptatum nihil facilis molestiae, dolor at vero dolore rem quia commodi maiores! Hic minus deserunt maxime laborum!</p>
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