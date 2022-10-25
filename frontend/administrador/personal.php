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


                        <h1 class="mt-4 mb-4">PERSONAL</h1>


                    </div>


                    <!-- <div class="acciones"> -->
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar personal
                        </button> -->

                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="" class="d-flex justify-content-start">Fecha</label>
                                                        <input name="fecha" class="form-control bg-transparent" placeholder="Fecha" type="date" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        
                                                        <input name="nombre" class="form-control bg-transparent" placeholder="Nombre" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                       
                                                        <input  name="apellido" class="form-control bg-transparent" placeholder="Apellido" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        
                                                        <input  name="dni" class="form-control bg-transparent" placeholder="Dni" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="inputSexo" class="d-flex justify-content-start">Genero</label>
                                                        <select class="form-control" name="sexo">
                                                            <option>Femenino</option>
                                                            <option>Masculino</option>
                                                            <option>Otros</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="" class="d-flex justify-content-start">Fecha de nacimiento</label>
                                                        <input id="" name="fecha_nacimiento" class="form-control bg-transparent" placeholder="Fecha de nacimiento" type="date" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="lugar_nacimiento" class="form-control bg-transparent" placeholder="Lugar de nacimiento" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="estado_civil" class="form-control bg-transparent" placeholder="Estado civil" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="domicilio" class="form-control bg-transparent" placeholder="Domicilio" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="domicilio_numero" class="form-control bg-transparent" placeholder="Número de domicilio" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="piso" class="form-control bg-transparent" placeholder="Piso" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="depto" class="form-control bg-transparent" placeholder="depto" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="localidad" class="form-control bg-transparent" placeholder="Localidad" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="partido" class="form-control bg-transparent" placeholder="Partido" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input  name="codigo_postal" class="form-control bg-transparent" placeholder="Codigo postal" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono" class="form-control bg-transparent" placeholder="Telefono" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono_alternativo" class="form-control bg-transparent" placeholder="Telefono alternativo" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="telefono_alternativo_persona" class="form-control bg-transparent" placeholder="Telefono alternativo persona" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <input name="email" class="form-control bg-transparent" placeholder="Correo electronico" type="text" required="">
                                                    </div>
                                                </div>

                                             

                                                <div class="form-group">
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info btn-lg btn-block" id="boton_guardarAlumno">Guardar</button>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> -->
                    <!-- TABLA -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Personal
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dni</th>
                                        <th>Sexo</th>
                                        <th>Fecha Nac</th>
                                        <th>Lugar Nac</th>
                                        <th>Estado civil</th>
                                        <th>Domicilio</th>
                                        <th>N° domicilio</th>
                                        <th>Piso</th>
                                        <th>Depto</th>
                                        <th>Localidad</th>
                                        <th>Partido</th>
                                        <th>Cod postal</th>
                                        <th>telefono</th>
                                        <th>telefono alt</th>
                                        <th>telefono alt persona</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>


                                <?php include('../../backend/personal/buscarpersonal.php'); //BUSCAR 
                                ?> <tbody>


                                    <?php

                                    foreach ($resultado as $personal) {

                                    ?>
                                    <tr>
                                        <td><?php echo $personal['id'] ?></td>
                                        <td><?php echo $personal['nombre'] ?></td>
                                        <td><?php echo $personal['apellido'] ?> </td>
                                        <td><?php echo $personal['dni'] ?> </td>
                                        <td><?php echo $personal['sexo'] ?> </td>
                                        <td><?php echo $personal['fecha_nacimiento'] ?> </td>
                                        <td><?php echo $personal['lugar_nacimiento'] ?> </td>
                                        <td><?php echo $personal['estado_civil'] ?> </td>
                                        <td><?php echo $personal['domicilio'] ?> </td>
                                        <td><?php echo $personal['domicilio_numero'] ?> </td>
                                        <td><?php echo $personal['piso'] ?> </td>
                                        <td><?php echo $personal['depto'] ?> </td>
                                        <td><?php echo $personal['localidad'] ?> </td>
                                        <td><?php echo $personal['partido'] ?> </td>
                                        <td><?php echo $personal['codigo_postal'] ?> </td>
                                        <td><?php echo $personal['telefono'] ?> </td>
                                        <td><?php echo $personal['telefono_alternativo'] ?> </td>
                                        <td><?php echo $personal['telefono_alternativo_persona'] ?> </td>
                                        <td><?php echo $personal['email'] ?> </td>

                                        <td><button id="botoneditardocente" class="btn btn-info ">Editar</button></td>
                                        <!-- <a href="<?php  ?>" target="_blank">
                                                 <?php

                                                    ?>
                                             </a> -->

                                    </tr>

                                    <?php
                                    }

                                    ?>



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
</body>

</html>