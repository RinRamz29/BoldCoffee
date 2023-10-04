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

    <main class="container-curso-destacado">
        <div class="curso-destacado">
            <picture>
                <source srcset="img/Barista.avif" type="image/avif">
                <source srcset="img/Barista.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="img/Barista.jpg" alt="Imagen de barista preparando café">
            </picture>
            <div class="center main-text">
                <h1>Barista de 0 a Experto</h1>
                <p>¡Transforma tu pasión por el café en un arte con nuestro curso 'De 0 a Barista Experto'!</p>
                <a class="button" href="entrada.php">Explora</a>
            </div>
        </div>
    </main>

    <article class="main">
        <h2>Sobre Nuestros Cursos</h2>
        <div class="main-content">
            <div class="main-text center">
                <h3>En BoldCoffee sabemos lo que hacemos</h3>
                <p> Al elegirnos, te unes a una red invaluable de especialistas y aseguras una educación líder en el mercado.</p>
                <a class="button" href="cursos.php">Explora</a>
            </div>
            <picture>
                <source srcset="img/Coffee.avif" type="image/avif">
                <source srcset="img/Coffee.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="img/Coffee.jpg" alt="Imagen de granos de café">
            </picture>
        </div>
    </article>

    <article class="main">
        <div class="main-content">
            <picture>
                <source srcset="img/Coffee2.avif" type="image/avif">
                <source srcset="img/Coffee2.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="img/Coffee2.jpg" alt="Imagen de granos de café">
            </picture>
            <div class="main-text center">
                <h3>En BoldCoffee somos expertos</h3>
                <p>Nos destacamos por calidad y excelencia.</p>
                <a class="button" href="cursos.php">Explora</a>
            </div>
        </div>
    </article>

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