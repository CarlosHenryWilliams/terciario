<?php include('modulos/conexion.php');  ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Asignar Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/desing.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- CDN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- SWEET ALERT 2 -->
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='sweetalert2.min.js'></script>
    <link rel='stylesheet' href='sweetalert2.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>


<body class="sb-nav-fixed">
    <!-- HEADER/NAVBAR  -->
    <?php include('modulos/header.php'); ?>
    <!-- HEADER/NAVBAR  -->



    <div id="layoutSidenav">


        <!-- BARRA LATERAL -->
        <?php include('modulos/barralateral.php'); ?>
        <!-- BARRA LATERAL -->

        <div id="layoutSidenav_content">

            <main>
                <div class="" style="width: 100%; display:flex;  align-items: center; flex-direction: column;">
                    <div class="d-flex justify-content-around w-100 my-3">
                        <h1 class="h1 col-lg-9 col-12 my-auto">ASIGNAR MATERIAS</h1>
                        <button type="button" class="btn btn-outline-info my-auto mx-3" data-toggle="modal" data-target="#modal_plan_estudio">
                            GUARDAR
                        </button>
                    </div>
                    <!-- TABLA DESHABILITADOS -->
                        <div class="card mb-4 " id="table_materias" style="width: 90%;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Materias para Asignar
                            </div>
                            <div class="card-body">
                                <table id="tabla_materias" class="table table-bordered display responsive nowrap table-responsive " style="width:100%">
                                    <thead class="">
                                        <tr class="">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Abreviatura</th>
                                            <th>Estado_m</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>



                                </table>
                            </div>
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




    <!-- SCRIPTS -------------------------------------------------------------------------------------------------- -->
    <script src="js/toggle.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- SCRIPT DATATABLES -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous" defer></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <!-- SCRIPTS -------------------------------------------------------------------------------------------------- -->

</body>

<script>
    $(document).ready(function() {
        listar();
    });

    var listar = function() {
        var tableMaterias = $("#tabla_materias").DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
            },
            destroy: true, //para que no se buguee cuando agregas o editas etc
            ajax: {
                method: "POST",
                url: "../../backend/plandeestudio/buscarmaterias.php",
            },
            columns: [{
                    data: "id", //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
                },
                {
                    data: "nombre",
                },
                {
                    data: "abreviatura",
                },
                {
                    data: "estado_m",
                },
                {
                    defaultContent: "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class='fa-solid fa-plus'></i> Agregar Materia</button></div></div>",
                },
            ],

            columnDefs: [{
                width: "30%",
                targets: [0, 1, 2, 3, 4], //aclarar el ancho y a cuales columnas
            }, ],
        });
    };
</script>

</html>