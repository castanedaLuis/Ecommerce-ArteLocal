<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- callendar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <!-- CSS-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?1.0">

    <title>www.buy.com</title>

</head>

<body>
    <section>
        <div class="row no-gutters">
            <div class="col-lg-1 border-right d-none d-lg-block">
                <div class="d-flex h-100">
                    <div class="align-self-center mx-auto">
                        <a class="nav-link text-light lead-xl" href="">
                            <ion-icon name="search-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-11">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand text-light fw-bold lead-xl" href="index.php">
                            <ion-icon name="diamond-outline"></ion-icon>Arte<span class="font-weight-bold">Local<span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <a class="nav-link text-light lead-xl" href="#">
                                <ion-icon name="menu-outline"></ion-icon>
                            </a>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-light lead" aria-current="page" href="index.php">
                                        <ion-icon name="home-outline"></ion-icon>Home
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-light lead" href="who.php">
                                        <ion-icon name="finger-print-outline"></ion-icon>¿Quienes somos?
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light lead" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <ion-icon name="earth-outline"></ion-icon>
                                        Categorias
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                        include('php/conexion.php');
                                        $query = "SELECT id,name FROM category";
                                        $resultado = $pdo->query($query);
                                        while ($row = $resultado->fetch_assoc()) {
                                        ?>
                                            <li><a class="dropdown-item text-dark " href="products.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </a></li>
                                        <?php
                                        }
                                        ?>
                                        <li><a class="dropdown-item text-dark " href="products_new.php">¡Lo nuevo en la plataforma!</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light lead" href="contact.php">
                                        <ion-icon name="mail-open-outline"></ion-icon>Contactanos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled lead">
                                        <ion-icon name="stats-chart-outline"></ion-icon>Lo Mejor de México
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light lead-xl" href="#">
                                        <ion-icon name="menu-outline"></ion-icon>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-1 d-none d-lg-block border-right">
                <div class="d-flex redes">
                    <ul class="list-unstyled align-self-center mx-auto">
                        <li class="sideways"><a class=" logo-facebook text-light text-decoration-none" href="">
                                <ion-icon name="logo-facebook"></ion-icon>Facebook</li></a>
                        <li class="sideways"><a class=" logo-instagram text-light text-decoration-none" href="">
                                <ion-icon name="logo-instagram"></ion-icon>Instagram</li></a>
                        <li class="sideways"><a class=" logo-twitter text-light text-decoration-none" href="">
                                <ion-icon name="logo-twitter"></ion-icon>Twitter</li></a>
                        <li class="sideways"><a class=" logo-youtube text-light text-decoration-none" href="">
                                <ion-icon name="logo-youtube"></ion-icon>Youtube</li></a>
                    </ul>
                </div>
            </div>
            <div class="col">
                                        <?php
                                            include('php/conexion.php');
                                            $id = $_REQUEST['id'];
                                            $query = "SELECT name FROM category WHERE id ='$id'";
                                            $resultado = $pdo->query($query);
                                            while ($row = $resultado->fetch_assoc()) {
                                        ?>
                <h4><?php echo $row['name'];?></h4>
                                        <?php
                                            }
                                        ?>
                <div class="row row-cols-4 row-cols-md-2 g-4 mt-5">
                    <?php 
                    include('php/conexion.php');
                    $id = $_REQUEST['id'];
                    $query = "SELECT * FROM products WHERE id_category = '$id'";
                    $resultado = $pdo->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <div class="card mt-5 mx-auto" style="width: 17rem;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['image']); ?>" class="p-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold"><?php echo $row['name']; ?></h5>
                                <p class="card-text  text-dark"><?php echo $row['description']; ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo 'ID - ' . $row['id']; ?></li>
                                <li class="list-group-item"><?php echo '$' . $row['price']; ?></li>
                                <li class="list-group-item"><?php echo $row['contact']; ?></li>
                            </ul>
                            <div class="card-body">
                                <button class="btn btn-info"> <a class="text-decoration-none text-light" href="buy.php?id=<?php echo $row['id']; ?>">Comprar</a></button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-grey m-3 p-4">
        <div class="footer-copyright ">
            <div class="container text-dark">
                Todos los derechos reservados © 2021 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">Jose Luis Castañeda</a>
            </div>
        </div>
    </footer>




    <!-- JAVASCRITP 1b1b1b-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <!-- icon font-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>