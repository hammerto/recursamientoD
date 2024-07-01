<?php
require_once __DIR__ . '/database/db.php';

// Recuperar los datos de la tabla 'tipos'
$query = $pdo->query("SELECT id_tipo, tipo FROM tipos");
$tipos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Formulario de Alumnos Nivelación</title>
</head>
<body>
<div class="container">
    <h1>Registro de Alumnos</h1>
    <form action="/ruta-de-tu-servidor" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="50" required>

        <label for="ap">Apellido Paterno:</label>
        <input type="text" id="ap" name="ap" maxlength="50" required>

        <label for="am">Apellido Materno:</label>
        <input type="text" id="am" name="am" maxlength="50" required>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" maxlength="50" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" maxlength="50" required>

        <label for="id_tipo">Tipo de Nivelación:</label>
        <select id="id_tipo" name="id_tipo" required>
            <option value="" disabled selected>Selecciona un Tipo de usuario</option>
            <?php foreach ($tipos as $tipo): ?>
                <option value="<?= htmlspecialchars($tipo['id_tipo']) ?>"><?= htmlspecialchars($tipo['tipo']) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Registrar</button>
    </form>
</div>
</body>
</html>
