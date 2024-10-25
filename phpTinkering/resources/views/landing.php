
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectePHP</title>
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
        <h1>Projecte PHP</h1>
    </header>
    <section id="about">
        <h2>¿Que fem en este projecte?</h2>
        <p>Este projecte tracta.</p>
    </section>
    <section id="features">
        <h2>Características</h2>
        <ul>
            <li>Funcionalitat 1</li>

        </ul>
    </section>
    <footer>
        <p>&copy; 2024</p>
    </footer>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    section {
        margin: 20px;
        padding: 20px;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    nav ul {
        list-style-type: none;
        display: flex;
        gap: 15px;
    }
    nav ul li {
        display: inline;
    }
    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
</style>
