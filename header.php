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
    <link rel="prefetch" href= "nosotros.php" as="document">

    <!--Preload-->
    <link rel="preload" href= "/build/css/app.css" as="style">
    <link rel="stylesheet" href= "/build/css/app.css">

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
                <a class="logo" href="/">
                    <h1 class="logo__nombre no-margin centrar-text">Bold<span class="logo__bold">Coffee</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="/cursos.php" class="navegacion__enlace">Cursos</a>
                    <a href="/contacto.php" class="navegacion__enlace">Contacto</a>
                    <a href="/nosotros.php" class="navegacion__enlace">Nosotros</a>
                </nav>
            </div>
        </div>
        <div class="header__text">
            <h2 class="no-margin">BoldCoffee Cursos</h2>
            <p class="no-margin">Aprende de los expertos con nuestros cursos especializados</p>
        </div>
    </header>