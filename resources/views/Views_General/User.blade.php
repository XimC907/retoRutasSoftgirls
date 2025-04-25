<?php
// Datos simulados del paciente
$paciente = [
    'nombre' => 'Carlos Ramírez',
    'edad' => 34,
    'genero' => 'Masculino',
    'correo' => 'carlos.ramirez@mail.com',
    'telefono' => '555-1234-567',
    'analisis_recientes' => [
        [
            'tipo' => 'Hemograma completo',
            'fecha' => '2025-04-20',
            'resultado' => 'Dentro de los valores normales'
        ],
        [
            'tipo' => 'Glucosa en sangre',
            'fecha' => '2025-04-18',
            'resultado' => 'Levemente elevado'
        ],
        [
            'tipo' => 'Perfil lipídico',
            'fecha' => '2025-03-30',
            'resultado' => 'Colesterol total elevado'
        ],
    ],
    'recomendaciones' => [
        'Reducir el consumo de azúcares y grasas saturadas.',
        'Realizar ejercicio al menos 3 veces por semana.',
        'Realizar un nuevo control de glucosa en un mes.',
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel del Paciente - Laboratorio Clínico</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f0f4f8, #d9e2ec);
            color: #333;
        }
        header {
            background-color: #2b6777;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .container {
            padding: 30px;
            max-width: 900px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2b6777;
            border-bottom: 2px solid #2b6777;
            padding-bottom: 5px;
        }
        .info {
            margin-bottom: 20px;
        }
        .info label {
            font-weight: bold;
            color: #4a4a4a;
        }
        .card {
            background-color: #e4f1fe;
            border-left: 5px solid #2b6777;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
        }
        .recomendacion {
            background-color: #fef9e7;
            border-left: 5px solid #f1c40f;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenido, <?= htmlspecialchars($paciente['nombre']) ?></h1>
    <p>Panel del Paciente - Laboratorio Clínico Ciclobacteriano</p>
</header>

<div class="container">
    <section class="info">
        <h2>Información Personal</h2>
        <p><label>Edad:</label> <?= $paciente['edad'] ?> años</p>
        <p><label>Género:</label> <?= $paciente['genero'] ?></p>
        <p><label>Correo electrónico:</label> <?= $paciente['correo'] ?></p>
        <p><label>Teléfono:</label> <?= $paciente['telefono'] ?></p>
    </section>

    <section>
        <h2>Análisis Recientes</h2>
        <?php foreach ($paciente['analisis_recientes'] as $analisis): ?>
            <div class="card">
                <strong><?= $analisis['tipo'] ?></strong><br>
                Fecha: <?= $analisis['fecha'] ?><br>
                Resultado: <?= $analisis['resultado'] ?>
            </div>
        <?php endforeach; ?>
    </section>

    <section>
        <h2>Recomendaciones Médicas</h2>
        <?php foreach ($paciente['recomendaciones'] as $rec): ?>
            <div class="recomendacion">
                <?= $rec ?>
            </div>
        <?php endforeach; ?>
    </section>
</div>

<footer>
    &copy; 2025 Laboratorio Clínico Vida Sana. Todos los derechos reservados.
</footer>

</body>
</html>
