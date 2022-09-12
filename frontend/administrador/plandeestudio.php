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
    <link rel="stylesheet" href="css/desing.css"/>
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
                <div class="container-fluid px-4">
                    <div class="titulo_boton_modal d-flex justify-content-around my-2">
                        <h1 class="h1 col-lg-9 col-12 my-auto">PLAN DE ESTUDIO</h1>
                        <!-- Button modal -->
                        <button type="button" class="btn btn-outline-info my-auto btnAgregar" data-toggle="modal" data-target="#modal_plan_estudio">
                            Agregar Plan de Estudio
                        </button>
                    </div>

                    <div>
                        <button type="button" class="btn m-1 btn-danger" id="plan_deshabiltados" aria-pressed="false" onclick="toggleElement('table_deshabilitado')">
                            Deshabilitados
                        </button>
                        <button type="button" class="btn m-1 btn-activo btn-success" id="plan_habiltados" aria-pressed="false"   onclick="toggleElement('table_habilitado')">
                            Habilitados
                        </button>
                    </div>


                    <div class="acciones">

                        <!-- Modal -->
                        <div class="modal fade" id="modal_plan_estudio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" class="mt-2" id="form_plan_estudio">
                                            <div>
                                                <label for=""> Titulo del Plan</label>
                                                <input type="text" id="titulo" class="form-control ">
                                            </div>

                                            <div>
                                                <label for="">Nombre</label>
                                                <input type="text" id="nombre" class="form-control ">
                                            </div>

                                            <div>
                                                <label for="">Resolución</label>
                                                <input type="text" id="resolucion" class="form-control ">
                                            </div>

                                            <div>
                                                <!-- ESTADO: Activo/Inactivo -->
                                                <label id="label_estado" for="">Estado</label>
                                                <input id="estado" type="text" class="form-control" value="1">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" id="cargar" class="btn btn-outline-success w-25">Cargar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Fin Modal -->
                    </div>

                    <!-- TABLA DESHABILITADOS -->
                    <div class="card mb-4 " id="table_deshabilitado">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Materias
                        </div>
                        <div class="card-body">
                            <table id="tabla_deshabilitado_plan_estudio" class="table table-bordered display responsive nowrap table-responsive " style="width:100%">
                                <thead class="">
                                    <tr class="">
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Nombre</th>
                                        <th>Resolución</th>
                                        <th>Estado_p</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>



                            </table>
                        </div>
                    </div>

                    <!-- TABLA HABILITADOS -->
                    <div class="card mb-4 btn-active" id="table_habilitado">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Materias
                        </div>
                        <div class="card-body ">
                            <table id="#tabla_habilitado_plan_estudio" class="table table-bordered display responsive nowrap table-responsive " style="width:100%">
                                <thead class="">
                                    <tr class="">
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Nombre</th>
                                        <th>Resolución</th>
                                        <th>Estado_p</th>
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




    <!-- Agregar Plan de Estudio -->
    <script>
        //AGREGAR PLAN DE ESTUDIO
        $(document).on("click", ".btnAgregar", function() {

            opcion = 1; //Agregar


            /**
             * MODIFICACIONES MODAL
             */
            $("#label_estado").hide();
            $("#estado").hide();

            $("#titulo").val("");
            $("#nombre").val("");
            $("#resolucion").val("");
            $("#estado").val(1);

            /**
             * CSS MODAL
             */
            $(".modal-title").text("Agregar Plan de Estudio");
            $(".modal-header").css("background-color", "#007bff");
            $(".modal-header").css("color", "white");
            $("#cargar").css("background-color", "#007bff");
            $("#cargar").css("color", "white");




            if (opcion === 1) {

                console.log('ENTROA ACA');
                $('#cargar').click(function() {

                    let titulo = document.getElementById('titulo').value;
                    let nombre = document.getElementById('nombre').value;
                    let resolucion = document.getElementById('resolucion').value;
                    let estado = document.getElementById('estado').value;

                    // console.log(titulo, nombre, resolucion);

                    if (titulo == '' || nombre == '' || resolucion == '' || estado == '') {
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

                                $.post('../../backend/plandeestudio/crudplandeestudio.php', {
                                    opcion: opcion,
                                    var_titulo: titulo,
                                    var_nombre: nombre,
                                    var_resolucion: resolucion,
                                    var_estado: estado
                                }, function(data) {
                                    if (data == '1') {
                                        Swal.fire(
                                            'Se ha agregado con exito!',
                                            'Haz click para continuar',
                                            'success'
                                        ).then(() => {
                                            $("#form_plan_estudio").trigger(
                                                "reset"); //Reiniciar el formulario
                                            $("#modal_plan_estudio .close")
                                                .click(); //Cerrar el formulario
                                            listar();

                                        });
                                    } else {
                                        // alert(data);
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

            }




        });
    </script>



    <script>
        /**Deshabilitar plan
         * 
         * Obtiene el id de de la plan
         * */


        //ESTADO HABILITADO/DESHABILITADO

        $(document).on("click", ".btnEstado", function() {
            opcion = 3; //Editar

            fila = $(this).closest("tr");
            id = parseInt(fila.find("td:eq(0)").text());

            console.log(opcion);

            console.log("EL ID ES : ", id);

            Swal.fire({
                title: "Deshabilitar Plan",
                text: "Esta seguro que desea dar de baja el plan de estudio?",
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
                    $.post(
                        "../../backend/plandeestudio/crudplandeestudio.php", {
                            opcion: opcion,
                            id: id,
                        },
                        function(data) {
                            if (data == 1) {
                                Swal.fire(
                                    "Perfecto!",
                                    "El Plan ha sido dado de baja!",
                                    "success"
                                ).then(() => {
                                    listar();
                                });
                            } else {
                                // alert(data);
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Ha ocurrido un error inesperado",
                                    footer: '<a href="">Why do I have this issue?</a>',
                                });
                            }
                        }
                    );
                }
            });
        });

        //ESTADO HABILITADO/DESHABILITADO

        // function get_id_plan(id) {

        //     console.log(id)
        //     let id_plan = id;

        //     Swal.fire({
        //         title: 'Deshabilitar Plan de Estudio',
        //         text: "Esta seguro que desea dar de baja el Plan?",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Si, estoy seguro',
        //         cancelButtonText: 'Cancelar',
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             /**
        //              * Si confirma el formulario lo envia por post mediante Jquery
        //              */
        //             $.post('../../backend/plandeestudio/deshabilitarplan.php', {
        //                 var_id_plan: id_plan
        //             }, function(data) {
        //                 if (data == '1') {
        //                     Swal.fire('Perfecto!', 'El Plan de Estudio ha sido dada de baja!', 'success')
        //                         .then(
        //                             () => {

        //                                 //  setInterval(function() {
        //                                 //      $('#tabla_materias').load('#tabla_materias');
        //                                 //  }, 1000);

        //                                 $('#').load('#tabla_plan_estudio');
        //                             });
        //                     tabla_plan

        //                 } else {
        //                     Swal.fire({
        //                         icon: 'error',
        //                         title: 'Oops...',
        //                         text: 'Ha ocurrido un error inesperado',
        //                         //  footer: '<a href="">Why do I have this issue?</a>'
        //                     })
        //                 }
        //             });

        //         }
        //     })
        // }
    </script>


    <script>
        //Editar
        $(document).on("click", ".btnEditar", function() {

            opcion = 2; //Editar


            //fila seria seleccionar la fila, la selecionas con el this, que this seria agarrar el elemento que pusiste en el click de arriba o sea el btn editar, closest lo mas cerca el TR obvio y despues abajo ya esta explicado el find.
            fila = $(this).closest("tr");
            //capturo el ID   el td:eq() , es un selector de indices, por ende si hay 4 <td>, para seleccionar el 4to td tendrias que poner td:eq(3) y con el .text agarras el texto obvio
            id = parseInt(fila.find("td:eq(0)").text());
            titulo = fila.find("td:eq(1)").text();
            nombre = fila.find("td:eq(2)").text();
            resolucion = fila.find("td:eq(3)").text();
            estado_p = fila.find("td:eq(4)").text();

            // console.log(id);
            // console.log(titulo);
            // console.log(nombre);
            // console.log(resolucion);
            // console.log(estado_p);


            console.log(id);
            /**Configuraciones del MODAL */
            $("#titulo").val(titulo); //insertando valores a un input
            $("#nombre").val(nombre);
            $("#resolucion").val(resolucion);
            $("#estado").show();
            $("#estado").val(estado_p);

            // $("#labelestadomateria").show();
            $(".modal-header").css("background-color", "#00aeae");
            $(".modal-header").css("color", "white");
            $("#cargar").css("background-color", "#00aeae");
            $("#cargar").css("color", "white");
            $(".modal-title").text("Editar Plan");
            //
            /**Configuraciones del MODAL */


            // Si opcion es igual a 2 o sea Editar
            if (opcion === 2) {
                $('#cargar').click(function() {

                    // console.log(id);
                    // console.log(nombre);
                    // console.log(abreviatura);
                    // console.log(estado_m);


                    valor_input_titulo = $('#titulo').val();
                    valor_input_nombre = $('#nombre').val();
                    valor_input_resolucion = $('#resolucion').val();
                    valor_input_estado = $('#estado').val();

                    console.log(valor_input_titulo);
                    console.log(valor_input_nombre);
                    console.log(valor_input_resolucion);
                    console.log(valor_input_estado);

                    if ($('#titulo').val().length === 0 ||
                        $('#nombre').val().length === 0 ||
                        $('#resolucion').val().length === 0 ||
                        $('#estado').val().length === 0) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Por favor no deje ningun campo vacio',
                            //  footer: '<a href="">Why do I have this issue?</a>'
                        })
                    } else {
                        Swal.fire({
                            title: 'Los datos son correctos?',
                            text: "Esta seguro de editar esta materia?",
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

                                $.post('../../backend/plandeestudio/crudplandeestudio.php', {
                                    opcion: opcion,
                                    id: id,
                                    titulo_plan: valor_input_titulo,
                                    nombre_plan: valor_input_nombre,
                                    resolucion_plan: valor_input_resolucion,
                                    estado_plan: valor_input_estado
                                }, function(data) {
                                    if (data == '1') {
                                        Swal.fire(
                                            'Plan Actualizado!',
                                            'El plan de estudio ha sido actualizado',
                                            'success'
                                        ).then(
                                            () => {

                                                $("#form_plan_estudio").trigger(
                                                    "reset"); //Reiniciar el formulario
                                                $("#modal_plan_estudio .close")
                                                    .click(); //Cerrar el formulario
                                                listar();
                                            });
                                    } else {
                                        // alert(data);
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

            }




        });
    </script>


    <!-- Cargar datos en la tabla deshabilitados-->
    <script>
        $(document).ready(function() {
            listar();
        });

        var listar = function() {
            var tableMaterias = $("#tabla_deshabilitado_plan_estudio").DataTable({

                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" // spanish version
                },
                "destroy": true, //para que no se buguee cuando agregas o editas etc
                "ajax": {
                    "method": "POST",
                    "url": "../../backend/plandeestudio/buscardeshabilitados.php"
                },
                "columns": [{
                        "data": "id" //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
                    },
                    {
                        "data": "titulo"
                    },
                    {
                        "data": "nombre"
                    },
                    {
                        "data": "resolucion"
                    },
                    {
                        "data": "estado_p"
                    },
                    {
                        "defaultContent": "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja</button></div></div>"
                    }
                ],

                "columnDefs": [{
                    "width": "30%",
                    "targets": [0, 1, 2, 3, 4] //aclarar el ancho y a cuales columnas
                }]

            });
        }
        console.log($resultado);
    </script>

     <!-- Cargar datos en la tabla habilitados-->
     <script>
        $(document).ready(function() {
            listar();
        });

        var listar = function() {
            var tableMaterias = $("#tabla_habilitado_plan_estudio").DataTable({

                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" // spanish version
                },
                "destroy": true, //para que no se buguee cuando agregas o editas etc
                "ajax": {
                    "method": "POST",
                    "url": "../../backend/plandeestudio/buscarhabilitados.php"
                },
                "columns": [{
                        "data": "id" //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
                    },
                    {
                        "data": "titulo"
                    },
                    {
                        "data": "nombre"
                    },
                    {
                        "data": "resolucion"
                    },
                    {
                        "data": "estado_p"
                    },
                    {
                        "defaultContent": "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja</button></div></div>"
                    }
                ],

                "columnDefs": [{
                    "width": "30%",
                    "targets": [0, 1, 2, 3, 4] //aclarar el ancho y a cuales columnas
                }]

            });
        }
        console.log($resultado);
    </script>




</body>

</html>