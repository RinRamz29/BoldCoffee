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

    <main id="contacto" class="contenedor">
        <h3 class="centrar-text">Ingresa tus datos para inscribirte al curso</h3>
        <div class="contacto-bg"></div>
        <form class="formulario" action="send-email.php" method="post">
             <div class="campo">
                 <label class="campo__label" for="nombre">Nombre</label>
                 <input class="campo__field" type="text" name="name" placeholder="Tu Nombre" id="nombre" required>
             </div>
             <div class="campo">
                 <label class="campo__label" for="email">E-mail</label>
                 <input class="campo__field" type="email" name="email"  placeholder="Tu E-mail" id="email" required>
             </div>
             <div class="campo">
                 <label class="campo__label" for="mensaje">Curso que te interesa</label>
                 <textarea class="campo__field campo__field--textarea" name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
             </div>
    
             <div class="campo">
                 <input type="submit" value="Enviar" name="send" class="boton boton--primario">
             </div>
        </form>
    </main>

    <section class="contenedor">
        <h3 class="centrar-text">Más del Curso</h3>
        <div class="contenedor-curso">
            <div class="center">
                <h3>Nuestro Curso</h3>
                <p>En 'De 0 a Barista Experto', descubre la magia detrás de cada taza. Bajo la mentoría de expertos, viaja desde el grano a la perfección en la preparación. Desarrolla habilidades, despierta tus sentidos y convierte el café en tu obra maestra. ¡Un curso para quienes buscan sabor y arte en cada sorbo!</p>
            </div>
            <div>
                <picture>
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Imagen de café molido">
                </picture>
            </div>
        </div>
    </section>



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