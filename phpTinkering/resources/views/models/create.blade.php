<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Agregar Nuevo Modelo</h1>
    <form action="/models/store" method="POST">
        <div class="mb-4">
            <label for="marca" class="block text-sm font-medium text-gray-700">Marca:</label>
            <input type="text" name="marca" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Ingrese la marca del modelo">
        </div>

        <div class="mb-4">
            <label for="model" class="block text-sm font-medium text-gray-700">Modelo:</label>
            <input type="text" name="model" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Ingrese el modelo">
        </div>

        <div class="mb-4">
            <label for="any" class="block text-sm font-medium text-gray-700">Año de Fabricación:</label>
            <input type="number" name="any" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Ingrese el año de fabricación">
        </div>

        <div class="mb-4">
            <label for="preu" class="block text-sm font-medium text-gray-700">Precio:</label>
            <input type="number" step="0.01" name="preu" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Ingrese el precio">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Agregar Modelo</button>
    </form>
</div>
</body>
</html>
