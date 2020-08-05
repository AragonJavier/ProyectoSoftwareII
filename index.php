<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post" >
        <h1>Iniciar Sesion</h1>
        <div id="form" class="form-group">
                <label for="">Usuario</label>
                <input class="form-control" type="text" name="usuario" id=" usuario" placeholder="Usuario">
            </div>
            <div id="form" class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                <input  class="btn btn-primary" type="submit" value="Iniciar Sesión">
        </div>
    </form>
</body>

</html>