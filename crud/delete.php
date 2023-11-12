<?php
if (!empty($_GET["id"]) and !empty($_GET["foto"])) {
    $id = $_GET["id"];
    $foto = $_GET["foto"];



    if (file_exists($foto)) {
        // eliminamos la imagen anterior
        try {
            unlink($foto);
        } catch (\Throwable $th){

        }
        }


        $delete = $conexion->query("delete from empleados where id=$id");


        if ($delete == 1) {
            echo "<div class='alert alert-info'>El campo se a eliminado correctamente</div>";
        } else {
            echo "<div class='alert alert-info-danger'>Hubo un erro en eliminar campo</div>";
        }
        ?>


        <script>
        history.replaceState(null,null,location.pathname)
    </script>


<?php } ?>