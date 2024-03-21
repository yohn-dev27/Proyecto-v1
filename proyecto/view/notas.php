<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<title>Consulta de Notas</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    form {
        margin: 20px auto;
        text-align: center;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    #volver {
        text-align: center;
        margin-top: 20px;
    }
</style>
</head>
<body>
    <form id="notasForm">
        <label for="documento">Número de Documento:</label>
        <input type="text" id="documento" name="documento" required>
        <button type="submit">Consultar</button>
    </form>
    
    <div id="tablaNotas"></div>

    <div id="volver">
        <button onclick="volverAlMenu()">Volver al Menú</button>
    </div>

    <script>
        document.getElementById("notasForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Obtiene el número de documento ingresado por el usuario
            var documento = document.getElementById("documento").value;

            // Realiza una solicitud AJAX para obtener la información de notas
            // (En este ejemplo, asumiremos que los datos son proporcionados por un servidor)
            // Aquí puedes implementar la lógica para obtener los datos del servidor

            // Supongamos que recibimos los datos de notas en formato JSON
            var datosNotas = {
                "semestre1": {
                    "Materia1": 4.5,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    // Agrega más materias según sea necesario
                },
                "semestre2": {
                    "Materia3": 4.2,
                    "Materia4": 3.9,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    // Agrega más materias según sea necesario
                },
                "semestre3": {
                    "Materia1": 4.5,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    // Agrega más materias según sea necesario
                },
                "semestre4": {
                    "Materia3": 4.2,
                    "Materia4": 3.9,
                    "Materia2": 3.7,
                    "Materia2": 3.7,
                    // Agrega más materias según sea necesario
                }
                // Agrega más semestres según sea necesario
                
            };

            // Construye la tabla de notas
            var tablaHTML = "<h2>Notas por Semestre</h2>";
            tablaHTML += "<table>";
            tablaHTML += "<tr><th>Semestre</th><th>Materia</th><th>Nota</th></tr>";
            
            for (var semestre in datosNotas) {
                for (var materia in datosNotas[semestre]) {
                    tablaHTML += "<tr>";
                    if (materia === Object.keys(datosNotas[semestre])[0]) {
                        tablaHTML += "<td rowspan=" + Object.keys(datosNotas[semestre]).length + ">" + semestre + "</td>";
                    }
                    tablaHTML += "<td>" + materia + "</td>";
                    tablaHTML += "<td>" + datosNotas[semestre][materia] + "</td>";
                    tablaHTML += "</tr>";
                }
            }
            tablaHTML += "</table>";

            document.getElementById("tablaNotas").innerHTML = tablaHTML;
        });

        function volverAlMenu() {
            window.location.href = "home.php"; // Cambia "menu.html" al archivo de tu menú principal
        }
    </script>
</body>
</html>
