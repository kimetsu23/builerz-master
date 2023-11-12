<?php
if(!empty($_POST["btnagregar"])){
$name = $_POST['name'];
$cedula =$_POST['cedula'];
$gmail = $_POST['gmail'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$ista = $_POST['ista'];
$fecha = $_POST['fecha'];
$espe = $_POST['espe'];
$mini = $_POST['mini'];


// echo "<div class='alert alert-info'>Tu registro a sido exitoso</div>";
$imagen=$_FILES["file"]["tmp_name"];
$nombreImagen=$_FILES["file"]["name"];
$tipoImagen=strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
$directorio="imagenes/";

if ($tipoImagen=="jpg" or $tipoImagen=="jpeg" or $tipoImagen=="png") {
    
    $registro=$conexion->query("insert into empleados(foto, Nombre, cedula, gmail, numero_telefono, direccion, edad, instagram, fecha_entrada, especialidad, mini_decricion) values('','$name','$cedula','$gmail','$telefono','$direccion','$edad ','$ista','$fecha','$espe','$mini')" );
    $idregistro=$conexion->insert_id;

    $ruta=$directorio.$idregistro.".".$tipoImagen;
    $actualizarImagen=$conexion->query("update empleados set foto='$ruta' where id=$idregistro");

// ALmacenando las imagenes
if (move_uploaded_file($imagen,$ruta)) {
    echo "<div class='alert alert-info'>El registro a sido exitoso</div>";
} else {
    echo "<div class='alert alert-info-danger'>Hubo un error con el registro</div>";
}




} else {
    echo "<div class='alert alert-info'>No se acepta ese formato de la imagen</div>";
}
?>


<script>
    history.replaceState(null,null,location.pathname)
</script>

<?php } ?>


