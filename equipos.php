<!DOCTYPE html>
<html>

<head>
    <title>Formulario de equipos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/equipos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/css/alertify.min.css"/>
</head>

<body>
    <!-- Barra vertical -->
    <?php include('complementos/menu.php') ?>

    <!-- Contenido principal -->
    <div class="main">
        <h2>Agregar equipo</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <form action="controladores/equipos.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre de equipo:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Ingrese el nombre de equipo">
                        </div>
                        <div class="form-group">
                            <label for="presidente">Presidente:</label>
                            <input type="text" class="form-control" id="presidente" name='presidente'
                                placeholder="Ingrese el nombre del presidente">
                        </div>
                        <div class="form-group">
                            <label for="entrenador">Entrenador:</label>
                            <input type="text" class="form-control" id="entrenador" name='entrenador'
                                placeholder="Ingrese el nombre del entrenador">
                        </div>
                        <div class="form-group">
                            <label for="escudo">Escudo:</label>
                            <input type="file" class="form-control-file" id="escudo" name='escudo'>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/equipos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/js/alertify.min.js"></script>
</body>

</html>