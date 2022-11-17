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
                $id_boton_plan = $_POST['id_boton_plan'];

                ?>


                <p><?php echo $id_boton_plan ?></p>
                <div class="container">

                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">ASIGNAR MATERIAS</h1>
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
                                        <a href="#!" data-id="" class="btn btn-outline-info  btn-sm ">
                                            GUARDAR
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

    opcion = 2;


    //fila seria seleccionar la fila, la selecionas con el this, que this seria agarrar el elemento que pusiste en el click de arriba o sea el btn editar, closest lo mas cerca el TR obvio y despues abajo ya esta explicado el find.
    fila = $(this).closest("tr");
    //capturo el ID   el td:eq() , es un selector de indices, por ende si hay 4 <td>, para seleccionar el 4to td tendrias que poner td:eq(3) y con el .text agarras el texto obvio
    id = parseInt(fila.find("td:eq(0)").text());

    console.log(id);
    // console.log(titulo);
    // console.log(nombre);
    // console.log(resolucion);
    // console.log(estado_p);

    $.post('../../backend/plandeestudio/asignar_materia_planestudio.php', {
            opcion: opcion,
            id_materia: id,
            id_plan: id_plan
        }

        // , function(data) {
        //     if (data == '1') {
        //         Swal.fire(
        //             'Plan Actualizado!',
        //             'El plan de estudio ha sido actualizado',
        //             'success'
        //         ).then(
        //             () => {

        //                 $("#form_plan_estudio").trigger(
        //                     "reset"); //Reiniciar el formulario
        //                 $("#modal_plan_estudio .close")
        //                     .click(); //Cerrar el formulario
        //                 listar();
        //             });
        //     } else {
        //         // alert(data);
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'Revisa los campos nuevamente',
        //             //  footer: '<a href="">Why do I have this issue?</a>'
        //         })
        //     }
        // }

    );

});
</script>



<script>
$(document).ready(function() {
    $('#tabla_materias').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': '../../backend/plandeestudio/buscarmaterias.php',
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