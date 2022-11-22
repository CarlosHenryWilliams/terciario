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
                        <h1 class="mt-4 mb-4">PLAN DE ESTUDIO</h1>
                    </div>

                    <div class="card mb-4 ">
                        <div class="card-header">
                            <div class="d-flex bd-highlight">

                                <div class=" flex-grow-1 bd-highlight">
                                    <div class="bd-highlight w-75"> <i class="fas fa-table me-1"></i>
                                        Planes de estudio
                                    </div>
                                </div>
                                <div class=" bd-highlight">
                                    <div class=" flex-shrink-1 bd-highlight"> <a href="#!" data-id=""
                                            data-toggle="modal" data-target="#modal_form_planes"
                                            class="btn btn-primary btn-sm  btnAgregar">Nuevo Plan de Estudio
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body table-responsive">
                            <table id="planes" class="table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titulo</th>
                                        <th>Nombre</th>
                                        <th>Resolucion</th>
                                        <th>Estado</th>
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
                            </div>


                            <table class="table table-hover" id="planes_materias">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product 1</td>
                                        <td>100$</td>
                                        <td><a><i class="fas fa-times"></i></a></td>
                                        <td>hola</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product 1</td>
                                        <td>100$</td>
                                        <td><a><i class="fas fa-times"></i></a></td>
                                        <td>hola</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product 1</td>
                                        <td>100$</td>
                                        <td><a><i class="fas fa-times"></i></a></td>
                                        <td>hola</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product 1</td>
                                        <td>100$</td>
                                        <td><a><i class="fas fa-times"></i></a></td>
                                        <td>hola</td>
                                    </tr>
                                    <tr class="total">

                                        <th scope="row">1</th>
                                        <td>Product 1</td>
                                        <td>100$</td>
                                        <td><a><i class="fas fa-times"></i></a></td>
                                        <td>hola</td>
                                    </tr>
                                </tbody>
                            </table>


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

<script>
$(document).on("click", ".btnMaterias", function() {

    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE
    var id = $(this).data('id');
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
            $(" #plan_titulo").text(nombre_plan);

            $(" .btnAsignarMaterias").val(json.id);

            // $(" .btnAsignarMaterias").attr("href", "asignarmaterias.php?id='+id+'");

            // window.location.href =
            //     "http://www.gorissen.info/Pierre/maps/googleMapLocation.php?lat=" + elemA +
            //     "&lon=" + elemB + "&setLatLon=Set"


        }
    })

    $.ajax({
        url: "../../backend/plandeestudio/buscarmaterias_asignadasaunplan.php",
        data: {
            id: id
        },
        type: 'post',
        success: function(data) {
            // var json = JSON.parse(data); //lees los datos json o sea los convertis a string

            // var nombre_plan = json.nombre;
            // $(" #plan_titulo").text(nombre_plan);

            // $(" .btnAsignarMaterias").val(json.id);

            // $(" .btnAsignarMaterias").attr("href", "asignarmaterias.php?id='+id+'");

            // window.location.href =
            //     "http://www.gorissen.info/Pierre/maps/googleMapLocation.php?lat=" + elemA +
            //     "&lon=" + elemB + "&setLatLon=Set"


        }
    })


});
</script>

