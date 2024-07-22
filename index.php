<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño Responsivo</title>
    <style>
        /* Estilos básicos del cuerpo */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Contenedor principal */
        .container {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Estilos de la cabecera */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Estilos del contenido */
        main {
            flex: 1;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Estilos del pie de página */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Cabecera</h1>
    </header>
    <div class="container">
        <main>
            <h2>Contenido Principal</h2>
            <p>Este es el contenido principal de la página. Se ajusta automáticamente al tamaño de la pantalla.</p>
        </main>
    </div>
    <footer>
        <p>Pie de Página</p>
    </footer>
</body>

</html>
