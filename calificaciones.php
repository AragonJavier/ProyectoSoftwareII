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

    <form action="calificaciones.php" class="form-inline frm_nota">
        <h1 class="title_father">Registrar Calificaciones</h1>
        <div class="form-group row">
            <label for="">Buscar ID</label>
            <input class="form-control " type="text" name="id" id="id" required>
            <input class="form-control " type="text" name="id" id="id" placeholder="Alumno">
            <label for="">Cursos</label>
            <select name="" id="" class="custom-select">
                <option value="1">Ciclo Común</option>
                <option value="2">BTP Computación</option>
                <option value="3">BTP Administración</option>
                <option value="4">BTP Finanza</option>
            </select>
            <label for="">Grado</label>
            <select name="" id="" class="custom-select">
                <option value="1"> 7mo Grado</option>
                <option value="2">8avo Grado</option>
                <option value="3">9no Grado</option>
                <option value="3">10mo Grado</option>
                <option value="3">11avo Grado</option>
            </select>
        </div>
        <div id="class">
        <label for="">Clase</label>
            <select name="" id="" class="custom-select">
                <option value="1"> Español</option>
                <option value="2">Matemáticas</option>
                <option value="4">Ingles</option>
                <option value="5">Educación Física</option>
                <option value="6">Fé y vida</option>
            </select>
            <input class="form-control" type="text" name="" id="" placeholder="Ingrese la calificación">
        </div>
    </form>
    <div class="btn_save">
        <input class="btn btn-primary " type="submit" value="Guardar">
        <input class="btn btn-info" type="submit" value="imprimir">
    </div>
</body>

</html>