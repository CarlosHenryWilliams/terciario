<?php include('modulos/conexion.php');  ?>

<?php
@$id_materias_oculto = $_POST['id_materias'];

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

                <input class="boton_id_materias_oculto" type="hidden" value="<?php echo $id_materias_oculto; ?>">

                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center ">
                        <h1 class="mt-4 mb-4">MATERIAS CORRELATIVAS DE :</h1>
                        <h2 class="mt-4 mb-4 text-uppercase" id="titulo_plan"> </h2>

                    </div>


                    <table class="table table-hover" id="tabla_materias_correlativas_asignadas">
                        <thead>

                            <tr>
                                <th>Codigo</th>
                                <th>Materia</th>
                                <th>Abreviatura</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>


                        <?php
                        $sql = "SELECT * from materias INNER JOIN correlativas WHERE materias.id = correlativas.codigo_correlativa AND correlativas.codigo_materia = $id_materias_oculto";
                        $resultado = mysqli_query(conectame(), $sql);

                        if (mysqli_num_rows($resultado) < 1) {

                        ?>
                        <tbody>

                            <script>
                            $(document).ready(function() {

                                Swal.fire({
                                    title: 'Ooops, no se encuentra ninguna Correlatividad asignada a esta Materia.',
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

                        </tbody>
                        <?php
                        } else {
                            while ($row2 = mysqli_fetch_array($resultado)) {


                            ?>

                        <tbody>

                            <tr id="probando">
                                <td><?php echo $row2['id'] ?></td>
                                <td><?php echo $row2['nombre'] ?></td>
                                <td><?php echo $row2['abreviatura'] ?></td>
                                <td> <a href="#" data-id_materia="<?php echo $row['id'] ?>"
                                        class="btn btn-danger btnQuitarMateria m-1 rounded"> Quitar </td>
                            </tr>

                        </tbody>
                        <?php   }
                        } ?>




                    </table>

                </div>
            </main>




            <!--  MODAL CORRELATIVAS-->
            <div class="modal fade" id="modal_correlativas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">CORRELATIVAS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">



                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="mt-2">Materia: </h4>
                                <h4 class="ms-1 mt-2" id="titulo_materia"> </h4>
                            </div>
                            <hr style="width: 100%; color: black;">
                            <div class="d-flex align-items-center justify-content-center">
                                <form action="ver_materias_asignadas_plan.php" method="POST">

                                    <input type="text" class="input_id_materia_oculto">
                                    <button type="submit" value="" name="id_planestudio"
                                        class="btn btn-success m-3  btnVerMaterias" data-toggle="tooltip"
                                        data-placement="bottom" title="Ver materias correlativas">Ver Materias
                                        Correlativas
                                    </button>
                                </form>


                                <form action="asignar_materias_correlativas.php" method="POST">
                                    <input type="text" class="input_id_materia_oculto" name="id_materias">

                                    <button type="submit" value="" name="id_materia"
                                        class="btn btn-primary btnAsignarMaterias" data-toggle="tooltip"
                                        data-placement="bottom" title="Asignar nueva materia">Asignar Materia
                                        Correlativa
                                    </button>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
            <!-- FIN MODAL CORRELATIVAS-->




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
//DESVINCULAR MATERIA
$(document).on("click", ".btnCorrelativas", function() {

    /**
     * MODIFICACIONES MODAL
     */
    var id_planestudio = $(".boton_id_plan_oculto").val();
    console.log('id plan : ' + id_planestudio);

    var id = $(this).data('id_materia');
    console.log('id materia : ' + id);

    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    //Asi se obtiene el id de la materia porque tiene cargado en el atributo data el id el boton
    $.ajax({
        url: "../../backend/materias/crudmaterias.php",
        data: {
            opcion: opcion,
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data); //lees los datos json o sea los convertis a string

            var nombremateria = json.nombre;
            $(" #titulo_materia").text(nombremateria);
            $(' .input_id_materia_oculto').val(json.id)

            // $(" .btnAsignarMaterias").val(json.id);
            // $(" .btnVerMaterias").val(json.id);


            // $(" .btnAsignarMaterias").attr("href", "asignarmaterias.php?id='+id+'");

            // window.location.href =
            //     "http://www.gorissen.info/Pierre/maps/googleMapLocation.php?lat=" + elemA +
            //     "&lon=" + elemB + "&setLatLon=Set"


        }
    })




























}); // TERMINA AGREGAR MATERIA
</script>


<!-- PARA VER SI ES PRIMER AÑO O 2DO ETC  -->
<script>
$(document).ready(function() {

    opcion = 5; //BUSCAR LOS DATOS INDIVIDUALMENTE

    var id = $(".boton_id_plan_oculto").val();
    // console.log(id);


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
</script>SSSSSSSSSS
<!-- PARA VER SI ES PRIMER AÑO O 2DO ETC  -->



<script>
//DESVINCULAR MATERIA
$(document).on("click", ".btnQuitarMateria", function() {

    /**
     * MODIFICACIONES MODAL
     */
    var id_planestudio = $(".boton_id_plan_oculto").val();
    console.log('id plan : ' + id_planestudio);


    var id_materia = $(this).data('id_materia');
    console.log('id materia : ' + id_materia);


    // $("#" + id_materia).closest('tr').remove();
    // $(id_materia).closest('tr').remove();

    var fila = $(this).parent('td').parent('tr'); //con esto agarras el tr y eliminas la fila



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
                        ).then((id_materia) => {




                            fila.remove(); //para eliminar el tr


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



</html>