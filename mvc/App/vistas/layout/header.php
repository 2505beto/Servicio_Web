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
   <div class="row">
     <div class="col">
                <?php
                echo "<li><a href='index.php?bienvenido'>Inicio</a></li>";
                switch($_SESSION["tipo"]){
                case "estudiante":
                echo "Estudiante
                 <li><a href='#'>Ver Notas</a></li>
                <li> <a href='#'>Matricula</a></li>";

                case "profesor":
                echo "Profesor
                <li><a href='#'>Ver Cursos a Cargo</a></li>";    
    
                case "administrador":
                echo "Administrador
                <li><a href='index.php?crear-usuarios'>Crear Usuario</a></li>
                <li><a href='index.php?crear-plan'>Crear Plan de Estudios</a></li>
                <li><a href='index.php?asignar-cursos'>Asignar Cursos</a></li>";
                }
                echo "<a href='logout.php'>Salir</a>";
                ?>
       </div>
    <div class="col-9">                      

