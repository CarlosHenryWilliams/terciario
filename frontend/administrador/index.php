<?php include('modulos/conexion.php');  ?>

<?php include('../../backend/roles/crudroles.php');  ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador - Terciario 89</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- CDN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- SWEET ALERT 2 -->
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='sweetalert2.min.js'></script>
    <link rel='stylesheet' href='sweetalert2.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>


<body class="sb-nav-fixed" id="body">
    <!-- HEADER/NAVBAR  -->
    <?php include('modulos/header.php'); ?>
    <!-- HEADER/NAVBAR  -->



    <div id="layoutSidenav">


        <!-- BARRA LATERAL -->
        <?php include('modulos/barralateral.php'); ?>
        <!-- BARRA LATERAL -->

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">ADMINISTRADOR</h1>
                    </div>


                    <div class="card mb-4 ">

                    </div>

                    <div class="container">
                        <h1 class="display-3">Hello, world!</h1>
                        <p>This is a template for a simple marketing or informational website. It includes a large
                            callout called a jumbotron and three supporting pieces of content. Use it as a starting
                            point to create something more unique.</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
                    </div>

                    <div class="container">
                        <!-- Example row of columns -->
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Heading</h2>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                    Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                            <div class="col-md-4">
                                <h2>Heading</h2>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                    Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                            <div class="col-md-4">
                                <h2>Heading</h2>
                                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                </p>
                                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                        </div>

                        <hr>

                    </div>





                </div>
            </main>













            <!-- Footer -->

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Sitio Web 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <!-- cierre footer -->





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>





    <!-- SCRIPT DATATABLES -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous" defer></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>

    <script src="js/materias.js"></script>



</body>



</html>