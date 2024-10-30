<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectePHP</title>
</head>
<body>
<header>
    <?php include 'navbar.blade.php'; ?>
    <h1>Projecte Florian Heius</h1>
</header>

<section id="about">
    <h2>Sobre el projecte</h2>
    <p>En este projecte utilitzarem dos taules , la primera sobre pel·licules i la segona sobre models de vehicles.
        A les dos taules es permetra fer el CRUD per la gestio de les seves dades
    </p>

</section>

<section id="features">
    <h2>Caracteristiques principals</h2>
    <ul>
        <li><strong>Gestio de pel·licules:</strong> Creacio , edicio y eliminacio de pel·licules.</li>
        <li><strong>Gestio de models:</strong> Administracio per a models de vehicles.</li>
    </ul>
</section>

<section id="cta">
    <h2>Taules</h2>
    <p>Aqui estan les dos taules creades en este projecte</p>
    <a href="/films" class="button">Pel·licules</a>
    <a href="/models" class="button">Models</a>
</section>
<footer>
    <p>&copy; 2024 ProjectePHP. Florian Heius</p>
</footer>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 30px;
        text-align: center;
    }

    header p {
        font-size: 1.2em;
        margin: 10px 0;
    }

    section {
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    section h2 {
        color: #333;
    }

    #features ul {
        list-style: none;
        padding: 0;
    }

    #features ul li {
        margin: 10px 0;
        padding-left: 15px;
        position: relative;
    }

    #features ul li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #4CAF50;
    }

    #cta {
        text-align: center;
        margin: 40px 0;
    }

    .button {
        background-color: #4CAF50;
        color: #fff;
        padding: 12px 25px;
        text-decoration: none;
        border-radius: 5px;
        margin: 10px;
        display: inline-block;
        font-weight: bold;
    }

    .button:hover {
        background-color: #45a049;
    }

    #technologies {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        text-align: center;
    }

    .tech-icons {
        display: flex;
        gap: 30px;
        justify-content: center;
    }

    .icon {
        text-align: center;
        width: 100px;
    }

    .icon img {
        width: 50px;
        height: 50px;
        margin-bottom: 5px;
    }

    footer {
        text-align: center;
        padding: 15px;
        background-color: #333;
        color: #fff;
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>
