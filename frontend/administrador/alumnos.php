<?php include('modulos/conexion.php');  ?>

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
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center ">


                        <h1 class="mt-4 mb-4">ALUMNOS</h1>


                    </div>


                    <div class="acciones">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar alumno nuevo
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="" class="d-flex justify-content-start">Fecha de
                                                            inscripcion</label>
                                                        <input name="fecha" class="form-control bg-transparent"
                                                            placeholder="Fecha" type="date" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="nombre" class="form-control bg-transparent"
                                                            placeholder="Nombre" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="apellido" class="form-control bg-transparent"
                                                            placeholder="Apellido" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="dni" class="form-control bg-transparent"
                                                            placeholder="Dni" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <label class="d-flex justify-content-start">Género</label>
                                                        <select class="form-control" name="sexo">
                                                            <option>Femenino</option>
                                                            <option>Masculino</option>
                                                            <option>Otros</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="" class="d-flex justify-content-start">Fecha de
                                                            nacimiento</label>
                                                        <input id="" name="fecha_nacimiento"
                                                            class="form-control bg-transparent"
                                                            placeholder="Fecha de nacimiento" type="date" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="lugar_nacimiento"
                                                            class="form-control bg-transparent"
                                                            placeholder="Lugar de nacimiento" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="estado_civil" class="form-control bg-transparent"
                                                            placeholder="Estado civil" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="domicilio" class="form-control bg-transparent"
                                                            placeholder="Domicilio" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="domicilio_numero"
                                                            class="form-control bg-transparent"
                                                            placeholder="Número de domicilio" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="piso" class="form-control bg-transparent"
                                                            placeholder="Piso" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="depto" class="form-control bg-transparent"
                                                            placeholder="depto" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="localidad" class="form-control bg-transparent"
                                                            placeholder="Localidad" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="partido" class="form-control bg-transparent"
                                                            placeholder="Partido" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="codigo_postal" class="form-control bg-transparent"
                                                            placeholder="Codigo postal" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono" class="form-control bg-transparent"
                                                            placeholder="Telefono" type="text" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono_alternativo"
                                                            class="form-control bg-transparent"
                                                            placeholder="Telefono alternativo" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono_alternativo_persona"
                                                            class="form-control bg-transparent"
                                                            placeholder="Telefono alternativo persona" type="text"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="email" class="form-control bg-transparent"
                                                            placeholder="Correo electronico" type="text" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info btn-lg btn-block"
                                                            id="boton_guardarAlumno">Guardar</button>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- TABLA -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Alumnos
                        </div>
                        <div class="card-body">
                            <table id="tabla_completa_alumnos">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Sexo</th>
                                        <th>Dni</th>
                                        <th>Fecha Nac</th>
                                        <th>Lugar Nac</th>
                                        <th>Estado civil</th>
                                        <th>Domicilio</th>
                                        <th>N° Domicilio</th>
                                        <th>Piso</th>
                                        <th>Depto</th>
                                        <th>Localidad</th>
                                        <th>Partido</th>
                                        <th>Cod postal</th>
                                        <th>Telefono</th>
                                        <th>Telefono_alt</th>
                                        <th>Telefono_alt_pers</th>
                                        <th>Email</th>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
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


    <script>
    $(document).ready(function() {
        listar(); //MOSTRAR DATOS DE LA TABLA
    });

    //MOSTRAR DATOS DE LA TABLA
    var listar = function() {
        var tableMaterias = $("#tabla_completa_alumnos").DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
            },
            destroy: true, //para que no se buguee cuando agregas o editas etc
            ajax: {
                method: "POST",
                url: "../../backend/alumnos/buscaralumnos.php",
            },
            columns: [{
                    data: "id", //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
                },
                {
                    data: "nombre",
                },
                {
                    data: "apellido",
                },
                {
                    data: "sexo",
                },
                {
                    data: "dni",
                },
                {
                    data: "fecha_nacimiento",
                },
                {
                    data: "lugar_nacimiento",
                },
                {
                    data: "estado_civil",
                },
                {
                    data: "domicilio",
                },
                {
                    data: "domicilio_numero",
                },
                {
                    data: "piso",
                },
                {
                    data: "depto",
                },
                {
                    data: "localidad",
                },
                {
                    data: "partido",
                },
                {
                    data: "codigo_postal",
                },
                {
                    data: "telefono",
                },
                {
                    data: "telefono_alternativo",
                },
                {
                    data: "telefono_alternativo_persona",
                },
                {
                    data: "email",
                },
                {
                    defaultContent: "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-info btnEditar' data-toggle='modal' data-target='#modal_form_materias'>Editar</button><button class='btn btn-danger btn-sm btnEstado'><i class='material-icons'>Dar de baja</i></button></div></div>",
                },
            ],

            columnDefs: [{
                width: "30%",
                targets: [0, 1, 2, 3, 4], //aclarar el ancho y a cuales columnas
            }, ],
        });
    };
    //MOSTRAR DATOS DE LA TABLA
    </script>

</body>

</html>