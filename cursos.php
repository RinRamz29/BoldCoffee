<?php
    include 'header.php';
    
?>

    <main class="contenedor">
        <h1>Casas y Depas en Venta</h1>
    
    <?php
    //Importar base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    //Consultar
    $query = "SELECT * FROM Cursos LIMIT 9";

    //Leer resultado
    $resultado = mysqli_query($db, $query);
    ?>


        <div class="curso">
            <?php while ($curso = mysqli_fetch_assoc($resultado)):?>
            <div class="contenedor-curso">
        
                <img loading="lazy" width="200" height="300" src="/imagenes/<?php echo $curso['Imagen'];?>" alt="anuncio">
                        
                <div class="informacion-curso">
                    <h3><?php echo $curso['Titulo'];?></h3>
                    <p><?php echo $curso['Descripcion'];?></p>
                    <p class="precio">$<?php echo number_format($curso['Precio']);?></p>
                </div> 
            </div> <!--Anuncio-->
            <?php endwhile; ?>
        </div> <!--Contenido anuncios-->

<?php	
//Cerrar la conexión
mysqli_close($db);
?>
    </main>


<?php
    include 'footer.php';
?>