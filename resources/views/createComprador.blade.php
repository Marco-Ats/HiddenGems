<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear formulario</h1>
    <form action="{{ route('comprador.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre_completo">Nombre del Comprador:</label>
        <input type="text" id="nombre_completo" name="nombre_completo" required>
    </div>

    <div class="form-group">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required>
    </div>

    <div class="form-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
    </div>

    <button type="submit">Guardar</button>
</form>
</body>
</html>