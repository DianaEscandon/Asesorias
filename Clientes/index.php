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
    <head>
        <meta charset="UTF.8"/>
        <div class=container>
            <h2 class= text.center mb-5> Lista Clientes</h2>
            <div class="row">
                <?php
               while($Clientes= mysqli_fetch_object($allclientes)){
                $input = $Clientes->sessionDate;
                echo"<div class='col'>";
                echo"div class=border border-info p-2'>";
                echo"<h5>
                <img src' ".ROOT. "./images/$clientes->image' width= '50' height= '50'/>
                $clientes->nombres $clientes-> apellidos
                </h5>";
                echo = "<p> <b> Fecha:</b>" .date("D",strtotime($iinput)). " " . date("d-M-Y H:i", strtotime($input)). "</p>";
                echo=<div class='text-center'><a class='btn btn-success' href='". ROOT ."/Clientes/edit.php?id=$Clientes->id'> Modificar </a> - <a class='btn btn-danger' href='" . ROOT . "/Clientes/index.php?id= $Clientes->id"> Eliminar </a> </div>";
                echo="</div>";
                echo="</div>";
               }
               ?>
            </div>
        </div>
    </head>
</html>