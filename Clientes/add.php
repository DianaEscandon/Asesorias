<?php
include_once ('../config/config.php');
include ('Cliente.php');

if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new cliente(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
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

<?php include('../menu.php') ?>

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
    <div class="container">
       
        <h2 class="text-center mb-5" >Registrar Asesoria</h2>
        <form method="POST" enctype="multipart/form-data">

            <div class="row mb-2">
                <div class="col-6">  <!-- NO MAYUSCULAS EN NAMES Y ID'S, debe ser igual a la BD -->
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres del cliente" class="form-control" />
                    </div>
                    <div class="col-6">
                        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del cliente" class="form-control"/>

                    </div>
                    <div class="row mb-2">
                <div class="col-6">
                    <input type="text" name="celular" id="celular" placeholder="celular del cliente" class="form-control" />
                    </div>
                    <div class="col-6">
                        <input type="email" name="correo" id="correo" placeholder="correo del cliente" class="form-control"/>
                    </div>
            </div>
            <button class="btn btn-success">Registrar</button>
        </form>
    </div>
</body>
</html>