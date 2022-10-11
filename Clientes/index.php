<?php 
include('../config/config.php');
include('Cliente.php');
$p= new cliente();

$allclientes = $p -> getAll();

if (isset($_GET['id'])&& !empty($_GET['id'])) {
$remove = $p->remove($_GET['id']);
if($remove) {
    header('location: '.ROOT. 'Clientes/index.php');
}else{
    $msj = "<div class= 'alert alert-danger' rol='alert'> Erro al eliminar agenda. </div>";

}
}
?>
<!DOCTYPE html>
<html>
<head> <!-- HEAD INCOMPLETO Y ESTABA ENCERRANDO TODO EL BODY -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body> <!-- FALTABA EL BODY, OJO CON LA ESTRUCTURA BASICA -->
<?php include('../menu.php'); ?>

        <div class=container>
            <h2 class= text.center mb-5> Lista Clientes</h2>
            <div class="row">
                <?php
               while($usuarios= mysqli_fetch_object($allclientes)){
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $usuarios->Nombres</h5>";
                echo "<h5>Apellidos: $usuarios->Apellidos</h5>";
                echo "<p><b>Celular:</b> $usuarios->Celular 
                <br>
                <b> Correo: </b>  $usuarios->Correo
                </p>";
                

                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Clientes/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Clientes/index.php?id=$usuarios->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
               }
               ?>
            </div>
        </div>
        </body>
</html>