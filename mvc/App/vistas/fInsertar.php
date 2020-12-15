<?php
    use App\Controladores\ControladorFacultad;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Facultad">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $nombre = $_POST["nombre"];
   
   $controladorFacultad = new ControladorFacultad();
   $controladorFacultad->guardar($nombre);
}
