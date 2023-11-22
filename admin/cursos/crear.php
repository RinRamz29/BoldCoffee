<?php 
    include '../../header.php';
    require '../../includes/funciones.php';
    
    $auth = estaAutenticado();
    
    if(!$auth){
        header('Location: /'); 
    }
    
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensajes de errores
    $errors = [];
    
    $titulo = '';
    $precio = '';
    $cupo = '';
    $descripcion = '';
    
    //Ejecutar el codigo despues de que el usuaior envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $titulo = mysqli_real_escape_string($db ,$_POST['titulo']);
        $precio = mysqli_real_escape_string($db ,$_POST['precio']);
        $cupo = mysqli_real_escape_string($db ,$_POST['cupo']);
        $descripcion = mysqli_real_escape_string($db ,$_POST['descripcion']);

        //Asignar files a una variable
        $imagen = $_FILES['imagen'];



        if(!$titulo){
            $errors[] = "Nombre del curso requerido";
        }

        if(!$precio){
            $errors[] = "Precio del curso requerido";
        }

        if(strlen($descripcion) < 50){
            $errors[] = "Descripción demasiado corta, mínimo 50 caracteres.";
        }
        else if(!$descripcion){
            $errors[] = "La descripción es obligatoria";
        }

        if(!$cupo){
            $errors[] = "El cupo es obligatorio";
        }

        if(!$imagen['name'] || $imagen['error']){
            $errors[] = "Selecciona una imagen para tu inmueble";
        }

        $medida = 1000 * 1000;

        if($imagen['size'] > $medida ){
            $errors[] = 'La imagen es muy pesada';
        }

        //Revisar que el arreglo de errores esté vacio
        if(empty($errors)){

            //Subida de archivos
            //Crear una carpeta
            $carpetaImagenes = '../../imagenes/';

            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
            //Generar nombre unico para la imagen
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg"; 

            //Subir imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

            $query = "INSERT INTO Cursos (Titulo, Percio, Imagen, Descripcion, Cupos) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$cupo');";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                //Redireccionar al usuario
                header("Location: /admin?resultado=1");
            }
        }
    }

?>
    <main class="contenedor ">
        <h1>Crear</h1>

        <a href="/admin/" class="boton boton--primario">Volver</a>

        <?php foreach($errors as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>
    
        <form action="/admin/cursos/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Información General</legend>

                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo" value="">

                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" placeholder="Precio"  value="">

                    <label for="precio">Cupo:</label>
                    <input type="number" name="cupo" id="cupo" placeholder="Cupo"  value="">

                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                </fieldset>

                <input type="submit" value="Crear Curso" class="boton boton--primario">
                
        </form>

    </main>

<?php
    include '../../footer.php'
?>           