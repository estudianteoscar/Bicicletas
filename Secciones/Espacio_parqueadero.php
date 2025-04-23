<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Propietarios</title>
    <link rel="stylesheet" href="secciones.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header>
    <h1>Registro Espacio de parqueadero</h1>
</header>

<main>
    <form class="formulario">
        <div class="form-grid">
            <div class="form-group">
                <label for="gancho">Gancho Asignado:</label>
                <input type="text" id="gancho" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" placeholder="Disponible o ocupado" required>
            </div>

        </div>

        <div class="botones">
            <button type="submit" class="btn-registrar">Registrar Bicicleta</button>
            <a href="http://localhost:63342/Pagina_web/index.php?_ijt=766pofcrqqd8fumioh5t5gn19i&_ij_reload=RELOAD_ON_SAVE"
               class="btn-volver">Volver al Inicio</a>
        </div>
    </form>
    <!-- php registrar-->
    <?php
    include("registrar.php");
    ?>
</main>

<script src="script-form3.js"></script>
</body>
</html>