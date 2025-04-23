<?php

//global $conex;
include("con_db.php");

/**
 * if(!$conex)
 * {
 * die("conexion fallida" . mysqli_connect_error()); //mensaje de error
 * }else{
 * echo "conexion exitosa";
 *
 * } */
if (isset($_POST['submit'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['cedula']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['torre']) >= 1 && strlen($_POST['apartamento']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $torre = trim($_POST['torre']);
        $apartamento = trim($_POST['apartamento']);
        $consulta = "INSERT INTO propietarios(Nombre, Apellido, Cedula, Telefono, Email, Torre, Apartamento) VALUES ('$nombre','$apellido','$cedula','$telefono','$email','$torre','$apartamento') ";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Registro exitoso</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">!Ups ha ocurrido un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor completa todos los campos!</h3>
        <?php
    }
}
?>
