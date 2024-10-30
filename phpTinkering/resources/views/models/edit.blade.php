<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Modelo</h1>
    <form action="/models-update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($model['id']) ?>">
        <div class="mb-4">
            <label for="marca" class="block text-gray-700">Marca:</label>
            <input type="text" id="marca" name="marca" value="<?= htmlspecialchars($model['marca']) ?>" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="model" class="block text-gray-700">Modelo:</label>
            <input type="text" id="model" name="model" value="<?= htmlspecialchars($model['model']) ?>" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="any" class="block text-gray-700">Año de Fabricación:</label>
            <input type="text" id="any" name="any" value="<?= htmlspecialchars($model['any']) ?>" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="preu" class="block text-gray-700">Precio:</label>
            <input type="text" id="preu" name="preu" value="<?= htmlspecialchars($model['preu']) ?>" class="w-full px-3 py-2 border rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
    </form>
    <a href="/models" class="block text-center text-gray-500 hover:underline mt-4">Cancelar</a>
</div>
</body>
</html>