<script>
$(document).ready(function() {

    $('#planes_materias').DataTable();

    $('#planes').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': '../../backend/plandeestudio/buscarplan.php',
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




    //AGREGAR   PLANES
    $(document).on("click", ".btnAgregar", function() {
        opcion = 1;

        console.log(opcion);

        /**
         * MODIFICACIONES MODAL
         */

        //HAGO LOS INPUTS VACIOS
        $("#input_titulo_plan").val("");
        $("#input_nombre_plan").val("");
        $("#input_resolucion_plan").val("");
        $("#input_estado_p_plan").val("");
        $("#input_id_plan").val("");


        // MUESTRO EL BOTON DE AGREGAR
        document.getElementById("boton_agregar_form").style.display = "block";
        // OCULTO EL BOTON DE EDITAR

        document.getElementById("boton_editar_form").style.display = "none";


        /**
         * CSS MODAL
         */
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $("#boton_agregar_form").css("background-color", "#007bff");
        $("#boton_agregar_form").css("color", "white");
        $(".modal-title").text("Agregar Plan de Estudio");

        if (opcion === 1) {
            //  MODAL AGREGAR
            $("#boton_agregar_form").click(function() {

                console.log('ESTA ACA EN OPCION 1 AGREGAR');
                var titulo_plan = $('#input_titulo_plan').val();
                var nombre_plan = $('#input_nombre_plan').val();
                var resolucion_plan = $('#input_resolucion_plan').val();
                var estado_p_plan = $('#input_estado_p_plan').val();

                console.log(titulo_plan, nombre_plan, resolucion_plan, estado_p_plan);

                if (
                    titulo_plan == "" ||
                    nombre_plan == "" ||
                    resolucion_plan == "" ||
                    estado_p_plan == ""
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
                        text: "El Plan de Estudio se cargara al sistema",
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
                                url: "../../backend/plandeestudio/crudplandeestudio.php",
                                type: "post",
                                data: {
                                    opcion: opcion,
                                    titulo_plan: titulo_plan,
                                    nombre_plan: nombre_plan,
                                    resolucion_plan: resolucion_plan,
                                    estado_p_plan: estado_p_plan
                                },
                                success: function(data) {
                                    var json = JSON.parse(data);
                                    var status = json.status;
                                    if (status == 'true') {

                                        Swal.fire(
                                            "Buen Trabajo!",
                                            "El Plan de Estudio ha sido cargado!",
                                            "success"
                                        ).then(() => {

                                            $("#modal_form_planes")
                                                .trigger(
                                                    "reset"
                                                ); //Reiniciar el formulario
                                            $("#modal_form_planes .close")
                                                .click(); //Cerrar el formulario

                                            mytable = $('#planes')
                                                .DataTable();
                                            mytable.draw();

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
        }
    }); // TERMINA AGREGAR MATERIA


});
</script>



<script>
//EDITAR  PLANES
$(document).on("click", ".btneditar", function() {



    opcion = 5; //PRIMERO OPCION 5 PARA QUE AGARRE LOS DATOS


    /**
     * MODIFICACIONES MODAL
     */
    document.getElementById("boton_agregar_form").style.display = "none";

    document.getElementById("boton_editar_form").style.display = "block";

    /**
     * CSS MODAL
     */
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $("#boton_editar_form").css("background-color", "#17a2b8");
    $("#boton_editar_form").css("color", "white");
    $(".modal-title").text("Editar Plan de Estudio");




    var tablaplanes = $('#planes').DataTable();

    var id = $(this).data('id');

    console.log(id);


    if (opcion === 5) {

        $.ajax({
            url: "../../backend/plandeestudio/crudplandeestudio.php",
            data: {
                opcion: opcion,
                id: id
            },
            type: 'post',
            success: function(data) {
                var json = JSON.parse(data);
                $('#input_titulo_plan').val(json.titulo); //valor de la base de datos
                $('#input_nombre_plan').val(json.nombre);
                $('#input_resolucion_plan').val(json.resolucion);
                $('#input_estado_p_plan').val(json.estado_p);
                $('#input_id_plan').val(id);

                opcion = 2; //UNA VEZ QUE AGARRA LOS DATOS LOS ENVIA  A LA OPCION 2

                if (opcion === 2) {


                    $("#boton_editar_form").click(function() {

                        console.log('ESTA ACA EN OPCION 2 EDITAR');


                        var titulo_plan = $('#input_titulo_plan').val();
                        var nombre_plan = $('#input_nombre_plan').val();
                        var resolucion_plan = $('#input_resolucion_plan').val();
                        var estado_plan = $('#input_estado_p_plan').val();

                        var id = $('#input_id_plan').val();
                        //console.log(titulo_plan, nombre_plan, resolucion_plan, estado_plan , id);


                        if (titulo_plan != '' && nombre_plan != '' && resolucion_plan !=
                            '' &&
                            estado_plan != '') {

                            Swal.fire({
                                title: 'Editar Plan de Estudio',
                                text: "Esta seguro que desea editar este Plan?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, estoy seguro',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {


                                    $.ajax({
                                        url: "../../backend/plandeestudio/crudplandeestudio.php",
                                        type: "post",
                                        data: {
                                            opcion: opcion,
                                            titulo_plan: titulo_plan,
                                            nombre_plan: nombre_plan,
                                            resolucion_plan: resolucion_plan,
                                            estado_plan: estado_plan,
                                            id: id
                                        },
                                        success: function(data) {
                                            var json = JSON.parse(data);
                                            var status = json.status;
                                            if (status == 'success') {

                                                Swal.fire(
                                                    'Plan de Estudio Editado!',
                                                    'El Plan de Esudio ha sido editado con exito!',
                                                    'success'
                                                ).then(() => {

                                                    $("#modal_form_planes")
                                                        .trigger(
                                                            "reset"
                                                        ); //Reiniciar el formulario
                                                    $("#modal_form_planes .close")
                                                        .click(); //Cerrar el formulario


                                                    tablaplanes
                                                        = $(
                                                            '#planes'
                                                        )
                                                        .DataTable();

                                                    if (estado_plan ==
                                                        1) {
                                                        var texto_estado =
                                                            'Habilitado';
                                                        var button =
                                                            '<td><a href="#!" data-id="' +
                                                            id +
                                                            '" class="btn btn-info btn-sm btneditar" data-toggle="modal" data-target="#modal_form_planes">Editar</a>  <a href="#!"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-warning btn-sm btndardebaja">Dar de Baja</a></td> <a href="#" data-id="' +
                                                            id +
                                                            '"  class="btn btn-secondary btn-sm btnMaterias" data-toggle="modal" data-target="#modal_materias_plan_estudio">Materias</a>';

                                                    } else {
                                                        texto_estado
                                                            =
                                                            'Deshabilitado';
                                                        var button =
                                                            '<td><a href="#!" data-id="' +
                                                            id +
                                                            '" class="btn btn-info btn-sm btneditar" data-toggle="modal" data-target="#modal_form_planes">Editar</a>  <a href="#"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-success btn-sm btndardardealta">Dar de Alta</a></td> <a href="#" data-id="' +
                                                            id +
                                                            '"  class="btn btn-secondary btn-sm btnMaterias" data-toggle="modal" data-target="#modal_materias_plan_estudio" >Materias</a>';
                                                    }


                                                    //En el codigo de abajo dibuja la tabla
                                                    var row =
                                                        tablaplanes
                                                        .row(
                                                            "[id='" +
                                                            id +
                                                            "']"
                                                        );
                                                    //el table es del table de arriba table = $('example').Datatable();
                                                    row.row("[id='" +
                                                            id +
                                                            "']"
                                                        )
                                                        .data([id,
                                                            titulo_plan,
                                                            nombre_plan,
                                                            resolucion_plan,
                                                            texto_estado,
                                                            button
                                                        ]);


                                                });


                                            } else { //si el estado no es success ( o sea error en la consulta o algo)
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
                            })

                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Por favor no deje ningun campo vacio",
                                //  footer: '<a href="">Why do I have this issue?</a>'
                            });
                        }


                    });




                }


            }
        })
    }





}); // TERMINA EDITAR  PLANES
</script>


<script>
//DAR DE BAJA UN PLAN

$(document).on("click", ".btndardebaja", function() {
    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE


    var id = $(this).data('id');

    console.log(id);

    $.ajax({
        url: "../../backend/plandeestudio/crudplandeestudio.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data);

            var titulo_plan = json.titulo;
            var nombre_plan = json.nombre;
            var resolucion_plan = json.resolucion;
            var estado_plan = json.estado_p;


            console.log(titulo_plan, nombre_plan, resolucion_plan, estado_plan);

            opcion = 3; // una vez adentro opcion pasa a ser 3 o sea dar de baja

            Swal.fire({
                title: "Deshabilitar Plan de Estudio",
                text: "Esta seguro que desea dar de baja el Plan de Estudio?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "../../backend/plandeestudio/crudplandeestudio.php",
                        data: {
                            opcion: opcion,
                            id: id
                        },
                        type: "post",
                        success: function(data) {
                            var json = JSON.parse(data);
                            status = json.status;
                            if (status == 'success') {

                                Swal.fire(
                                    "Perfecto!",
                                    "El Plan de Estudio ha sido dado de baja!",
                                    "success"
                                ).then(() => {

                                    tablaplanes = $('#planes')
                                        .DataTable();

                                    texto_estado = 'Deshabilitado';

                                    var button =
                                        '<td><a href="#" data-id="' +
                                        id +
                                        '" class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_planes">Editar</a>  <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-success btn-sm btndardardealta">Dar de Alta</a></td> <a href="#" data-id="' +
                                        id +
                                        '"  class="btn btn-secondary btn-sm btnMaterias" data-toggle="modal" data-target="#modal_materias_plan_estudio" >Materias</a>';

                                    //En el codigo de abajo dibuja la tabla
                                    var row = tablaplanes.row(
                                        "[id='" + id +
                                        "']");
                                    //el table es del table de arriba table = $('example').Datatable();
                                    row.row("[id='" + id + "']").data(
                                        [id,
                                            titulo_plan,
                                            nombre_plan,
                                            resolucion_plan,
                                            texto_estado,
                                            button
                                        ]);
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Ha ocurrido un error inesperado",
                                    // footer: '<a href="">Why do I have this issue?</a>',
                                });
                                return;
                            }
                        }
                    });
                }
            });
        }
    })

});

//DAR DE BAJA
</script>

<script>
//DAR DE ALTA UN PLAN   

$(document).on("click", ".btndardardealta", function() {
    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    var id = $(this).data('id');

    console.log(id);

    $.ajax({
        url: "../../backend/plandeestudio/crudplandeestudio.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data);

            var titulo_plan = json.titulo;
            var nombre_plan = json.nombre;
            var resolucion_plan = json.resolucion;
            var estado_plan = json.estado_p;


            console.log(titulo_plan, nombre_plan, resolucion_plan, estado_plan);


            opcion = 4; // una vez adentro opcion pasa a ser 3 o sea dar de alta

            Swal.fire({
                title: "Habilitar Plan de Estudio",
                text: "Esta seguro que desea habilitar este Plan de Estudio?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "../../backend/plandeestudio/crudplandeestudio.php",
                        data: {
                            opcion: opcion,
                            id: id
                        },
                        type: "post",
                        success: function(data) {
                            var json = JSON.parse(data);
                            status = json.status;
                            if (status == 'success') {

                                Swal.fire(
                                    "Perfecto!",
                                    "El Plan de Estudio ha sido habilitado!",
                                    "success"
                                ).then(() => {

                                    tablaplanes = $('#planes')
                                        .DataTable();

                                    texto_estado = 'Habilitado';

                                    var button =
                                        '<td><a href="#" data-id="' +
                                        id +
                                        '" class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_planes">Editar</a>  <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-warning btn-sm btndardebaja">Dar de Baja</a></td> <a href="#" data-id="' +
                                        id +
                                        '"  class="btn btn-secondary btn-sm btnMaterias"  data-toggle="modal" data-target="#modal_materias_plan_estudio">Materias</a>';

                                    //En el codigo de abajo dibuja la tabla
                                    var row = tablaplanes.row(
                                        "[id='" + id +
                                        "']");
                                    //el table es del table de arriba table = $('example').Datatable();
                                    row.row("[id='" + id + "']").data(
                                        [id,
                                            titulo_plan,
                                            nombre_plan,
                                            resolucion_plan,
                                            texto_estado,
                                            button
                                        ]);
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Ha ocurrido un error inesperado",
                                    // footer: '<a href="">Why do I have this issue?</a>',
                                });
                                return;
                            }
                        }
                    });
                }
            });
        }
    })

});
</script>


<script>
//ELIMINAR PLAN DE ESTUDIO

$(document).on('click', '.btneliminar', function(event) {


    opcion = 6;

    var id = $(this).data('id');


    Swal.fire({
        title: "Eliminar Plan de Estudio",
        text: "Estas seguro que desea eliminar este Plan?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, estoy seguro",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {



            $.ajax({
                url: "../../backend/plandeestudio/crudplandeestudio.php",
                data: {
                    opcion: opcion,
                    id: id
                },
                type: "post",
                success: function(data) {

                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {


                        Swal.fire(
                            "Perfecto!",
                            "El plan de Estudio ha sido eliminado!",
                            "success"
                        ).then(() => {

                            $("#" + id).closest('tr').remove();
                        });

                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Ha ocurrido un error inesperado",
                            // footer: '<a href="">Why do I have this issue?</a>',
                        });
                        return;
                    }


                }
            });
        }
    });

})
</script>



</html>