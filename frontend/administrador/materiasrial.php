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


                        <h1 class="mt-4 mb-4">MATERIAS</h1>


                    </div>


                    <div class="acciones">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar materia nueva
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cargar Materia</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" id="form_agregar_materias">
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
                                                <!-- <label for="inputabreviaturamateria">Estado</label> -->
                                                <input type="hidden" value="1" class="form-control"
                                                    id="inputestadomateria">
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="button" id="boton_cargarmateria"
                                                class="btn btn-primary">Cargar</button>
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
                            Materias
                        </div>
                        <div class="card-body">
                            <table id="tabla_completa_materias" class="table table-bordered display responsive nowrap"
                                width="100%">
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




    <!-- SCRIPT DATATABLES -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous" defer></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>




    <script>
    $(document).ready(function() {
        listar();

    });
    var listar = function() {
        var tableMaterias = $("#tabla_completa_materias").DataTable({

            "destroy": true,
            "ajax": {
                "method": "POST",
                "url": "../../backend/materias/buscarmaterias2.php"
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "nombre"
                },
                {
                    "data": "abreviatura"
                },
                {
                    "data": "estado_m"
                },
                {
                    "defaultContent": "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-info btnEditar'>Editar</button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>Dar de baja</i></button></div></div>"
                }
            ]

        });
    }



    //  MODAL AGREGAR
    $('#boton_cargarmateria').click(function() {

        let nombre_materia = document.getElementById('inputnombremateria').value;
        let abreviatura_materia = document.getElementById('inputabreviaturamateria').value;
        let estado_materia = document.getElementById('inputestadomateria').value;

        console.log(nombre_materia, abreviatura_materia, estado_materia);

        if (nombre_materia == '' || abreviatura_materia == '' || estado_materia == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor no deje ningun campo vacio',
                //  footer: '<a href="">Why do I have this issue?</a>'
            })
        } else {

            Swal.fire({
                title: 'Los datos son correctos?',
                text: "La materia se cargara al sistema",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy seguro',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    /**
                     * Si confirma el formulario lo envia por post mediante Jquery
                     */

                    $.post('../../backend/materias/cargarmateria.php', {
                        var_nombre_materia: nombre_materia,
                        var_abreviatura_materia: abreviatura_materia,
                        var_estado_materia: estado_materia
                    }, function(data) {
                        if (data == '1') {
                            Swal.fire(
                                'Buen Trabajo!',
                                'La materia ha sido cargada!',
                                'success'
                            ).then(
                                () => {


                                    $('#form_agregar_materias').trigger("reset");
                                    // $('#form_agregar_materias').hide();
                                    listar();
                                    //  tablaMaterias.ajax.reload();
                                    // tablaMaterias.row.add([var_nombre_materia,
                                    //     var_abreviatura_materia,
                                    //     var_estado_materia
                                    // ]).draw();
                                    // //  $('#inputnombremateria').val('');
                                    // //  $('#inputabreviaturamateria').val('');
                                    // //  $('#inputestadomateria').val('');
                                    // //  $('#tabla_materias').load('#tabla_materias');

                                    // tablaMaterias.fnDestroy();
                                    // $("#tabla_completa_materias").DataTable()
                                    //     .fnDestroy();

                                    //  table = $("#table_data").datatable()
                                    //  $("#my-button").click(function() {
                                    //      table.fnDestroy();
                                    //      table = $("#table_data")
                                    //          .dataTable();
                                    //  });

                                });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Revisa los campos nuevamente',
                                //  footer: '<a href="">Why do I have this issue?</a>'
                            })
                        }
                    });

                }
            })


        }

    });
    </script>


    <script>
    //Editar
    $(document).on("click", ".btnEditar", function() {

        opcion = 2; //editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find("td:eq(0)").text()); //capturo el ID
        console.log(id);
        nombre = fila.find("td:eq(1)").text();
        console.log(nombre);
        abreviatura = fila.find("td:eq(2)").text();
        console.log(abreviatura);
        estado_m = fila.find("td:eq(3)").text();
        console.log(estado_m);

        $("#username").val(nombre); //DEBERIA IR EL INPUT DEL NOMBRE DEL MODAL
        $("#first_name").val(abreviatura);
        $("#last_name").val(estado_m);
        // $("#gender").val(gender);
        // $("#password").val(password);
        // $("#status").val(status);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Usuario");
        $("#modalCRUD").modal("show");
    });
    </script>
</body>

</html>