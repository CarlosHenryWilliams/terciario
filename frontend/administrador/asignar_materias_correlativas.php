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

                <?php
                $id_materia = $_POST['id_materias'];

                ?>

                <input class="boton_id_materias_oculto" type="text" value="<?php echo $id_materia; ?>">

                <div class="container">

                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">ASIGNAR CORRELATIVA A: </h1>
                        <h2 id="titulo_materia"></h2>
                    </div>

                    <!-- <div class="d-flex justify-content-around w-100 my-3">
                        <h1 class="h1 col-lg-9 col-12 my-auto">ASIGNAR MATERIAS</h1>
                        <button type="button" class="btn btn-outline-info my-auto mx-3" data-toggle="modal" data-target="#modal_plan_estudio">
                            GUARDAR
                        </button>
                    </div> -->




                    <div class="card mb-4 ">
                        <div class="card-header">
                            <div class="d-flex bd-highlight">

                                <div class=" flex-grow-1 bd-highlight">
                                    <div class="bd-highlight w-75"> <i class="fas fa-table me-1"></i>
                                        Planes de estudio
                                    </div>
                                </div>
                                <div class=" bd-highlight">
                                    <div class=" flex-shrink-1 bd-highlight">
                                        <a href="#!" data-id="" class="btn btn-warning  btn-sm ">
                                            Volver
                                        </a>
                                        <!-- btn-sm hace que el boton sea pequeño -->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body table-responsive">
                            <table id="tabla_materias" class="table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th>Estado_m</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>



                                </tbody>
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





    <!-- MODAL ASIGNAR MATERIAS-->
    <div class="modal fade" id="modal_form_asignar_materias" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Agregar Materia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h5>Especifique los parametros de la Materia</h5>
                    <form id="addUser" action="">
                        <div class="mb-3 row">


                            <input type="hidden" class="form-control" id="input_id_plan_de_estudio" name="id_plan"
                                value="<?php echo $id_boton_plan ?>" required>
                            <input type="hidden" class="form-control" id="input_id_materia" name="id_materia" required>

                            <label for="nombre_materia" class="col-md-3 form-label">Año de cursada
                            </label>


                            <div class="col-md-9">

                                <select class="form-select" aria-label="Default select example" id="input_ano_cursada"
                                    name="nombre" required>
                                    <option value="">Por favor seleccione el año de cursada</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>


                                </select>

                            </div>



                        </div>

                        <div class="mb-3 row">
                            <label for="input_periodo_cursada" class="col-md-3 form-label">Periodo</label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control" id="estado_m_materia" name="mobile"> -->

                                <select class="form-select" aria-label="Default select example"
                                    id="input_periodo_cursada" name="estado" required>
                                    <option value="">Por favor seleccione el periodo de cursada</option>
                                    <option value="1er Cuatrimestre">1er Cuatrimestre</option>
                                    <option value="2do Cuatrimestre">2do Cuatrimestre</option>
                                    <option value="Anual">Anual</option>

                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                        </div>

                        <div class="modal-footer">
                            <button type="button" id="boton_agregar_form" class="btn btn-primary">Agregar</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <!-- SCRIPTS -------------------------------------------------------------------------------------------------- -->
    <script src="js/toggle.js"></script>

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
    <!-- SCRIPTS -------------------------------------------------------------------------------------------------- -->

</body>

<script>
$(document).on("click", ".btnAgregarMateria", function() {




    var id_materia = $(this).data('id');
    console.log('ID MATERIA', id_materia);

    // LE INSERTO EL ID DE LA MATERIA AL INPUT OCULTO
    $(" #input_id_materia").val(id_materia);



    //  MODAL AGREGAR
    $("#boton_agregar_form").click(function() {

        var id_plan_de_estudio = $('#input_id_plan_de_estudio').val();
        console.log(id_plan_de_estudio);
        var ano_cursada = $('#input_ano_cursada').val();
        var periodo_cursada = $('#input_periodo_cursada').val();


        console.log(ano_cursada, periodo_cursada);

        if (
            ano_cursada == "" ||
            periodo_cursada == ""

        ) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Por favor no deje ningun campo vacio",
                //  footer: '<a href="">Why do I have this issue?</a>'
            });
        } else {
            Swal.fire({
                title: "Los datos son correctos?",
                text: "La Materia se agregara al Plan de Estudio",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    /**
                     * Si confirma el formulario lo envia por post mediante Jquery
                     */

                    $.ajax({
                        url: "../../backend/plandeestudio/asignar_materia_planestudio.php",
                        type: "post",
                        data: {
                            id_plan_de_estudio: id_plan_de_estudio,
                            id_materia: id_materia,
                            ano_cursada: ano_cursada,
                            periodo_cursada: periodo_cursada


                        },
                        success: function(data) {
                            var json = JSON.parse(data);
                            var status = json.status;
                            if (status == 'true') {

                                Swal.fire(
                                    "Buen Trabajo!",
                                    "La Materia ha sido agregada al plan de estudio",
                                    "success"
                                ).then(() => {

                                    $("#modal_form_asignar_materias")
                                        .trigger(
                                            "reset"
                                        ); //Reiniciar el formulario
                                    $("#modal_form_asignar_materias .close")
                                        .click(); //Cerrar el formulario

                                    $("#" + id_materia).closest('tr')
                                        .remove();

                                    // mytable = $('#planes')
                                    //     .DataTable();
                                    // mytable.draw();

                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Revisa los campos nuevamente",
                                    //  footer: '<a href="">Why do I have this issue?</a>'
                                });
                            }
                        }
                    });

                }
            });
        }
    });


});
</script>



<script>
$(document).ready(function() {






    var id_materias = $(".boton_id_materias_oculto").val();
    console.log(id_materias);

    $('#tabla_materias').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': '../../backend/plandeestudio/buscarmaterias_correlativas.php',
            'data': {
                id_materias: id_materias
            },
            'type': 'post',
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [4]
            },

            {
                // hide id_number column
                "targets": [0],
                "visible": false,
                "searchable": false
            }

        ]
    });
});
</script>


</html>