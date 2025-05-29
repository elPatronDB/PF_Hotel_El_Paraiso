<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hotel El Paraíso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="font-family: 'Cinzel', serif;">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-family: 'Cinzel', serif; font-size: 1.5rem;">Hotel El Paraíso</a>
            <div class="ms-auto">
                <a href="index.php" class="btn btn-outline-danger">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Dashboard -->
    <div class="container my-5">
        <h1 class="text-center" style="font-family: 'Cinzel', serif;">Gestión de Habitaciones</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $habitaciones = [
                ['numero' => 1, 'estado' => 'Vacía', 'huesped' => ''],
                ['numero' => 2, 'estado' => 'Ocupada', 'huesped' => 'Juan Pérez'],
                ['numero' => 3, 'estado' => 'Vacía', 'huesped' => ''],
                ['numero' => 4, 'estado' => 'Ocupada', 'huesped' => 'María López'],
                ['numero' => 5, 'estado' => 'Vacía', 'huesped' => ''],
                ['numero' => 6, 'estado' => 'Vacía', 'huesped' => ''],
                ['numero' => 7, 'estado' => 'Ocupada', 'huesped' => 'Carlos Gómez'],
                ['numero' => 8, 'estado' => 'Vacía', 'huesped' => ''],
            ];

            foreach ($habitaciones as $habitacion) {
                $color = $habitacion['estado'] === 'Vacía' ? 'bg-success' : 'bg-warning';
                echo '
                <div class="col">
                    <div class="card text-center ' . $color . ' text-white">
                        <div class="card-body">
                            <h5 class="card-title">Habitación ' . $habitacion['numero'] . '</h5>
                            <p class="card-text">Estado: ' . $habitacion['estado'] . '</p>
                            <p class="card-text">Huésped: ' . ($habitacion['huesped'] ?: 'Ninguno') . '</p>
                            <p class="card-text">Costo: Q. 350.00 por noche</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>