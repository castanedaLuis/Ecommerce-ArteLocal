<?php
    include('php/conexion.php');

    $folio = 10;
    $name = $_POST['name'];
    $correo = $_POST['correo'];
    $num = $_POST['num'];
    $id_product=$_POST['id_product'];
    $name_product=$_POST['name_product'];
    $price_product=$_POST['price'];
    $price_product_2= substr($price_product,1);
    $message = $_POST['message'];

    $query = "INSERT INTO buy_products (email,name_buyer,phone_buyer,message_buyer,id_product,name_product,price_product,date ) 
    VALUES ('$correo','$name','$num','$message','$id_product','$name_product','$price_product_2', NOW())";
    $resultado = $pdo->query($query);
    
    if($resultado){
        header("Location: index.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>