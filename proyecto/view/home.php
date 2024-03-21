<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interfaz Gráfica</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    nav {
        background-color: #4CAF50;
        text-align: center;
        padding: 20px 0;
        margin: 0; /* Eliminar el margen */
        width: 100%;
    }
    nav h1 {
        color: white;
        margin: 0; /* Eliminar el margen */
    }
    .opciones-container {
        display: flex;
        justify-content: center; /* Centrar horizontalmente */
        flex-direction: column;
        align-items: center; /* Centrar verticalmente */
        padding: 20px;
    }
    .fila-opciones {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        width: 100%;
    }
    .opcion {
        width: 200px;
        height: 200px;
        background-color: #3498db;
        margin: 10px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    .opcion:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
    .opcion a {
        text-decoration: none;
        color: white;
        font-size: 20px;
    }
</style>
</head>
<body>
    <nav>
        <h1>Bienvenido</h1>
    </nav>
    <div class="opciones-container">
        <div class="fila-opciones">
            <div class="opcion">
                <a href="curso.html">Curso</a>
            </div>
            <div class="opcion">
                <a href="intercambio.php">Intercambio</a>
            </div>
        </div>
        <div class="fila-opciones">
            <div class="opcion">
                <a href="comunicacion.html">Comunicación</a>
            </div>
            <div class="opcion">
                <a href="notas.php">Notas</a>
            </div>
        </div>
    </div>
</body>
</html>
