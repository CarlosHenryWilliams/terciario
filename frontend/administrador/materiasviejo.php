<?php include('modulos/conexion.php');  ?>

<?php include('../../backend/materias/crudmaterias.php');  ?>

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
                        <h1 class="mt-4 mb-4">MATERIAS</h1>
                    </div>

                    <div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal"
                            data-target="#modal_form_materias">
                            Agregar materia nueva
                        </button>
                        <button type="button" class="btn m-1 btn-danger" id="materias_deshabiltadas"
                            aria-pressed="false" onclick="toggleElement('div_tabla_materias_deshabilitadas')">
                            Materias deshabilitadas
                        </button>
                        <input type="hidden" id="estado" value="0">
                        <button type="button" class="btn m-1 btn-activo btn-success" id="materias_habiltadas"
                            aria-pressed="false" onclick="toggleElement('div_tabla_materias_habilitadas')">
                            Materias habilitadas
                        </button>
                    </div>

                    <div class="acciones">


                        <!-- Modal -->
                        <div class="modal fade" id="modal_form_materias" tabindex="-1"
                            aria-labelledby="modal_form_materiasLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal_form_materiasLabel">Cargar Materia</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" id="form_agregar_alumno">
                                        <div class="modal-body">


                                            <div class="form-group">
                                                <label for="inputnombremateria">Nombre de la materia</label>
                                                <input type="text" class="form-control" required id="inputnombremateria"
                                                    aria-describedby="emailHelp">
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share
                                                    your email with anyone else.</small> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="inputabreviaturamateria">Abreviatura</label>
                                                <input type="text" class="form-control" required
                                                    id="inputabreviaturamateria">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputabreviaturamateria"
                                                    id="labelestadomateria">Estado</label>
                                                <input type="text" value="1" class="form-control"
                                                    id="inputestadomateria">
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="button" id="boton_enviarform" class="btn ">Cargar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div id="nisman15">
                        <p>ACA ESTA EL NISMAN15

                        </p>
                    </div>





                    <!-- PROBANDO TABLA NUEVA -->
                
                    <div class='card-header'>
                        <i class='fas fa-table me-1'></i>
                            Materias Habilitadas
                    </div>
                    <div class='card-body' id="probandoreiniciotabla">
                        <?php
                            mostrar_alumnos_actividad();
                        ?>
                    </div>


                    <!-- TABLA MATERIAS HABILITADAS -->
                    <div class="card mb-4" id="div_tabla_materias_habilitadas">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Materias Habilitadas
                        </div>
                        <div class="card-body ">
                            <table width="100%" id="tabla_materias_habilitadas"
                                class="table table-bordered display responsive nowrap table-responsive">
                                <thead class="">
                                    <tr class="">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th>estado_m</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>


                    <!-- TABLA MATERIAS DESHABILITADAS -->
                    <div class="card mb-4" id="div_tabla_materias_deshabilitadas">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Materias Deshabilitadas
                        </div>
                        <div class="card-body col-12">
                            <table id="tabla_materias_deshabilitadas"
                                class="col-12 table table-bordered display responsive nowrap table-responsive"
                                style="width:100%">
                                <thead class="">
                                    <tr class="">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th>estado_m</th>
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




    <!-- 
    <div>
        <div class='btn-group'>
            <button id='botoneditardocente2' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal'
                data-target='#modal_plan_estudio'>
                <i class=' fa-solid fa-pen-to-square'></i>
            </button>
            <button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja
                <i class='fa-solid fa-download'></i>
            </button>
            <button type='button' class='btn btn-secondary btn-sm btnMaterias m-1 rounded' data-toggle='modal'
                data-target='#modal_materias_plan_estudio'>
                Matarias
            </button>
        </div>
    </div> -->


    <!-- <div>
        <div class='btn-group'>
            <button class='btn btn-info btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_form_materias'>
                <i class=' fa-solid fa-pen-to-square'></i>
            </button>
            <button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja
                <i class='fa-solid fa-download'></i>
            </button>
        </div>
    </div> -->

    <!-- SCRIPT DATATABLES -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous" defer></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>

    <script src="js/materias.js"></script>



</body>
<script>
    $(document).ready(function() {

        $('#nisman').DataTable();

    });
    </script>
</html>