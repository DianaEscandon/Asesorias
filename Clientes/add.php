<?php
include_once ('../config/config.php');
include ('Cliente.php');

if( isset ($_POST) && !empty($_POST) ){
    $p = new cliente();
   

$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class="alert alert-success"> Asesoria Registrada </div>';
    

}else{
    $mensaje='<div class="alert alert-danger"> Error al registrar! </div>';}
}

?>


<!DOCTYPE html>
<html>

<head> 
<meta charset="UTF-8"/>
<title> Registrar Asesoria</title>
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       
        <h2 class="text-center mb-5" >Registrar Asesoria</h2>
        <form method="POST" enctype="multipart/form-data">

            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control" />
                    </div>
                    <div class="col">
                        <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del cliente" class="form-control"/>

                    </div>
                    <div class="row mb-2">
                <div class="col">
                    <input type="email" name="Correo" id="Correo" placeholder="Correo del cliente" class="form-control" />
                    </div>
                    <div class="col">
                        <input type="number" name="Celular" id="Celular" placeholder="Celular del cliente" class="form-control"/>
                    </div>
            </div>
            <button class="btn btn-success">Registrar</button>
        </form>
    </div>
</body>
</html>