<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<header>
    <nav class="bg-white shadow-md rounded-lg p-4 mb-6">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <div>
                <li><a href="/">Inici</a></li>
                <li><a href="/films">Películes</a></li>
                <li><a href="/models">Vehicles</a></li>
            </div>
        </div>
    </nav>

</header>

<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Films</h1>
    <a href="/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Film</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Director</th>
            <th class="py-3 px-6 text-left">Year</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($films)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha pelis disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($films as $film): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$film['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['name']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['director']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['year']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/edit/<?= $film['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/delete/<?= $film['id'] ?>" class="text-red-500 hover:text-red-700 ">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
    </table>
</div>
</body>
</html>

<style>
    header {
        background-color: #333;
        padding: 10px 20px;
    }

    nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 8px 12px;
        transition: background-color 0.3s, color 0.3s;
    }

    nav ul li a:hover {
        background-color: #4CAF50;
        color: #fff;
        border-radius: 5px;
    }
</style>