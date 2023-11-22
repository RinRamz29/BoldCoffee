<?php
    include 'header.php';
?>


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
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Imagen Curso">
                </picture>
            </div>
        </div>
    </section>

<?php 
    include 'footer.php';
?>