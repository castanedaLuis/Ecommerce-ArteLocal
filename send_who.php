<?php
include('php/conexion.php');

$name = $_POST['name'];
$correo = $_POST['correo'];
$num = $_POST['num'];
$fechaBron = $_POST['fechaBron'];
$message = $_POST['message'];



$query = "INSERT INTO artesanos_contact (name,mail,phone,fecha_bron,message ) VALUES ('$name','$correo','$num','$fechaBron','$message')";
$resultado = $pdo->query($query);
//INSERT INTO categoty (name,description,products,image)VALUES ('hola','castañeda',0,'dadasdas');
if($resultado){
    header("Location: products_new.php");
}else{
    echo 'Fallo';
    echo $pdo->error;
}


?>