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
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="Index.php">
                    <p class="logo__nombre no-margin centrar-text">Bold<span class="logo__bold">Coffee</span></p>
                </a>
            </div>
        </div>

        <div class="header__text">
            <h1 class="no-margin">Entrénate con uno de los mejores cursos del mercado</h2>
            <h2 class="no-margin">Somos los líderes en México en entrenar baristas especializados</h2>
            <a id="contact-button" class="button" href="#contacto">Entrénate Ahora</a>
            <p class="garantia">Garantía de devolución de 30 días.</p>
        </div>
    </header>

    <main class="main">
        <h2>Sobre Nuestros Cursos</h2>
        <div class="curso-destacado">
            <picture>
                <source srcset="build/img/Barista.avif" type="image/avif">
                <source srcset="build/img/Barista.webp" type="image/webp">
                <source srcset="build/img/Barista.jpg" type="image/jpeg">
                <img loading="lazy" width="200" height="300" src="build/img/Barista.jpg" alt="Imagen de barista preparando café">
            </picture>
            <div class="center main-text">
                <h1>Barista de 0 a Experto</h1>
                <p>¡Transforma tu pasión por el café en un arte con nuestro curso 'De 0 a Barista Experto'! <br> Con nuestro curso de barista de 0 a experto aprenderás de los mejores para llegar a ser un barista máster en el área.</p>
            </div>
        </div>
    </main>

    <section class="main">
        <div class="main-content">
            <div class="main-text center">
                <h3>En BoldCoffee sabemos lo que hacemos</h3>
                <p>Al elegirnos, te unes a una red invaluable de especialistas y aseguras una educación líder en el mercado. Somos la compañia más calificada para entrenar baristas expertos, con nuestra tecnología de punta y nuestros maestros expertos, aprenderás con el mejor material y los mejores maestros.</p>
            </div>
            <picture>
                <source srcset="build/img/Coffee.avif" type="image/avif">
                <source srcset="build/img/Coffee.webp" type="image/webp">
                <source srcset="build/img/Coffee.jpg" type="image/jpeg">
                <img loading="lazy" width="200" height="300" src="build/img/Coffee.jpg" alt="Imagen de granos de café">
            </picture>
        </div>
    </section>

    <section class="main">
        <div class="main-content">
            <picture>
                <source srcset="build/img/Coffee2.avif" type="image/avif">
                <source srcset="build/img/Coffee2.webp" type="image/webp">
                <source srcset="build/img/Coffee2.jpg" type="image/jpeg">
                <img loading="lazy" width="200" height="300" src="build/img/Coffee2.jpg" alt="Imagen de granos de café">
            </picture>
            <div class="main-text center">
                <h3>En BoldCoffee somos expertos</h3>
                <p>Nos destacamos por calidad y excelencia. Con más de 50 años de experiencia, materiales y maestros excelentes, puedes estar seguro que te entrenaremos para ser el barista de tus sueños.</p>
            </div>
        </div>
    </section>

    
    <div id="contacto" class="contenedor">
        <h3 class="centrar-text">Contáctanos ya para obtener información y cotizaciones</h3>
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
    </div>
    
<?php 
    include 'footer.php';
?>