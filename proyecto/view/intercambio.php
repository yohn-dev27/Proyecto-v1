<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interfaz de Intercambio</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    nav {
        background-color: #4CAF50;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    nav h1 {
        color: white;
        margin: 0;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    nav ul li {
        margin-right: 20px;
    }
    nav ul li:last-child {
        margin-right: 0;
    }
    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
    .sidebar {
        background-color: #3498db;
        width: 200px;
        height: 100%;
        position: fixed;
        top: 48px; /* Ajuste para que comience debajo del nav */
        left: 0;
        overflow-x: hidden;
    }
    .sidebar a {
        padding: 10px;
        text-decoration: none;
        color: white;
        display: block;
    }
    .sidebar a:hover {
        background-color: #2980b9;
    }
    .content {
        margin-left: 200px;
        padding: 20px;
    }
</style>
</head>
<body>
    <nav>
        <h1>Intercambio Educativo</h1>
        <ul>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="#">Saber Más</a></li>
            <li><a href="../index.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <div class="sidebar">
        <a href="#">País 1</a>
        <a href="#">País 2</a>
        <a href="#">País 3</a>
        <a href="#">País 4</a>
    </div>
    <div class="content">
        <h2>Bienvenido al intercambio educativo</h2>
        <p>Seleccione un país para obtener más información.</p>
    </div>
</body>
</html>
