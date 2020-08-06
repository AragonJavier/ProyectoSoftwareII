<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="main_header">
        <h2>Bienvenido:&nombre</h2>
        <h3>cuenta:&cuenta</h3>
    </header>
    <div class="main_nav">
        <nav>
            <ol class="main_nav__item">
                <li><a class="main_nav__link" href="admon.php">Regisrar Estudiante</a></li>
                <li><a class="main_nav__link" href="calificaciones.php">Ingresar Calificaciones<a></li>
                <li><a class="main_nav__link" href="GestionarCobros.php">Gestionar Cobros</a></li>
                <li><a class="main_nav__link" href="Docentes.php">Docentes</a></li>
                <li><a class="main_nav__link" href="Contabilidad.php">Contabilidad</a></li>
                <li><a class="main_nav__link" href="Mantenimiento.php">Mantenimiento</a></li>
            </ol>
        </nav>
    </div>

    <form action="calificaciones.php" class="form-inline">
        <h1 class="title_frm">Registrar Calificaciones</h1>
        <div class="form-group row">
<label for="">Buscar ID</label>
<input class="form-control " type="text" name="id" id="id" required>
<input class="form-control " type="text" name="id" id="id" placeholder="Alumno">
        </div>
    </form>
</body>
</html>