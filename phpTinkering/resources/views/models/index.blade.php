<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
<nav class="bg-white shadow-md rounded-lg p-4 mb-6">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
        <div>
            <li><a href="/">Inici</a></li>
            <li><a href="/films">Películes</a></li>
            <li><a href="/models">Vehicles</a></li>
        </div>
    </div>
</nav>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Models</h1>
    <a href="/models/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Model</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Marca</th>
            <th class="py-3 px-6 text-left">Model</th>
            <th class="py-3 px-6 text-left">Any Fabricació</th>
            <th class="py-3 px-6 text-left">Preu</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($models)): ?>
        <tr>
            <td colspan="6" class="py-3 px-6 text-center">No hi ha models disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($models as $model): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?= htmlspecialchars($model['id']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($model['marca']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($model['model']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($model['any']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars(number_format($model['preu'], 2, ',', '.')) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/models-edit/<?= $model['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/models-delete/<?= $model['id'] ?>" class="text-red-500 hover:text-red-700">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
