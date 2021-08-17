<?php

$pg="contacto";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">

<?php include_once("header.php"); ?>

    <main>
        <main class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1>Contacto</h1>
                </div>

                <div class="row">

                    <div class="col-12 col-sm-6">
                        <p>Te invito a que te contactes enviándome un mensaje</p>
                            <p class="qr">!Escanea el Código QR y escríbeme!</p>
                        <img class="qrimg" src="images/qr-wp.png"
                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                            alt="">
                    </div>

                    <div class="col-12 col-sm-6">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre y Apellido" class="form-control mb-3" title="Nombre"> 
                        </div>

                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo"  placeholder="Dirección de correo electrónico" class="form-control mb-3">
                        </div>

                        <div>
                            <input type="tel" natelme="txtTelefono id=" txtTelefono" placeholder="Número de Teléfono" mt-5 class="form-control">
                        </div>

                        <div>
                            <textarea type="tel" id="txtMensaje" cols="40" rows="10" placeholder="Escribe aquí tu mensaje"  class="form-control"></textarea>
                        </div>

                        <div>
                            <button type="submit" id="txtEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                        </div>

                    </div>
        </main>

        <?php include_once("footer.php"); ?>

        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541173613310" target="_blank"
                title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>