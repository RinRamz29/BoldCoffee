<?php
    include 'header.php';
?>

    <div id="contacto" class="contenedor">
        <h3 class="centrar-text">Contacto</h3>
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
                 <label class="campo__label" for="mensaje">Mensaje</label>
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