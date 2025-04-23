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
  <h1>Registro de Bicicletas</h1>
</header>

<main>
  <form class="formulario">
    <div class="form-grid">
      <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" required>
      </div>

      <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" required>
      </div>

      <div class="form-group">
        <label for="color">Color:</label>
        <input type="text" id="color" required>
      </div>

      <div class="form-group">
        <label for="N_serie">Numero de serie:</label>
        <input type="text" id="N_serie" required>
      </div>

    </div>

    <div class="botones">
      <button type="submit" class="btn-registrar">Registrar Bicicleta</button>
      <a href="http://localhost:63342/Pagina_web/index.php?_ijt=766pofcrqqd8fumioh5t5gn19i&_ij_reload=RELOAD_ON_SAVE" class="btn-volver">Volver al Inicio</a>
    </div>
  </form>
    <!-- php registrar-->
    <?php
    include("registrar.php");
    ?>
</main>

<script src="script-form2.js"></script>
</body>
</html>