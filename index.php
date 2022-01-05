<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?1.0">
    <title>wwww.ArteLocal.com</title>
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
                                        //$id = $_REQUEST['id'];
                                        $query = "SELECT id,name FROM category";
                                        $resultado = $pdo->query($query);
                                        while ($row = $resultado->fetch_assoc()) {
                                        ?>
                                            <li><a class="dropdown-item text-dark " href="products.php?id=<?php echo $row['id'];?>"><?php echo $row['name']; ?> </a></li>
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
            <div class="col-lg-4 d-flex">
                <div class="container align-self-center px-5 content">
                    <h1 class="text-uppercase font-weight-bold mb-4 fw-bold "> El Arte </h1>
                    <p class="mb-4 fst-italic">Se considera como arte, de manera casi generalizada, a cualquier actividad del hombre que sea capaz de generar un producto cuya finalidad sea estética o comunicativa,
                        a través de la cual se puedan expresar ideas, emociones o una visión particular del día a día; siendo una condición inexcusable
                        para su consecución el uso de diversos recursos plásticos, lingüísticos, sonoros o mixtos.
                        El arte, al principio, tuvo una función ritual, mágica o religiosa pero, con el paso de los años, esa función cambió. Si pensamos en las razones que pudieron haber propiciado entonces esos cambios llegaremos a descubrir que la principal estuvo en la gran influencia que supuso en el arte la evolución del ser humano y que por ella los cambios que se derivaron le permitieron interpretarlo desde otras dimensiones, influenciadas siempre por el sentido estético del artista.
                        Gracias a él supo darle otra aplicación diferente a la que le dio en sus comienzos y por ello, ahora, se habla de arte social, pedagógico, mercantil u ornamental.
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="rounded-pill btn btn-outline-success"><a class="text-decoration-none text-light" href="products_new.php">Explrorar</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <img src="img/logo_1.0.png" alt="" class="img-fluid">
            </div>

            <div class="col-lg-1 border-right d-none d-lg-block">
                <div class="d-felx h-200">
                    <div class="align-self-center mx-auto">
                        <a href="" class="nav-link text-light lead-xl">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="d-flex h-100">
                    <div class="align-self-center px-5">
                        <a href="" class="text-light ">
                            <ion-icon name="chatbubbles-outline"></ion-icon>Visita nuestras redes sociales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="fixed-bottom bg-grey m-4 p-4">
        <div class="footer-copyright ">
            <div class="container text-dark">
                Todos los derechos reservados © 2016 Copyright Text
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