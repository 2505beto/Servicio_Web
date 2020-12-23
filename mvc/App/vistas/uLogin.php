<?php
    use App\Controladores\ControladorUsuario;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container">
<div class="row">
    <div class="col">
        <nav  class="navbar navbar-light" style="background-color: #43DE7D;">
            <div class="container-fluid">
                Universidad
            </div>
        </nav>
    </div>
</div>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <div class="container">
    <h1>Inicio de Sesion</h1>
    <input class="form-control mb-2" type="text" name="codigo" placeholder="Ingrese su Codigo">
    <input class="form-control mb-2" type="password" name="pass" placeholder="Ingrese su Contraseña">
    <input class="btn btn-primary" type="submit" name="submit" value="Login">
    </div>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
</form>
<?php
    if (isset($_POST["submit"])) {
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        include_once "App/Controladores/ControladorUsuario.php";
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->Login($codigo, $password);
    }