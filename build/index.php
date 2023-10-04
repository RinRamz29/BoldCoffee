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
    <link rel="prefetch" href="nosotros.html" as="document">

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
                <a class="logo" href="Index.html">
                    <h1 class="logo__nombre no-margin centrar-text">Bold<span class="logo__bold">Coffee</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="cursos.html" class="navegacion__enlace">Cursos</a>
                    <a href="contacto.html" class="navegacion__enlace">Contacto</a>
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                </nav>
            </div>
        </div>

        <div class="header__text">
            <h2 class="no-margin">BoldCoffee Cursos</h2>
            <p class="no-margin">Aprende de los expertos con nuestros cursos especializados</p>
        </div>
    </header>

    <?php
        if(!empty($_POST["send"])){
            $userName = $_POST["name"];
            $email = $_POST["email"];
            $mensaje = $_POST["mensaje"];

            $toEmail = $_POST[$email];
            $mailHeader = "Name: " . $userName . "\r\n Email: " . $email . "\r\n Message: " . $mensaje . "\r\n";

            if(mail($toEmail, $userName, $mailHeader)){
                $message = "Ola";
            }
        }
    ?>

    <div id="contacto" class="contenedor">
        <h3 class="centrar-text">Contacto</h3>
        <div class="contacto-bg"></div>
        <form action="" class="formulario">
             <div class="campo">
                 <label class="campo__label" for="nombre">Nombre</label>
                 <input class="campo__field" type="text" name="name" placeholder="Tu Nombre" id="nombre">
             </div>
             <div class="campo">
                 <label class="campo__label" for="email">E-mail</label>
                 <input class="campo__field" type="email" name="email"  placeholder="Tu E-mail" id="email">
             </div>
             <div class="campo">
                 <label class="campo__label" for="mensaje">Mensaje</label>
                 <textarea class="campo__field campo__field--textarea" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
             </div>
    
             <div class="campo">
                 <input type="submit" value="Enviar" name="send" class="boton boton--primario">
             </div>
        </form>
    </div>

    <footer class="footer">
        <div class="contenedor contenedor--footer">
            <div class="barra">
                <a class="logo" href="Index.html">
                    <h1 class="logo__nombre no-margin">Bold<span class="logo__bold">Coffee</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="cursos.html" class="navegacion__enlace">Cursos</a>
                    <a id="enlace-contacto" href="contacto.html" class="navegacion__enlace">Contacto</a>
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                    <a href="https://www.Instagram.com" class="navegacion__enlace">Instagram</a>
                    <a href="https://www.Facebook.com" class="navegacion__enlace">Facebook</a>
                </nav>
            </div>
        </div>
    </footer>

    <script src="js/scripts.js"></script>
    <script src="js/modernizr.js"></script>
</body>
</html>

