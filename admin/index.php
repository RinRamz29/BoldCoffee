<?php 
    include '../header.php';

    require '../includes/funciones.php';

    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /'); 
    }

    //Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    //Escribir el query
    $query = "SELECT * FROM Cursos";

    //Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    //Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT); 

        if ($id) {
            //Elimina el archivo
            $query = "SELECT imagen FROM Curso WHERE id = $id";
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $propiedad['imagen']);

            //Elimina la propiedad
            $query = "DELETE FROM Curso WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location: /admin?resultado=3');
            }
        }
    }
?>


<main class="contenedor">
        <h1>Administrador de Cursos</h1>
        <?php if (intval($resultado) === 1) { ?>
            <p class="alerta exito">Cursos Creado Correctamente</p>
        <?php }else if(intval($resultado) === 2){?>
            <p class="alerta exito">Cursos Actualizado Correctamente</p>
        <?php }else if(intval($resultado) === 3){?>
            <p class="alerta exito">Cursos Eliminado  Correctamente</p>
        <?php }?>

        <a href="/admin/cursos/crear.php" class="boton boton--primario">Nuevo Curso</a>

        <table class="cursos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>
                <?php while($curso = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr> <!-- Mostrar los resultados -->
                    <td><?php echo $curso['id']; ?></td>
                    <td><?php echo $curso['Titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $curso['Imagen']; ?>" class="imagen-tabla" alt="oa"></td>
                    <td><?php echo $curso['Percio']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>


<?php
    include '../footer.php';
?>