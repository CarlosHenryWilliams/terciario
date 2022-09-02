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


                        <h1 class="mt-4 mb-4">MATERIAS</h1>


                    </div>


                    <div class="acciones">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal"
                            data-target="#modal_form_materias">
                            Agregar materia nueva
                        </button>

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

                    <!-- TABLA -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Materias
                        </div>
                        <div class="card-body ">
                            <table id="tabla_completa_materias"
                                class="table table-bordered display responsive nowrap table-responsive "
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

    // window.addEventListener('DOMContentLoaded', (event) => {
    //     value = $(".btnBorrar").closest("tr");

    //     id = parseInt(value.find("td:eq(0)").text());

    //     alert(id);
    // });
    var listar = function() {
        var tableMaterias = $("#tabla_completa_materias").DataTable({


            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" // spanish version
            },
            "destroy": true, //para que no se buguee cuando agregas o editas etc
            "ajax": {
                "method": "POST",
                "url": "../../backend/materias/buscarmaterias.php"
            },
            "columns": [{
                    "data": "id" //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
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
                    "defaultContent": "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-info btnEditar' data-toggle='modal' data-target='#modal_form_materias'>Editar</button><button class='btn btn-danger btn-sm btnEstado'><i class='material-icons'>Dar de baja</i></button></div></div>"
                }
            ],

            "columnDefs": [{
                "width": "30%",
                "targets": [0, 1, 2, 3, 4] //aclarar el ancho y a cuales columnas
            }]

        });
    }
    </script>



    <script>
    //ESTADO HABILITADO/DESHABILITADO

    $(document).on("click", ".btnEstado", function() {

        opcion = 3; //Editar

        fila = $(this).closest("tr");
        id = parseInt(fila.find("td:eq(0)").text());



        Swal.fire({
            title: 'Deshabilitar Materia',
            text: "Esta seguro que desea dar de baja la materia?",
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
                $.post('../../backend/materias/crudmaterias.php', {
                    opcion: opcion,
                    id: id
                }, function(data) {

                    if (data == 1) {
                        Swal.fire('Perfecto!', 'La materia ha sido dada de baja!', 'success')
                            .then(
                                () => {
                                    listar();

                                });
                    } else {
                        // alert(data);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ha ocurrido un error inesperado',
                            footer: '<a href="">Why do I have this issue?</a>'
                        })
                    }
                });

            }
        })




    });
    </script>

    <script>
    //Editar
    $(document).on("click", ".btnEditar", function() {

        opcion = 2; //Editar


        //fila seria seleccionar la fila, la selecionas con el this, que this seria agarrar el elemento que pusiste en el click de arriba o sea el btn editar, closest lo mas cerca el TR obvio y despues abajo ya esta explicado el find.
        fila = $(this).closest("tr");
        //capturo el ID   el td:eq() , es un selector de indices, por ende si hay 4 <td>, para seleccionar el 4to td tendrias que poner td:eq(3) y con el .text agarras el texto obvio
        id = parseInt(fila.find("td:eq(0)").text());
        nombre = fila.find("td:eq(1)").text();
        abreviatura = fila.find("td:eq(2)").text();
        estado_m = fila.find("td:eq(3)").text();

        // console.log(id);
        // console.log(nombre);
        // console.log(abreviatura);
        // console.log(estado_m);


        /**Configuraciones del MODAL */
        $("#inputnombremateria").val(nombre); //insertando valores a un input
        $("#inputabreviaturamateria").val(abreviatura);
        $("#inputestadomateria").val(estado_m);
        $("#inputestadomateria").show();
        $("#labelestadomateria").show();
        $(".modal-header").css("background-color", "#00aeae");
        $(".modal-header").css("color", "white");
        $("#boton_enviarform").css("background-color", "#00aeae");
        $("#boton_enviarform").css("color", "white");
        $(".modal-title").text("Editar Materia");
        //
        /**Configuraciones del MODAL */


        // Si opcion es igual a 2 o sea Editar
        if (opcion === 2) {
            $('#boton_enviarform').click(function() {
                console.log('ENTRO NOMAS PERRO')
                // console.log(id);
                // console.log(nombre);
                // console.log(abreviatura);
                // console.log(estado_m);


                valor_input_nombremateria = $('#inputnombremateria').val();
                valor_input_abreviaturamateria = $('#inputabreviaturamateria').val();
                valor_input_estadomateria = $('#inputestadomateria').val();

                console.log(valor_input_nombremateria);
                console.log(valor_input_abreviaturamateria);
                console.log(valor_input_estadomateria);

                if ($('#inputnombremateria').val().length === 0 ||
                    $('#inputabreviaturamateria').val().length === 0 ||
                    $('#inputestadomateria').val().length === 0) {
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

                            $.post('../../backend/materias/crudmaterias.php', {
                                opcion: opcion,
                                id: id,
                                nombre_materia: valor_input_nombremateria,
                                abreviatura_materia: valor_input_abreviaturamateria,
                                estado_materia: valor_input_estadomateria
                            }, function(data) {
                                if (data == '1') {
                                    Swal.fire(
                                        'Buen Trabajo!',
                                        'La materia ha sido cargada!',
                                        'success'
                                    ).then(
                                        () => {
                                            $('#form_agregar_materias').trigger(
                                                "reset"); //Reiniciar el formulario



                                            $("#modal_form_materias .close")
                                                .click(); //Cerrar el Modal

                                            // $('#exampleModal').modal('toggle');
                                            // $('#exampleModal').modal().hide();
                                            // $("#exampleModal").hide();

                                            // var element = document.getElementById(
                                            //     "body");
                                            // element.classList.remove("modal-open");

                                            // $('.modal-backdrop').removeAttr(
                                            //     "class");
                                            // $('#exampleModal').hide();
                                            // $('#exampleModal').modal('hide');


                                            listar(); //Listar la tabla de nuevo
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

        }




    });



    //AGREGAR



    $(document).on("click", ".btnAgregar", function() {

        opcion = 1; //Agregar

        /**
         * MODIFICACIONES MODAL
         */
        $("#inputestadomateria").hide();
        $("#labelestadomateria").hide();

        $("#inputnombremateria").val(""); //DEBERIA IR EL INPUT DEL NOMBRE DEL MODAL
        $("#inputabreviaturamateria").val("");
        $("#inputestadomateria").val(1);

        /**
         * CSS MODAL
         */
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $("#boton_enviarform").css("background-color", "#007bff");
        $("#boton_enviarform").css("color", "white");
        $(".modal-title").text("Agregar Materia");



        if (opcion === 1) {

            //  MODAL AGREGAR
            $('#boton_enviarform').click(function() {

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

                            $.post('../../backend/materias/crudmaterias.php', {
                                opcion: opcion,
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

                                            $('#form_agregar_materias').trigger(
                                                "reset"); //Reiniciar el formulario
                                            $("#modal_form_materias .close")
                                                .click(); //Cerrar el formulario
                                            listar(); //Listar la tabla de nuevo
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
</body>

</html>