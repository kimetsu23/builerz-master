<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/styleform.css">
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
        <!-- CSS Libraries  Libreria-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        

    <title>Administracion</title>
</head>

<body>

        <div class="login-box">
            <h2>Administracion Servicio RD</h2>
            <form method="post" action="login.php">
            <div class="user-box col-md-12">
            <input type="text" name="nombre"   required>
            <label for="" class="form-label">Username</label>
            <div class="invalid-feedback">
        Introduce el Usuario o el gmail.
      </div>
            </div>
            
            <div class="user-box">
            <input type="password" name="contra" required>
            <label for="">Password</label>
            
            </div>
            <button id="submit" type="submit" name="btnsesion">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Inicio
            </button>
            <!-- <p id="message-ref">Exelente</p> -->
            
            
            
            </form>
            
            
            
            </div>
    <script src="./js/app.js"></script>
    <script src="vali.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>