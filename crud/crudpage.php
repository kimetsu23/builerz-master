<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SERVICIOS RD </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
       

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
        <!-- CSS Libraries  Libreria-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- pagina Stylesheet  Hoja de estilo de pagina-->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h1 class="text-center text-secondary fond-weight-bold p4">SERVICIOS RD</h1>
        
        <?php
        require "conec.php";
        require "registro.php";
        require "editar.php";
        require "delete.php";
        require_once "login.php";
        $sql = $conexion->query("select * from empleados");
        ?>

<?php

if (!isset($_SESSION["username"])) {
    // Si no hay un usuario en la sesión, redirige a la página de inicio de sesión
    header("Location: admin.php");
    exit();
}

// Resto del código de tu página protegida
?>

        <script>
          function eliminar() {
            let res=confirm("Estas seguro de que quieres eliminar el campoy...")
            return res;
          }
        </script>

        <div class=" p-3 table-responsive">
<!-- Button trigger modal -->
<button type="button" name="nuevo" class="btn btn-outline-success mb-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevos empleados</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
      <form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="POST" novalidate>
  <div class="col-md-4">
    <label for="name" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="name" name="name"  required>
    <div class="invalid-feedback">
        Introduce el Nombre completo.
      </div>
  </div>
  <div class="col-md-4">
    <label for="cedula" class="form-label">Cedula</label>
    <input type="text" class="form-control" id="cedula" name="cedula"  required>
    <div class="invalid-feedback">
        Introduce la Cedula.
      </div>
  </div>
  <div class="col-md-4">
    <label for="gmail" class="form-label">Gmail</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="Email" class="form-control" id="gmail" name="gmail" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce El Gmail.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="direccion" class="form-label">direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required>
    <div class="invalid-feedback">
      Introduce la direccion.
    </div>
  </div>

  <div class="col-md-4">
    <label for="telefono" class="form-label">Numero de telefono</label>
    <div class="input-group has-validation">
     
      <input type="phone" class="form-control" id="telefono" name="telefono" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce El Numero de telefono.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="edad" class="form-label">Edad</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="edad" name="edad" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce la edad.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="ista" class="form-label">Instagram</label>
    <div class="input-group has-validation">
      <input type="url" class="form-control" id="ista" name="ista" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce El Intagram.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="fecha" class="form-label">Fecha de entrada</label>
    <div class="input-group has-validation">
      <input type="date" class="form-control" id="fecha" name="fecha" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce la fecha de entrada.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="espe" class="form-label">Especialidad</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="espe" name="espe" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Introduce la Especialidad del empleado.
      </div>
    </div>
  </div>

  <div class="mb-3">
    <label for="mini" class="form-label">Mini decricion </label>
    <textarea class="form-control" id="mini" name="mini" placeholder="Mini decricion del empleador menos de 150" required></textarea>
    <div class="invalid-feedback">
     Introduce la Mini decricion del empleado.
    </div>
  </div>
  

  <div class="mb-3">
    <input type="file" class="form-control" id="file" name="file" aria-label="file example" required>
    <div class="invalid-feedback">Introduce una Foto del empleado</div>
  </div>



  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los Terminos y condiciones
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

   <div class="col-12 modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" name="btnagregar" value="Agregar">
      </div>
</form>
      
      </div>
     
    </div>
  </div>
</div>


        <table class="table table-dark table-hover">

      
       
  <thead>
    <tr>
