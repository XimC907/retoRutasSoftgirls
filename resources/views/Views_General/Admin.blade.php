<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador | Ciclobacteriano</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body, html {
            height: 100%;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: linear-gradient(to right, #0077b6, #00b4d8);
            padding: 20px;
            color: white;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav {
            background-color: #023e8a;
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #90e0ef;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 142px);
            padding: 30px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(2, 300px);
            grid-template-rows: auto auto;
            grid-template-areas:
                "pacientes pruebas"
                "pendientes ingresos";
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #0077b6;
            margin-bottom: 10px;
        }

        .pacientes { grid-area: pacientes; }
        .pruebas { grid-area: pruebas; }
        .pendientes { grid-area: pendientes; }
        .ingresos { grid-area: ingresos; }
    </style>
</head>
<body>
    <header>
        <h1>Panel de Administración - Laboratorio Ciclobacteriano</h1>
        <p>Bienvenido, Administrador</p>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Resultados</a>
        <a href="#">Pacientes</a>
        <a href="#">Reportes</a>
        <a href="#">Configuraciones</a>
    </nav>

    <div class="container">
        <section class="dashboard">
            <div class="card pacientes">
                <h3>Pacientes registrados</h3>
                <p><?php echo rand(1200, 1800); ?> pacientes</p>
            </div>
            <div class="card pruebas">
                <h3>Pruebas del día</h3>
                <p><?php echo rand(50, 100); ?> análisis en curso</p>
            </div>
            <div class="card pendientes">
                <h3>Resultados pendientes</h3>
                <p><?php echo rand(20, 50); ?> por revisar</p>
            </div>
            <div class="card ingresos">
                <h3>Ingresos mensuales</h3>
                <p>$<?php echo number_format(rand(50000, 120000), 2); ?></p>
            </div>
        </section>
    </div>
</body>
</html>
