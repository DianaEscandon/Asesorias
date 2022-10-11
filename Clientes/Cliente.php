<?php
include('../config/database.php'); /* CONEXION A LA BD */
include_once('../config/config.php');
class cliente{
    public $conexion;

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }
function save($params){

    $nombres = $params ['nombres'];
    $apellidos = $params['apellidos'];
    $celular = $params['celular'];
    $correo = $params['correo'];

    $insert= "INSERT INTO clientes VALUES (NULL, '$nombres', '$apellidos', '$celular', '$correo')";
    return mysqli_query($this->conexion,$insert);
}
function getAll(){
    $sql = "SELECT * FROM clientes ";
    return mysqli_query($this->conexion, $sql);

}
function getOne($id){
$sql="SELECT * FROM clientes WHERE id = $id"; 
return mysqli_query($this->conexion, $sql);
}
function update($params){
    $nombres = $params ['Nombres'];
    $apellidos = $params['Apellidos'];
    $celular = $params['Celular'];
    $correo = $params['Correo'];
    $id = $params['id'];

 $update = " UPDATE Clientes SET nombres='$nombres', apellidos='$apellidos', correo ='$celular', celular='$correo' WHERE id = $id";
 return mysqli_query($this->conexion, $update); 
}
function remove($id){
    $remove="DELETE FROM clientes WHERE id= $id";
    return mysqli_query($this->conexion,$remove);
}
}
?>
