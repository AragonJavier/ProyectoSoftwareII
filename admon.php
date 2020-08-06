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
                <li><a class="main_nav__link" href="IngresarCalificaciones.php">Inngresar Calificaciones<a></li>
                <li><a class="main_nav__link" href="GestionarCobros.php">Gestionar Cobros</a></li>
                <li><a class="main_nav__link" href="Docentes.php">Docentes</a></li>
                <li><a class="main_nav__link" href="Contabilidad.php">Contabilidad</a></li>
                <li><a class="main_nav__link" href="Mantenimiento.php">Mantenimiento</a></li>
            </ol>
        </nav>
    </div>

    <form action="RegEstudiante.php" method="post" class="frm_registrar container card-header form-inline">
        <h1 class="title_admon">Información del Estudiante</h1>
        <div class="frm_main form-group mb-2" >
            <label for="">Nombre completo</label>
            <input type="text" name="nombre" id="nombre">
            <label for="">Apellido Partenal</label>
            <input type="text" name="apellido" id="apellido">
            <label for="">Apellido Martenal</label>
            <input type="text" name="apellido" id="apellido">
        </div>
        <div>
            <label for="">Edad</label>
            <select name="" id="edad">
                <?php for ($i=1; $i<=100; $i++) { ?>
                    <option value="<?php echo $i;?>">
                        <?php echo $i; ?>
                    </option>
                <?php
                }
            ?>
            </select>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha" id="fecha">
            <label for="">Departamento</label>
            <select name="" id="edad">
                <?php
                for ($i=1; $i<=100; $i++)  {?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
            ?>
            </select>
        </div>
        <div>
            <label for="">Ciudad</label>
            <select name="" id="edad">
                <?php for ($i=1; $i<=100; $i++) { ?>
                    <option value="<?php echo $i;?>">
                        <?php echo $i; ?>
                    </option>
                <?php
                }
            ?>
            </select>
            <label for="">Tipo de Ingreso</label>
             <select name="" id="">
                 <option value="1"> Primer ingreso</option>
                 <option value="2">Reingreso</option>
             </select>
            <label for="">Fecha de Ingreso</label>
            <input type="date" name="fecha" id="fecha">
        </div>
        <div>
            <label for="">Cursos</label>
            <select name="" id="">
                <option value="1">Ciclo Común</option>
                <option value="2">BTP Computación</option>
                <option value="3">BTP Administración</option>
                <option value="4">BTP Finanza</option>
            </select>
            <label for="">Grado</label>
            <select name="" id="">
                <option value="1"> 7mo Grado</option>
                <option value="2">8avo Grado</option>
                <option value="3">9no Grado</option>
                <option value="3">10mo Grado</option>
                <option value="3">11avo Grado</option>
            </select>
        </div>
    </form>

    <form class=" container card-header frm_registrar " action="" >
        <h1 class="frm_registrar__tilte">Información del Padre</h1>
        <div class="frm_main">
            <label for="">Nombre completo</label>
            <input type="text" name="nombre" id="nombre">
            <label for="">Apellido Partenal</label>
            <input type="text" name="apellido" id="apellido">
            <label for="">Apellido Martenal</label>
            <input type="text" name="apellido" id="apellido">
        </div>
        <div>
            <label for="">Edad</label>
            <select name="" id="edad">
                <?php for ($i=1; $i<=100; $i++) { ?>
                    <option value="<?php echo $i;?>">
                        <?php echo $i; ?>
                    </option>
                <?php
                }
            ?>
            </select>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha" id="fecha">
            <label for="">Nº de Identidad</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Numero Telefonico</label>
            <input type="tel" name="" id="tel">
            <label for="">Dirrecion</label>
             <textarea name="address" id="address" cols="30" rows="" ></textarea>
            </div>
            <div btn_save>
                <input class="btn btn-primary" type="submit" value="guardar">
                <input  class="btn btn-info"type="submit" value="imprimir">

            </div>
    </form>
</body>

</html>