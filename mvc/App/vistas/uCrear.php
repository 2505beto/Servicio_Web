<?php
declare(strict_types=1);
use App\Controladores\ControladorUsuario;
include_once "includes/autoload.php";

session_start();
include_once "layout/header.php";
?>
<h1>Crear Usuarios</h1>
<form method="post" action="index.php?guardar-usuario">
    <div class="container">
    <input class="form-control mb-2" type="text" name="nombres" placeholder="Ingrese Nombres">
    <input class="form-control mb-2" type="text" name="apellidos" placeholder="Ingrese Apellidos">
    <input class="form-control mb-2" type="number" name="codigo" placeholder="Ingrese Codigo/DNI">
    <input class="form-control mb-2" type="password" name="password" placeholder="Ingrese Contraseña">
    <select class="form-control mb-2" name="tipo">
        <option value="administrador">Administrador</option>
        <option value="profesor">Profesor</option>
        <option value="estudiante">Estudiante</option>
    </select>
    <input class="btn btn-primary" type="submit" name="submit"  value="Guardar">
    </div>
</form>

<?php
if (isset($_POST["submit"])) {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = $_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];
    
    $controladorUsuario = new ControladorUsuario();
    $respuesta = $controladorUsuario->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
    echo $respuesta;
}
include_once "layout/footer.php";
