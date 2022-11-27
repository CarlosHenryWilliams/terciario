<?php include('modulos/conexion.php');  ?>

<?php
@$id_del_plan_oculto = $_POST['id_planestudio'];

?>

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

                <input class="boton_id_plan_oculto" type="hidden" value="<?php echo $id_del_plan_oculto; ?>">

                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">MATERIAS ASIGNADAS DE :</h1>
                        <h2 class="mt-4 mb-4 text-uppercase" id="titulo_plan"> </h2>

                    </div>


                    <?php 
                    
                    $sql_año = "SELECT DISTINCT ano_plan_materia FROM planestudio_materia WHERE id_plan_estudio = '$id_del_plan_oculto'";
                    $resultado2 = mysqli_query(conectame(), $sql_año);

                    

                    while($row = mysqli_fetch_array($resultado2)){  
                        
                        $año = $row["ano_plan_materia"];
                        ?>

                    

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <h3 class="text-center"><?php if ($row['ano_plan_materia'] == 1) {
                            echo "Primer Año";
                        } else if ($row['ano_plan_materia'] == 2) { 
                            echo "Segundo Año";
                        } else if ($row['ano_plan_materia'] == 3) {
                            echo "Tercer Año";
                        } else if ($row['ano_plan_materia'] == 4) {
                            echo "Cuarto Año";
                        } else if ($row['ano_plan_materia'] == 5) {
                            echo "Quinto Año";
                        }
                        ?></h3>
                            </tr>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Cursada</th>
                                <th scope="col">Correlatividad</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <?php


                        $sql = "SELECT * FROM planestudio_materia INNER JOIN materias ON planestudio_materia.id = materias.id WHERE `ano_plan_materia` = $año AND `id_plan_estudio` = $id_del_plan_oculto";
                        $resultado = mysqli_query(conectame(), $sql);

                        while ($row = mysqli_fetch_array($resultado)) {

                        ?>
                        <tbody>


                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['periodo_cursada'] ?></td>
                                <td></td>
                                <td><button>Quitar</button> <button>Correlatividad</button></td>
                            </tr>




                        </tbody>
                        <?php }
                        ?>

                    </table>



                    <?php
                    }
                    
                    ?>

                   








                    <!-- TABLA RIAL -->

                    <!-- <div class="card mb-4 ">
                        <div class="card-header">
                            <div class="d-flex bd-highlight">

                                <div class=" flex-grow-1 bd-highlight">
                                    <div class="bd-highlight w-75"> <i class="fas fa-table me-1"></i>
                                        Materias
                                    </div>
                                </div>
                                <div class=" bd-highlight">
                                    <div class=" flex-shrink-1 bd-highlight"> <a href="plandeestudio.php" class="btn btn-warning btn-sm  btnAgregar">Volver
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body table-responsive">
                            <table id="materias" class="table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>abreviatura</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>



                                </tbody>
                            </table>
                        </div>
                    </div> -->

                    <!-- TABLA RIAL -->







                </div>
            </main>


            <!-- Add plan Modal -->
            <div class="modal fade" id="modal_form_planes" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Plan de Estudio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addUser" action="">

                                <div class="mb-3 row">
                                    <label for="titulo_plan" class="col-md-3 form-label">Titulo</label>

                                    <input type="hidden" class="form-control" id="input_id_plan" name="id" required>

                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input_titulo_plan" name="titulo"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nombre_plan" class="col-md-3 form-label">Nombre</label>

                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input_nombre_plan" name="nombre"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="resolucion_plan" class="col-md-3 form-label">Resolucion</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input_resolucion_plan"
                                            name="resolucion" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="estado_p_plan" class="col-md-3 form-label">Estado</label>
                                    <div class="col-md-9">

                                        <select class="form-select" aria-label="Default select example"
                                            id="input_estado_p_plan" name="estado" required>
                                            <option value="">Por favor seleccione un estado</option>
                                            <option value="1">Habilitado</option>
                                            <option value="0">Deshabilitado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-center">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="boton_agregar_form" class="btn btn-primary">Agregar</button>
                            <button type="submit" id="boton_editar_form" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </div>
            </div>



            <!--  MODAL MATERIAS-->
            <div class="modal fade" id="modal_materias_plan_estudio" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MATERIAS ASIGNADAS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="asignarmaterias.php" method="POST">

                                <button type="submit" value="" name="id_boton_plan"
                                    class="btn btn-info btnAsignarMaterias"><i class="fa-solid fa-plus"></i> Asignar
                                    Materias </button>
                            </form>

                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="mt-2">Materias de: </h4>
                                <h4 class="ms-1 mt-2" id="plan_titulo"> </h4>
                                <form action="" method="POST">

                                    <form action="" method="POST">

                                        <button type="submit" value="" name="" class="btn btn-info ms-2"><i
                                                class="fa-solid fa-plus"></i> Asignar
                                            Materias
                                        </button>
                                    </form>

                            </div>



                        </div>
                    </div>
                </div>

            </div>
            <!-- FIN MODAL MATERIAS-->



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


