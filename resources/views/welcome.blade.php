<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio Ciclobacteriano</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body estilo modo oscuro */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
        }

        header {
            background-color: #1f1f1f;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 255, 255, 0.05);
        }

        header h1 {
            font-size: 2.8em;
            color: #00eaff;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid #00eaff;
            width: 0;
            animation: typing 3s steps(30, end) forwards, blink 0.8s infinite;
            margin: 0 auto 15px auto;
        }

        header p {
            font-size: 1.1em;
            color: #cccccc;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        nav {
            background-color: #1a1a1a;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        nav a {
            text-decoration: none;
            color: #00eaff;
            margin: 0 20px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #1effff;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588776814546-ec7d4f6cbcd1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }

        .hero h2 {
            font-size: 3em;
        }

        .content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
        }

        .section {
            margin-bottom: 40px;
            text-align: center;
        }

        .section h3 {
            font-size: 2em;
            color: #00eaff;
            margin-bottom: 20px;
        }

        .section p {
            color: #bbbbbb;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .service-card {
            background: #1e1e1e;
            width: 280px;
            margin: 15px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,255,255,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,255,255,0.2);
        }

        .service-card h4 {
            color: #1effff;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 0.95em;
            color: #ccc;
        }

        footer {
            background-color: #1a1a1a;
            color: #aaa;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            border-top: 1px solid #333;
        }

        footer p {
            margin: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<header>
    <h1>Laboratorio Ciclobacteriano</h1>
    <p>Comprometidos con tu salud y bienestar</p>
</header>

<nav>
    <a href="#">Inicio</a>
    <a href="#">Servicios</a>
    <a href="#">Nosotros</a>
    <a href="#">Contacto</a>
</nav>

<section class="hero">
    <h2>Resultados confiables, atención humana</h2>
</section>

<div class="content">
    <section class="section">
        <h3>¿Por qué elegirnos?</h3>
        <p>En Ciclobacteriano, fusionamos tecnología avanzada con atención cálida para brindarte análisis clínicos precisos, rápidos y humanos.</p>
    </section>

    <section class="section">
        <h3>Nuestros Servicios</h3>
        <div class="services">
            <div class="service-card">
                <h4>Pruebas de Sangre</h4>
                <p>Resultados confiables para diagnósticos precisos. Desde hemogramas hasta perfiles hormonales.</p>
            </div>
            <div class="service-card">
                <h4>Pruebas de COVID-19</h4>
                <p>RT-PCR, antígeno y anticuerpos con entrega rápida y atención segura.</p>
            </div>
            <div class="service-card">
                <h4>Perfil Bioquímico</h4>
                <p>Chequeos completos de glucosa, colesterol, triglicéridos, entre otros.</p>
            </div>
        </div>
    </section>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Laboratorio Ciclobacteriano</p>
    <p>Tel: +52 555-123-4567 | contacto@ciclobacteriano.com</p>
</footer>

</body>
</html>
