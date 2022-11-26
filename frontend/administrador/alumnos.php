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


                    <!-- <div class="acciones"> -->
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary btnAgregarAlumno" data-toggle="modal"
                            data-target="#exampleModal">
                            Agregar Alumno
                        </button>
 -->

                    <!-- </div> -->
                    <!-- TABLA -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Alumnos
                        </div>
                        <div class="card-body">
                            <table id="tabla_completa_alumnos"
                                class="table table-bordered display responsive nowrap table-responsive"
                                style="width:100%">
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
                                        <th>Estado</th>
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
                    data: "estado_u",
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




    <script>
    //AGREGAR MATERIAAA
    $(document).on("click", ".btnAgregarAlumno", function() {
        opcion = 1; // OPCION 1 ES AGREGAR

        console.log(opcion);

        /**
         * MODIFICACIONES MODAL
         */
        // $("#inputestadomateria").hide();
        // $("#labelestadomateria").hide();

        // $("#inputnombremateria").val(""); //DEBERIA IR EL INPUT DEL NOMBRE DEL MODAL
        // $("#inputabreviaturamateria").val("");
        // $("#inputestadomateria").val(1);

        /**
         * CSS MODAL
         */
        // $(".modal-header").css("background-color", "#007bff");
        // $(".modal-header").css("color", "white");
        // $("#boton_enviarform").css("background-color", "#007bff");
        // $("#boton_enviarform").css("color", "white");
        // $(".modal-title").text("Agregar Materia");

        if (opcion === 1) {
            //  MODAL AGREGAR
            $("#btn_enviar_form_alumno").click(function() {

                let fecha_inscripcion = document.getElementById("input_fecha_inscripcion")
                    .value; //ESTE NO TODAVIA PORQUE FALTA MOIFICAR LA BASE DE DATOS
                let nombre_alumno = document.getElementById("input_nombre_alumno").value;
                let apellido_alumno = document.getElementById("input_apellido_alumno").value;
                let dni_alumno = document.getElementById("input_dni_alumno").value;
                let sexo_alumno = document.getElementById("select_sexo_alumno").value;
                let fecha_nacimiento_alumno = document.getElementById("input_fecha_nacimiento_alumno")
                    .value;
                let lugar_nacimiento_alumno = document.getElementById("input_lugar_nacimiento_alumno")
                    .value;
                let estado_civil_alumno = document.getElementById("input_estado_civil_alumno").value;
                let domicilio_alumno = document.getElementById("input_domicilio_alumno").value;
                let domicilio_numero_alumno = document.getElementById("input_domicilio_numero_alumno")
                    .value;
                let piso_alumno = document.getElementById("input_piso_alumno").value;
                let depto_alumno = document.getElementById("input_depto_alumno").value;
                let localidad_alumno = document.getElementById("input_localidad_alumno").value;
                let partido_alumno = document.getElementById("input_partido_alumno").value;
                let codigo_postal_alumno = document.getElementById("input_codigo_postal_alumno").value;
                let telefono_alumno = document.getElementById("input_telefono_alumno").value;
                let telefono_alternativo_alumno = document.getElementById(
                    "input_telefono_alternativo_alumno").value;
                let telefono_alternativo_persona_alumno = document.getElementById(
                    "input_telefono_alternativo_persona_alumno").value;
                let correo_alumno = document.getElementById("input_correo_alumno").value;










                console.log(nombre_materia, abreviatura_materia, estado_materia);

                if (
                    nombre_materia == "" ||
                    abreviatura_materia == "" ||
                    estado_materia == ""
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
                        text: "La materia se cargara al sistema",
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
                                "../../backend/materias/crudmaterias.php", {
                                    opcion: opcion,
                                    var_nombre_materia: nombre_materia,
                                    var_abreviatura_materia: abreviatura_materia,
                                    var_estado_materia: estado_materia,
                                },
                                function(data) {
                                    if (data == "1") {
                                        Swal.fire(
                                            "Buen Trabajo!",
                                            "La materia ha sido cargada!",
                                            "success"
                                        ).then(() => {
                                            $("#form_agregar_materias").trigger(
                                                "reset"); //Reiniciar el formulario
                                            $("#modal_form_materias .close")
                                                .click(); //Cerrar el formulario
                                            listar(); //Listar la tabla de nuevo
                                        });
                                    } else {
                                        // alert(data);
                                        Swal.fire({
                                            icon: "error",
                                            title: "Oops...",
                                            text: "Revisa los campos nuevamente",
                                            //  footer: '<a href="">Why do I have this issue?</a>'
                                        });
                                    }
                                }
                            );
                        }
                    });
                }
            });
        }
    });

    //AGREGAR MATERIA
    </script>




    <script>
    //ESTADO HABILITADO/DESHABILITADO

    $(document).on("click", ".btnEstado", function() {
        opcion = 3; //Editar

        fila = $(this).closest("tr");
        id = parseInt(fila.find("td:eq(0)").text());

        Swal.fire({
            title: "Dar de baja al Alumno",
            text: "Esta seguro que desea dar de baja al Alumno?",
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
                    "../../backend/alumnos/crudalumnos.php", {
                        opcion: opcion,
                        id: id,
                    },
                    function(data) {
                        if (data == 1) {
                            Swal.fire(
                                "Perfecto!",
                                "La materia ha sido dada de baja!",
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
    </script>



    <script>
    $(document).ready(function() {

        Swal.fire({
            title: 'Ooopss, la pagina se encuentra en mantenimiento.',
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff url(/images/trees.png)',
            backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
        }).then((result) => {
            window.history.back();
        })
    });
    </script>
</body>

</html>