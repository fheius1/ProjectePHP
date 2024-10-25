<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Eliminar Modelo</h1>
    <p>¿Vols eliminar el modelo "<?= htmlspecialchars($model->model) ?>" de la marca "<?= htmlspecialchars($model->marca) ?>"?</p>
    <form action="/destroy" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?= htmlspecialchars($model->id) ?>">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
    </form>
    <a href="/" class="text-gray-500 hover:underline mt-4 block">Cancelar</a>
</div>
</body>
</html>
