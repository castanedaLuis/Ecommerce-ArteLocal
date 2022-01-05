<?php
    include('php/conexion.php');

    $name = $_POST['name'];
    $correo = $_POST['correo'];
    $num = $_POST['num'];
    $message = $_POST['message'];
  
  
    
    $query = "INSERT INTO contact_us (name,mail,phone,message ) VALUES ('$name','$correo','$num','$message')";
    $resultado = $pdo->query($query);
    //INSERT INTO categoty (name,description,products,image)VALUES ('hola','castañeda',0,'dadasdas');
    if($resultado){
        header("Location: products_new.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>