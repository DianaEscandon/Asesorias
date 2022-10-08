<?php
include('../config/config.php');
include('cliente.php');
$p= new Cliente();
$data = mysqli_fetch_object($p->getOne($_GET['id' ]));
$data=new DateTime($data->sessionDate);
if(isset ($_POST) && !empty($_POST)){
    $_POST['image'] = $data->image;
    if($_FILES['image']['name'] !== ''){
        $_POST['image']= saveImage($_FILES);
}
$update=$p->update($_POST);
if ($update){
    $error='<div class="alert alert-success" role="alert"> Paciente modificado correctamente</div>';

}else{
    $error = 'div class="alert alert danger"role="alert"> Error al modificar un paciente </div>';
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Modificar Paciente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
       <?php include('../menu.php')?>
<div class="container">
    <?php 
    if (isset($error)){
     echo$error;
    }
    ?>
    <h2 class="text-center mb-5"> Modificar paciente</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class ="col">
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombre Cliente" require class="form-control" value="<?= $data->Nombres?>"/>
                <input type="hidden" name="id" id="id" value="<?= $data->id?>">
            </div>
            <div class="col">
            <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos Cliente" require class="form-control" value="<?= $data->Apellidos?>"/>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
            <input type="text" name="Correo" id="Correo" placeholder="Correo Cliente" require class="form-control" value="<?= $data->Correo?>"/>  
            </div>
            <div class="col">
            <input type="number" name="Numero" id="Numero" placeholder="Numero Cliente" require class="form-control" value="<?= $data->Numero?>"/>
            </div>
        </div>
        <button class="btn btn-success"> Modificar</button>
    </form>
</div>
</body>
</html>
