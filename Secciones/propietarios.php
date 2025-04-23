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
        <h1>Registro de Propietarios</h1>
    </header>

    <main>
        <form class="formulario" method="post">
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" required>
                </div>

                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input type="number" id="cedula" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="torre">Torre:</label>
                    <input type="text" id="torre" required>
                </div>

                <div class="form-group">
                    <label for="apartamento">Apartamento:</label>
                    <input type="text" id="apartamento" required>
                </div>
            </div>

            <div class="botones">
                <button type="submit" class="btn-registrar">Registrar Propietario</button>
                <a href="http://localhost:63342/Pagina_web/index.php?_ijt=766pofcrqqd8fumioh5t5gn19i&_ij_reload=RELOAD_ON_SAVE" class="btn-volver">Volver al Inicio</a>
            </div>
        </form>

        <!-- php registrar-->
        <?php
        include("registrar.php");
        ?>


    </main>

    <script src="script-form.js"></script>
</body>
</html>