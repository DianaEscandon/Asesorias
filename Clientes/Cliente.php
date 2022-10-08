<?php

include_once('../config/config.php');
class cliente{
    public $conexion;

   function __constructt()

{
    $db = new Database();
    $this->conexion=$db->connectToDatabase();
}
function save($params){

    $nombres = $params ['nombres'];
    $apellidos = $params['apellidos'];
    $correo = $params['correo'];
    $celular = $params['celular'];
    $image = $params['Image'];

    $insert = "INSERT INTO Clientes VALUES ('$nombres','$apellidos','$correo',$celular, '$image')";
    return mysqli_query($this->conexion,$insert);
}
function getAll(){
    $sql = "SELECT * FROM Clientes ORDER BY sessionDate ASC";
    return mysqli_query($this->conn, $sql);

}
function getOne($id){
$sql="SELECT * FROM Clientes WHERE id = $id"; 
return mysqli_query($this->conn, $sql);
}
function update($params){
    $nombres = $params ['nombres'];
    $apellidos = $params['apellidos'];
    $correo = $params['correo'];
    $celular = $params['celular'];
    $id = $params['id'];

 $update = " UPDATE Clientes SET nombres='$nombres', apellidos='$apellidos', correo ='$correo', celular='$celular'id= $id";
 return mysqli_query($this->conn, $update); 
}
function remove($id){
    $remove="DELETE FROM Patients WHERE id= $id";
    return mysqli_query($this->conn,$remove);
}
}
?>
