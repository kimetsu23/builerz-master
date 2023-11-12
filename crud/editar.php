<?php
if(!empty($_POST["btnActualizar"])){
$id = $_POST["id"];
$imgedit =$_POST["imgedit"];
$name = $_POST["name"];
$cedula =$_POST['cedulaE'];
$gmail = $_POST['gmailE'];
$telefono = $_POST['telefonoE'];
$direccion = $_POST['direccionE'];
$edad = $_POST['edadE'];
$ista = $_POST['istaE'];
// $fecha = $_POST['fechaE'];
$espe = $_POST['espeE'];
// $mini = $_POST['miniE'];


$editar=$conexion->query("Update empleados Set Nombre='$name',  cedula='$cedula', gmail='$gmail', numero_telefono='$telefono', direccion='$direccion', edad='$edad', instagram='$ista', especialidad='$espe' where id=$id");
            
if ($editar !== false) {
    echo "<div class='alert alert-info'>Correcto, Se ha actualizado el campo</div>";
} else {
    echo "<div class='alert alert-info-danger'>Error a editar</div>";
}

// Actulizar imagenes
// echo "<div class='alert alert-info'>Tu registro a sido exitoso</div>";
$imagen=$_FILES["file"]["tmp_name"];
$nombreImagen=$_FILES["file"]["name"];
$tipoImagen=strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
$directorio="imagenes/";

if (is_file($imagen)) {
    
    if ($tipoImagen=="jpg" or $tipoImagen=="jpeg" or $tipoImagen=="png") {
        if (file_exists($imgedit)) {
        // eliminamos la imagen anterior
        try {
            unlink($imgedit);
        } catch (\Throwable $th){

        }
        }

        $ruta = $directorio.$id.".".$tipoImagen;
        if (move_uploaded_file($imagen, $ruta)) {
            $editarF=$conexion->query("Update empleados Set foto='$ruta' where id=$id");
           

if ($editarF !== false) {
    echo "<div class='alert alert-info'>Correcto, Se ha actualizado el campo Fotos</div>";
} else {
    echo "<div class='alert alert-info-danger'>Error a editar</div>";
}


        } else {
            echo "<div class='alert alert-info'>Se subieron los campos/div>";

        }
    

    } else {
        echo "<div class='alert alert-danger'>Solo se aceptan Formatos Jpg/Jpeg/Png</div>";
    }

} 
?>


<script>
    history.replaceState(null,null,location.pathname)
</script>

<?php } ?>