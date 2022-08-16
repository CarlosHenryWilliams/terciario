 <!-- CONEXION DATABASE -->
 <?php include('modulos/conexion.php');  ?>

 <!DOCTYPE html>
 <html lang="en">

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

     <!-- JQUERY CDN -->

     <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
     <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!-- SWEET ALERT 2 -->
     <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script src='sweetalert2.min.js'></script>
     <link rel='stylesheet' href='sweetalert2.min.css'>



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


                         <h1 class="mt-4 mb-4">MATERIAS</h1>
                         <!-- <p><img class="mb-4 mt-4 col-6" src="assets/img/logo.png" style="width: 200px; "></p> -->
                         <!-- <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ol>  -->

                     </div>


                     <div class="acciones">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             Agregar materia nueva
                         </button>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Cargar Materia</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <form method="POST">
                                         <div class="modal-body">


                                             <div class="form-group">
                                                 <label for="inputnombremateria">Nombre de la materia</label>
                                                 <input type="text" class="form-control" required
                                                     id="inputnombremateria" aria-describedby="emailHelp">
                                                 <!-- <small id="emailHelp" class="form-text text-muted">We'll never share
                                                    your email with anyone else.</small> -->
                                             </div>
                                             <div class="form-group">
                                                 <label for="inputabreviaturamateria">Abreviatura</label>
                                                 <input type="text" class="form-control" required
                                                     id="inputabreviaturamateria">
                                             </div>
                                             <div class="form-group">
                                                 <!-- <label for="inputabreviaturamateria">Estado</label> -->
                                                 <input type="hidden" value="1" class="form-control"
                                                     id="inputestadomateria">
                                             </div>


                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                 data-dismiss="modal">Cerrar</button>
                                             <button type="button" id="boton_cargarmateria"
                                                 class="btn btn-primary">Cargar</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!-- <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                     <!-- <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Cantidad de Alumnos registrados en Planes de Estudio
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div> -->
                     <div class="card mb-4">
                         <div class="card-header">
                             <i class="fas fa-table me-1"></i>
                             Materias
                         </div>
                         <div class="card-body">
                             <table id="datatablesSimple">
                                 <thead>
                                     <tr>
                                         <th>id</th>
                                         <th>Nombre</th>
                                         <th>Abreviatura</th>
                                         <th>Estado</th>
                                         <th>Acciones</th>
                                     </tr>
                                 </thead>
                                 <!-- <tfoot>
                                     <tr>
                                         <th>Name</th>
                                         <th>Position</th>
                                         <th>Office</th>
                                         <th>Age</th>
                                         <th>Start date</th>
                                         <th>Salary</th>
                                     </tr>
                                 </tfoot> -->

                                 <?php include('../../backend/materias/buscarmaterias.php'); //BUSCAR MATERIAL
                                    ?> <tbody>
                                     <!-- 
                                     <tr>
                                         <td>Tiger Nixon</td>
                                         <td>System Architect</td>
                                         <td>Edinburgh</td>
                                         <td>61</td>
                                         <td>2011/04/25</td>
                                         <td>$320,800</td>
                                     </tr> -->

                                     <?php

                                        foreach ($resultado as $materia) {

                                        ?>
                                     <tr>
                                         <td><?php echo $materia['id'] ?></td>
                                         <td><?php echo $materia['nombre'] ?></td>
                                         <td><?php echo $materia['abreviatura'] ?> </td>
                                         <td><?php echo $materia['estado_m'] ?> </td>
                                         <td><button id="botoneditarmateria">Editar</button>
                                             <button id="botondeshabilitar" value='<?php echo $materia['id'] ?>'
                                                 class="botondeshabilitar"
                                                 onClick="get_id_materia(this.value)">Deshabilitar</button>
                                         </td>
                                         <!-- <a href="<?php  ?>" target="_blank">
                                                 <?php
                                                    // if ($material['tipo_archivo'] === 'application/pdf') {
                                                    //     $archivo = '<i class="fa-solid fa-file-pdf pdf"></i>';
                                                    // } else if ($material['tipo_archivo'] === 'video/mp4') {
                                                    //     $archivo = '<i class="fa-brands fa-youtube youtube"></i>';
                                                    // }
                                                    // echo $archivo;
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


     <script>
     /**Deshabilitar Materia 
      * 
      */

     //  $(window).on("load", function() {
     //      $('.botondeshabilitar').click(function() {
     //          console.log('NISMAN');
     //          let idmateria = $(this).attr("id");
     //          let nisman = $(this).attr("value");
     //          console.log(idmateria, nisman);
     //      });
     //  });


     /**Deshabilitar materia
      * 
      * Obtiene el id de de la materia
      * */

     function get_id_materia(id) {

         console.log(id)
         let id_materia = id;

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
                 $.post('../../backend/materias/deshabilitarmateria.php', {
                     var_id_materia: id_materia
                 }, function(data) {
                     if (data == '1') {
                         Swal.fire(
                             'Perfecto!',
                             'La materia ha sido dada de baja!',
                             'success'
                         )
                     } else {
                         Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'Ha ocurrido un error inesperado',
                             //  footer: '<a href="">Why do I have this issue?</a>'
                         })
                     }
                 });

             }
         })
     }

     // Delete a Single Task
     // Get a Single Task by Id 
     //escuchamos cuando demos click en cualquier boton "delete" ".task-delete"
     //  $(document).on('click', '.botondeshabilitar', () => {

     //  console.log('NISMAAAAAAAAAAAAAAAAAAAAAAAN');
     //  alert(this.value);
     //  const element = this.id;

     //  console.log(element);

     //  //se ejecuta la siguiente funcion solo si se confirma el alert
     //  if (confirm('Esta seguro de querer eliminar este elemento?')) {
     //      //selecionamos todo lo que contenga la fila de ese boton con parentElement doble para acceder a su <tr>(fila) para obtener su id
     //      const element = document.getElementsByClassName('botondeshabilitar').id;
     //      //  $(this)[0].activeElement.parentElement.parentElement;
     //      //guardamos el id como una constante que contiene el atributo que contiene la clase que contiene el id de dicha fila
     //      //  const id = $(element).attr('id');

     //      console.log(element);
     //      //ejecutamos la funcion por metodo post para eliminar la fila, damos la direccion, la variable que contiene el identificador (id) y la funcion de respuesta
     //      $.post('task-delete.php', {
     //          id
     //      }, (response) => {
     //          //llamamos a la funcion fetchTasks para reordenar la tabla luego de la eliminacion exitosa
     //          fetchTasks();
     //      });
     //  }
     //  });
     </script>



     <script>
     $('#boton_cargarmateria').click(function() {

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

                     $.post('../../backend/materias/cargarmateria.php', {
                         var_nombre_materia: nombre_materia,
                         var_abreviatura_materia: abreviatura_materia,
                         var_estado_materia: estado_materia
                     }, function(data) {
                         if (data == '1') {
                             Swal.fire(
                                 'Buen Trabajo!',
                                 'La materia ha sido cargada!',
                                 'success'
                             )
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
     </script>

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

     <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
         integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
     </script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
     </script>
 </body>

 </html>