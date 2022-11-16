<?php include('modulos/conexion.php');  ?>

<?php //include('../../backend/usuarios/crudusuarios.php');  
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
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">USUARIOS</h1>
                    </div>

                    <div>


                    </div>

                    <div class="card mb-4 ">
                        <div class="card-header">


                            <div class="d-flex bd-highlight">

                                <div class=" flex-grow-1 bd-highlight">
                                    <div class="bd-highlight w-75"> <i class="fas fa-table me-1"></i>
                                        Usuarios
                                    </div>
                                </div>
                                <div class=" bd-highlight">
                                    <div class=" flex-shrink-1 bd-highlight"> <a href="#!" data-id=""
                                            data-toggle="modal" data-target="#AgregarUsuario"
                                            class="btn btn-primary btn-sm  btnAgregarUsuario">Nuevo Usuario</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body table-responsive">
                            <table id="usuarios" class="table-bordered">
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
                                        <th>Clave</th>
                                        <th>Fecha_inscripcion</th>
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








            <!-- MODAL ROL-->
            <div class="modal fade" id="modal_form_rol" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Rol</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addUser" action="">
                                <div class="mb-3 row">
                                    <label for="nombre_materia" class="col-md-3 form-label">Nombre</label>

                                    <input type="hidden" class="form-control" id="input_id_rol" name="id" required>

                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input_nombre_rol" name="nombre"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="input_estado_r_rol" class="col-md-3 form-label">Estado</label>
                                    <div class="col-md-9">
                                        <!-- <input type="text" class="form-control" id="estado_m_materia" name="mobile"> -->

                                        <select class="form-select" aria-label="Default select example"
                                            id="input_estado_r_rol" name="estado" required>
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
$(document).ready(function() {
    $('#usuarios').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': '../../backend/usuarios/buscarusuarios.php',
            'type': 'post',
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [3]
            },

            {
                // hide id_number column
                "targets": [0],
                "visible": false,
                "searchable": false
            }

        ]
    });




    //AGREGAR ROL
    // $(document).on("click", ".btnAgregar", function() {
    //     opcion = 1;

    //     console.log(opcion);

    //     /**
    //      * MODIFICACIONES MODAL
    //      */

    //     //HAGO LOS INPUTS VACIOS
    //     $("#input_nombre_rol").val("");
    //     $("#input_estado_r_rol").val("");
    //     $('#input_id_rol').val("");



    //     // MUESTRO EL BOTON DE AGREGAR
    //     document.getElementById("boton_agregar_form").style.display = "block";
    //     // OCULTO EL BOTON DE EDITAR

    //     document.getElementById("boton_editar_form").style.display = "none";


    //     /**
    //      * CSS MODAL
    //      */
    //     $(".modal-header").css("background-color", "#007bff");
    //     $(".modal-header").css("color", "white");
    //     $("#boton_agregar_form").css("background-color", "#007bff");
    //     $("#boton_agregar_form").css("color", "white");
    //     $(".modal-title").text("Agregar Rol");

    //     if (opcion === 1) {
    //         //  MODAL AGREGAR
    //         $("#boton_agregar_form").click(function() {

    //             console.log('ESTA ACA EN OPCION 1 AGREGAR');
    //             var nombre_rol = $('#input_nombre_rol').val();
    //             var estado_r_rol = $('#input_estado_r_rol').val();

    //             console.log(nombre_rol, estado_r_rol);

    //             if (
    //                 nombre_rol == "" ||
    //                 estado_r_rol == "") {
    //                 Swal.fire({
    //                     icon: "error",
    //                     title: "Oops...",
    //                     text: "Por favor no deje ningun campo vacio",
    //                     //  footer: '<a href="">Why do I have this issue?</a>'
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: "Los datos son correctos?",
    //                     text: "El Rol se cargara al sistema",
    //                     icon: "warning",
    //                     showCancelButton: true,
    //                     confirmButtonColor: "#3085d6",
    //                     cancelButtonColor: "#d33",
    //                     confirmButtonText: "Si, estoy seguro",
    //                     cancelButtonText: "Cancelar",
    //                 }).then((result) => {
    //                     if (result.isConfirmed) {
    //                         /**
    //                          * Si confirma el formulario lo envia por post mediante Jquery
    //                          */

    //                         $.ajax({
    //                             url: "../../backend/roles/crudroles.php",
    //                             type: "post",
    //                             data: {
    //                                 opcion: opcion,
    //                                 nombre_rol: nombre_rol,
    //                                 estado_r_rol: estado_r_rol
    //                             },
    //                             success: function(data) {
    //                                 var json = JSON.parse(data);
    //                                 var status = json.status;
    //                                 if (status == 'success') {

    //                                     Swal.fire(
    //                                         "Buen Trabajo!",
    //                                         "El Rol ha sido cargada!",
    //                                         "success"
    //                                     ).then(() => {

    //                                         $("#modal_form_rol")
    //                                             .trigger(
    //                                                 "reset"
    //                                             ); //Reiniciar el formulario
    //                                         $("#modal_form_rol .close")
    //                                             .click(); //Cerrar el formulario

    //                                         mytable = $('#usuarios')
    //                                             .DataTable();
    //                                         mytable.draw();

    //                                     });
    //                                 } else {
    //                                     Swal.fire({
    //                                         icon: "error",
    //                                         title: "Oops...",
    //                                         text: "Revisa los campos nuevamente",
    //                                         //  footer: '<a href="">Why do I have this issue?</a>'
    //                                     });
    //                                 }
    //                             }
    //                         });

    //                     }
    //                 });
    //             }
    //         });
    //     }
    // }); // TERMINA AGREGAR ROL


});
</script>



