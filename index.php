<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="public/styles/styles.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>
    <h1>BIENVENID@, REGISTRA TUS ASISTENCIA:</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <a href="vista/login/login.php" class="acceso">Ingresar al Sistema</a>
        <p class="dni">Ingrese su DNI</p>
        <form action="">
            <input type="text" name="txtdni" placeholder="DNI del empleado" 
            required>
            <div class="botones">
                <a href="" class="entrada">Entrada</a>
                <a href="" class="salida">Salida</a>
            </div>
        </form>
    </div>

    <script>
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById('fecha').textContent = fechaHora;
        }, 1000);
    </script>
</body>

</html>