<th scope="col"> Id</th>
<th scope="col"> Nombre</th>
<th scope="col"> Cedula</th>
<th scope="col"> Gmail</th>
<th scope="col"> Numero_telefono</th>
<th scope="col"> Intagram</th>
<th scope="col"> Edad</th>
<th scope="col"> Direccion</th>
<th scope="col"> Fecha_entrada</th>
<th scope="col"> Especialidad</th>
<th scope="col"> Foto</th>
<th scope="col"> Mini_descricion</th>
<th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php
    while ($datos = $sql->fetch_object()) { ?>
       <tr>
        <th scope="row"><?php echo $datos->id ?></th>
        <th><?= $datos->Nombre?></th>
        <th><?= $datos->cedula?></th>
        <th><?= $datos->gmail?></th>
        <th><?= $datos->numero_telefono?></th>
        <th><?= $datos->instagram?></th>
        <th><?= $datos->edad?></th>'
        <th><?= $datos->direccion?></th>
        <th><?= $datos->fecha_entrada?></th>
        <th><?= $datos->especialidad?></th>
        <th> 
            <img width="80" src="<?= $datos->foto ?>" alt="">
        </th>
        <th><?= $datos->mini_decricion?></th>
        <th><button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdropE<?= $datos->id?>">Editar</button>
        <a href="crudpage.php?id=<?= $datos->id?>&foto=<?= $datos->foto?>" type="button" class="btn btn-outline-danger" onclick="return eliminar()">Eliminar</a></th>
    </tr>


<!-- Modal -->
<div class="modal fade" id="staticBackdropE<?= $datos->id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
      <form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="POST" novalidate>
  
      <div class="col-md-12">
   
    <input type="hidden" class="form-control" value=" <?= $datos->id?>" name="id"  >
    <input type="hidden" class="form-control" value=" <?= $datos->foto?>"  name="imgedit">
    
  </div>
  
  
      <div class="col-md-12">
    <label for="name" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="name" name="name"  value=" <?= $datos->Nombre?>" >
    <div class="invalid-feedback">
        Introduce el Nombre completo.
      </div>
  </div>
  <div class="col-md-12">
    <label for="cedula" class="form-label">Cedula</label>
    <input type="int" class="form-control" id="cedula" name="cedulaE" value=" <?= $datos->cedula?>">
    <div class="invalid-feedback">
        Introduce la Cedula.
      </div>
  </div>
  <div class="col-md-12">
    <label for="gmail" class="form-label">Gmail</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="Email" class="form-control" id="gmail" name="gmailE" aria-describedby="inputGroupPrepend" value=" <?= $datos->gmail?>" >
      <div class="invalid-feedback">
        Introduce El Gmail.
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="direccion" class="form-label">direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccionE" value=" <?= $datos->direccion?>" >
    <div class="invalid-feedback">
      Introduce la direccion.
    </div>
  </div>

  <div class="col-md-12">
    <label for="telefono" class="form-label">Numero de telefono</label>
    <div class="input-group has-validation">
     
      <input type="phone" class="form-control" id="telefono" name="telefonoE" aria-describedby="inputGroupPrepend"  value=" <?= $datos->numero_telefono?>" >
      <div class="invalid-feedback">
        Introduce El Numero de telefono.
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="edad" class="form-label">Edad</label>
    <div class="input-group has-validation">
      <input type="int" class="form-control" id="edad" name="edadE" aria-describedby="inputGroupPrepend" value=" <?= $datos->edad?>" >
      <div class="invalid-feedback">
        Introduce la edad.
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="ista" class="form-label">Instagram</label>
    <div class="input-group has-validation">
      <input type="url" class="form-control" id="ista" name="istaE" aria-describedby="inputGroupPrepend" value=" <?= $datos->instagram?>" >
      <div class="invalid-feedback">
        Introduce El Intagram.
      </div>
    </div>
  </div>
  <!-- <div class="col-md-12">
    <label for="fecha" class="form-label">Fecha de entrada</label>
    <div class="input-group has-validation">
      <input type="date" class="form-control" id="fecha" name="fechaE" aria-describedby="inputGroupPrepend" value=" <?= $datos->fecha_entrada?>" >
      <div class="invalid-feedback">
        Introduce la fecha de entrada.
      </div>
    </div>
  </div> -->
  <div class="col-md-12 mb-2">
    <label for="espe" class="form-label">Especialidad</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="espe" name="espeE" aria-describedby="inputGroupPrepend" value=" <?= $datos->especialidad?>" >
      <div class="invalid-feedback">
        Introduce la Especialidad del empleado.
      </div>
    </div>
  </div>

  <!-- <div class="mb-3">
    <label for="mini" class="form-label">Mini decricion </label>
    <textarea class="form-control" id="mini" name="miniE" placeholder="Mini decricion del empleador menos de 150" value=" <?= $datos->mini_decricion?>" ></textarea>
    <div class="invalid-feedback">
     Introduce la Mini decricion del empleado.
    </div>
  </div> -->
  

  <div class="mb-6">
    <input type="file" class="form-control" id="file" name="file" aria-label="file example" value=" <?= $datos->foto?>" >
    <div class="invalid-feedback">Introduce una Foto del empleado</div>
  </div>



   <div class="col-12 modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" name="btnActualizar" value="Actualizar">
      </div>
</form>
      
      </div>
     
    </div>
  </div>
</div>




    <?php }?>

    
  </tbody>
</table>
           









        </div>










     <!-- JavaScript Libraries  Librerias-->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/isotope/isotope.pkgd.min.js"></script>
     <script src="lib/lightbox/js/lightbox.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/slick/slick.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

     <!-- pagina Javascript  -->
     <script src="js/main.js"></script>
     <script src="vali.js"></script>
    
 </body>
</html>