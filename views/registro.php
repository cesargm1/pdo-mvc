<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/assets/css/registro.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="/auth/procesar_registro.php" method="POST" class="registro-form">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required maxlength="50">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required minlength="6">

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="trabajador">Trabajador</option>
                <option value="encargado">Encargado</option>
                <option value="directivo">Directivo</option>
            </select>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