<!-- TITULO DEL PLAN -->
<script>
$(document).ready(function() {

    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    var id = $(".boton_id_plan_oculto").val();
    console.log(id);


    //Asi se obtiene el id del plan porque tiene cargado en el atributo data el id el boton
    $.ajax({
        url: "../../backend/plandeestudio/crudplandeestudio.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data); //lees los datos json o sea los convertis a string

            var nombre_plan = json.nombre;
            $(" #titulo_plan").text("\u00A0" +
                nombre_plan); // EL CODIGO ESE "\u00A0" ES UN ESPACIO EN BLANCO


            $(" .btnAsignarMaterias").val(json.id);
            $(" .btnVerMaterias").val(json.id);

            $(' .boton_id_plan_oculto').val(json.id)


        }
    })

});
</script>
<!-- TITULO DEL PLAN -->



<!-- PARA VER SI ES PRIMER AÑO O 2DO ETC  -->
<script>
$(document).ready(function() {

    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    var id = $(".boton_id_plan_oculto").val();
    console.log(id);


    //Asi se obtiene el id del plan porque tiene cargado en el atributo data el id el boton
    $.ajax({
        url: "../../backend/plandeestudio/crudplandeestudio.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data); //lees los datos json o sea los convertis a string

            var nombre_plan = json.nombre;
            $(" #titulo_plan").text("\u00A0" +
                nombre_plan); // EL CODIGO ESE "\u00A0" ES UN ESPACIO EN BLANCO


            $(" .btnAsignarMaterias").val(json.id);
            $(" .btnVerMaterias").val(json.id);

            $(' .boton_id_plan_oculto').val(json.id)


        }
    })

});
</script>
<!-- PARA VER SI ES PRIMER AÑO O 2DO ETC  -->



<script>
//AGREGAR   PLANES
$(document).on("click", ".btnQuitarMateria", function() {
    opcion = 1;

    console.log(opcion);

    /**
     * MODIFICACIONES MODAL
     */
    var id_planestudio = $(".boton_id_plan_oculto").val();
    console.log(id_planestudio);


    var id_materia = $(this).data('id');

    console.log(id_materia);

    Swal.fire({
        title: "Desvincular Materia",
        text: "Realmente desea desvincular la Materia?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Confirmar",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            /**
             * Si confirma el formulario lo envia por post mediante Jquery
             */

            $.ajax({
                url: "../../backend/plandeestudio/desvincularmateria.php",
                type: "post",
                data: {
                    id_planestudio: id_planestudio,
                    id_materia: id_materia
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    var status = json.status;
                    if (status == 'success') {

                        Swal.fire(
                            "Buen Trabajo!",
                            "La Materia ha sido desvinculada!",
                            "success"
                        ).then(() => {

                            $("#" + id_materia).closest('tr').remove();
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



}); // TERMINA AGREGAR MATERIA
</script>

<script>
$(document).ready(function() {

    var id_planestudio = $(".boton_id_plan_oculto").val();
    console.log(id_planestudio);



    $('#materias').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': '../../backend/plandeestudio/buscarmaterias_asignadasaunplan.php',
            'data': {
                id_planestudio: id_planestudio
            },
            'type': 'post',
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [4]
            },

            {
                // hide id_number column
                "targets": [0, 3],
                "visible": false,
                "searchable": false
            }

        ]
    });







});
</script>



</html>