<script>
//EDITAR  MATERIAAA
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
    $(".modal-title").text("Editar Rol");




    var tablamaterias = $('#materias').DataTable();

    var id = $(this).data('id');


    if (opcion === 5) {

        $.ajax({
            url: "../../backend/roles/crudroles.php",
            data: {
                opcion: opcion,
                id: id
            },
            type: 'post',
            success: function(data) {
                var json = JSON.parse(data);

                $("#input_id_rol").val(json.id);
                $("#input_nombre_rol").val(json.nombre_rol);
                $("#input_estado_r_rol").val(json.estado_r);



                opcion = 2; //UNA VEZ QUE AGARRA LOS DATOS LOS ENVIA  A LA OPCION 2 QUE ES EDITAR

                if (opcion === 2) {


                    $("#boton_editar_form").click(function() {

                        console.log('ESTA ACA EN OPCION 2 EDITAR');


                        var nombre_rol = $('#input_nombre_rol').val();
                        var estado_r_rol = $('#input_estado_r_rol').val();

                        var id = $('#input_id_rol').val();


                        if (nombre_rol != '' && estado_r_rol != '' &&
                            id != '') {

                            Swal.fire({
                                title: 'Editar Rol',
                                text: "Esta seguro que desea editar el Rol?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, estoy seguro',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {


                                    $.ajax({
                                        url: "../../backend/roles/crudroles.php",
                                        type: "post",
                                        data: {
                                            opcion: opcion,
                                            nombre_rol: nombre_rol,
                                            estado_r_rol: estado_r_rol,
                                            id: id
                                        },
                                        success: function(data) {
                                            var json = JSON.parse(data);
                                            var status = json.status;
                                            if (status == 'success') {


                                                Swal.fire(
                                                    'Rol Editado!',
                                                    'El Rol ha sido editado con exito!',
                                                    'success'
                                                ).then(() => {

                                                    $("#modal_form_rol")
                                                        .trigger(
                                                            "reset"
                                                        ); //Reiniciar el formulario
                                                    $("#modal_form_rol .close")
                                                        .click(); //Cerrar el formulario


                                                    tablaroles
                                                        = $(
                                                            '#roles'
                                                        )
                                                        .DataTable();

                                                    if (estado_r_rol ==
                                                        1) {
                                                        var texto_estado =
                                                            'Habilitado';
                                                        var button =
                                                            '<td><a href="#!" data-id="' +
                                                            id +
                                                            '" class="btn btn-info btn-sm btneditar" data-toggle="modal" data-target="#modal_form_rol">Editar</a>  <a href="#!"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-warning btn-sm btndardebaja">Dar de Baja</a></td>';

                                                    } else {
                                                        texto_estado
                                                            =
                                                            'Deshabilitado';
                                                        var button =
                                                            '<td><a href="#!" data-id="' +
                                                            id +
                                                            '" class="btn btn-info btn-sm btneditar" data-toggle="modal" data-target="#modal_form_rol">Editar</a>  <a href="#"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#"  data-id="' +
                                                            id +
                                                            '"  class="btn btn-success btn-sm btndardealta">Dar de Alta</a></td>';
                                                    }


                                                    //En el codigo de abajo dibuja la tabla
                                                    var row =
                                                        tablaroles
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
                                                            nombre_rol,
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





}); // TERMINA EDITAR  MATERIA
</script>


<script>
//EDITAR MATERIA 2
</script>




<script>
//DAR DE BAJA UNA MATERIA

$(document).on("click", ".btndardebaja", function() {
    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE


    var id = $(this).data('id');

    console.log(id);
    // console.log(trid);

    $.ajax({
        url: "../../backend/roles/crudroles.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data);

            var nombre_rol = json.nombre_rol;
            var estado_rol = json.estado_r;


            console.log(nombre_rol, estado_rol);

            opcion = 3; // una vez adentro opcion pasa a ser 3 o sea dar de baja

            Swal.fire({
                title: "Deshabilitar Rol",
                text: "Esta seguro que desea dar de baja el Rol?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "../../backend/roles/crudroles.php",
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
                                    "El rol ha sido dada de baja!",
                                    "success"
                                ).then(() => {

                                    tablaroles = $('#roles')
                                        .DataTable();

                                    texto_estado = 'Deshabilitado';

                                    var button =
                                        '<td><a href="#" data-id="' +
                                        id +
                                        '" class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_rol">Editar</a>  <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-success btn-sm btndardealta">Dar de Alta</a></td>';

                                    //En el codigo de abajo dibuja la tabla
                                    var row = tablaroles.row(
                                        "[id='" + id +
                                        "']");
                                    //el table es del table de arriba table = $('example').Datatable();
                                    row.row("[id='" + id + "']").data(
                                        [id,
                                            nombre_rol,
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
//DAR DE ALTA

$(document).on("click", ".btndardealta", function() {
    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    var id = $(this).data('id');

    console.log(id);

    $.ajax({
        url: "../../backend/roles/crudroles.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data);

            var nombre_rol = json.nombre_rol;
            var estado_rol = json.estado_r;



            console.log(nombre_rol, estado_rol);

            opcion = 4; // una vez adentro opcion pasa a ser 3 o sea dar de baja

            Swal.fire({
                title: "Habilitar Rol",
                text: "Esta seguro que desea habilitar el Rol?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "../../backend/roles/crudroles.php",
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
                                    "El rol ha sido habilitado!",
                                    "success"
                                ).then(() => {

                                    tablaroles = $('#roles')
                                        .DataTable();

                                    texto_estado = 'Habilitado';

                                    var button =
                                        '<td><a href="#" data-id="' +
                                        id +
                                        '" class="btn btn-info btn-sm btneditar"  data-toggle="modal" data-target="#modal_form_rol">Editar</a>  <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-danger btn-sm btneliminar">Eliminar</a> <a href="#!"  data-id="' +
                                        id +
                                        '"  class="btn btn-warning btn-sm btndardebaja">Dar de Baja</a></td>';

                                    //En el codigo de abajo dibuja la tabla
                                    var row = tablaroles.row(
                                        "[id='" + id +
                                        "']");
                                    //el table es del table de arriba table = $('example').Datatable();
                                    row.row("[id='" + id + "']").data(
                                        [id,
                                            nombre_rol,
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
//ELIMINAR MATERIA

$(document).on('click', '.btneliminar', function(event) {


    opcion = 6;

    var id = $(this).data('id');


    Swal.fire({
        title: "Eliminar Rol",
        text: "Estas seguro que desea eliminar el Rol ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, estoy seguro",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {



            $.ajax({
                url: "../../backend/roles/crudroles.php",
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
                            "El Rol ha sido eliminado!",
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