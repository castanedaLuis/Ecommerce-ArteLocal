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
    
    <script>
        $(function () {
        $("#fechaBron").datepicker()({
            dateFormat: "yy-mm-dd"
            });
        });
    </script>

    <script>
        $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
       $(function () {
       $("#fecha").datepicker();
       });
    </script>
    <title>www.who.com</title>

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

                <div class=" m-5 p-5">
                    <div class="">
                        <img class="mx-auto d-block" src="img/who.jfif" width="80%" alt="">
                    </div>
                    <div class="m-2">
                        <h2>Comprometidos con nuestros artesanos MEXICANOS</h2>
                        <P>Mas de 10 años de experiencia en el ambito comercial entre los artesanos mexicanos y los consumidores.
                        Nuestro interés esta también, promover a los artistas locales a través de diferentes medios expositivos como 
                        ferias de arte, reseñas en prensa y revistas de arte contemporáneo por mencionar algunos. Generar propuestas para 
                        la escena cultural de la ciudad, ofreciendo plataformas de expresión y entendimiento de las artes, impartiendo 
                        talleres relacionados con todas las especialidades dentro y fuera de la galería. Y brindar un espacio para el 
                        arte que viva y palpite.
                        Creemos en el arte emergente como un poderosa forma de inversión y promovemos su venta y adquisición ya que esto 
                        impulsa a los artistas a crear y fortalece el mercado del arte, según la revista Forbes, el arte lleva una década 
                        siendo una de las prácticas económicas con más rentabilidad.
                        </P>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 m-5">
                <div>
                    <img class="mx-auto d-block" src="img/icono_exito2.png" alt="" class="img-fluid">
                </div>

                <div class="row borde bg-dark" style="justify-content: center;">
                    
                        <div class="card m-3">
                            <div class="card-header">
                                <h3 class="text-dark">¿Eres Artesano Mexicano?</h4>
                            </div>
                        </div>
                        <form class="card-body" action="send_who.php" method="POST" id="usuario-form" onsubmit="return enviar();">
                            <div class="form-group">
                                <label style="color: aliceblue;">Nombre Completo</label>
                                <input type="text" class="form-control mt-2" name="name" placeholder="Rogelio Mendez" id="name_user" pattern="[A-Za-z]"required>
                            </div>

                            <div class="form-group">
                                <label style="color: aliceblue;">Ingrese su correo</label>
                                <input type="email" class="form-control mt-2" name="correo" placeholder="rogelio@gmail.com" id="correo" pattern="[A-Za-z0-9_-@.]" required>
                            </div>
                            <div class="form-group">
                                <label style="color: aliceblue;">Celular</label>
                                <input type="text" class="form-control mt-2" name="num" placeholder="22-22-22-22-22" id="correo" pattern="[0-9]"required>
                            </div>
                            <div class="form-group">
                                <label style="color: aliceblue;">Fecha de Nacimiento</label>
                                <input type="fechafinal" class="form-control mt-2" name="fechaBron" id="fechaBron" placeholder="17/09/1996" pattern="[/0-9]" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mt-2" name="message" rows="4" cols="50" placeholder="¿Porque te interesa registrarte como artesano en ArteLocal.com?" pattern="[A-Za-z0-9_-@.]"require></textarea>
                            </div>

                            <div class="d-grid gap-2 col-8 mx-auto">
                                <input type="submit" id="Registrar" class="btn btn-primary btn-block mt-2" value="Enviar">
                            </div>
                        </form>
                </div>

            </div>
    </section>

    <footer class="bg-grey m-5 p-4">
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