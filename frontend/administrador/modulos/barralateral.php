 <div id="layoutSidenav_nav">
     <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
         <div class="sb-sidenav-menu">
             <div class="nav">
                 <div class="sb-sidenav-menu-heading text-white">Inicio</div>
                 <a class="nav-link" href="index.php">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Administrar
                 </a>
                 <div class="sb-sidenav-menu-heading text-white">Usuarios</div>

                 <a class="nav-link btnAgregarUsuario" href="#!" data-toggle="modal" data-target="#AgregarUsuario">
                     <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                     Agregar Usuario <i class="fa-solid fa-user-plus ml-3"></i>
                 </a>


                 <a class="nav-link" href="roles.php">
                     <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                     Roles
                 </a>
                 <a class="nav-link" href="alumnos.php">
                     <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                     Alumnos
                 </a>
                 <a class="nav-link" href="docentes.php">
                     <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                     Docentes
                 </a>
                 <a class="nav-link" href="personal.php">
                     <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                     Personal
                 </a>
                 <div class="sb-sidenav-menu-heading text-white">Apartados</div>

                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1"
                     aria-expanded="false" aria-controls="collapsePages">
                     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     Plan de Estudio
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo"
                     data-bs-parent="#sidenavAccordion">
                     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                         <a class="nav-link" href="plandeestudio.php">Ver Planes</a>
                     </nav>
                 </div>

                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                     aria-expanded="false" aria-controls="collapsePages">
                     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     Materias
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                     data-bs-parent="#sidenavAccordion">
                     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                         <a class="nav-link" href="materias.php">Ver Materias</a>
                     </nav>
                     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                         <a class="nav-link" href="materiasviejo.php">Ver Materias VIEJO</a>
                     </nav>
                 </div>
             </div>
         </div>
         <div class="sb-sidenav-footer">
             <div class="small">Conectado como:</div>
             $nombre_usuario
         </div>
     </nav>
 </div>





 <!-- Modal  Agregar Usuario-->
 <div class="modal fade" id="AgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="" id="formagregarusuario">
                 <div class="modal-body">
                     <fieldset>




                         <div class="form-group">
                             <div class="">
                                 <label for="select_rol_usuario" class="d-flex justify-content-start">Rol</label>
                                 <select name="rol" id="select_rol_usuario" class="form-select" required>
                                     <option value="">Seleccione un Rol </option>

                                     <?php

                                        include('modulos/buscarroles.php'); //BUSCADOR DE MATERIAL


                                        while ($row = mysqli_fetch_array($resultado)) { ?>

                                     <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre_rol'] ?>
                                     </option>

                                     <?php }
                                        ?>



                                 </select>
                             </div>
                         </div>



                         <div class="form-group">
                             <div class="">
                                 <label for="" class="d-flex justify-content-start">Fecha de
                                     inscripcion</label>
                                 <input id="input_fecha_inscripcion" name="fecha_inscripcion"
                                     class="form-control bg-transparent" placeholder="Fecha" type="date" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_nombre_usuario" name="nombre" class="form-control bg-transparent"
                                     placeholder="Nombre" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_apellido_usuario" name="apellido" class="form-control bg-transparent"
                                     placeholder="Apellido" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_dni_usuario" name="dni" class="form-control bg-transparent"
                                     placeholder="Dni" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <label class="d-flex justify-content-start">Género</label>
                                 <select id="select_sexo_usuario" class="form-select" name="sexo" required>
                                     <option value="">Seleccione el Género</option>
                                     <option value="F">Femenino</option>
                                     <option value="M">Masculino</option>
                                     <option value="X">Otros</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <label for="" class="d-flex justify-content-start">Fecha de
                                     nacimiento</label>
                                 <input id="input_fecha_nacimiento_usuario" name="fecha_nacimiento"
                                     class="form-control bg-transparent" placeholder="Fecha de nacimiento" type="date"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_lugar_nacimiento_usuario" name="lugar_nacimiento"
                                     class="form-control bg-transparent" placeholder="Lugar de nacimiento" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_estado_civil_usuario" name="estado_civil"
                                     class="form-control bg-transparent" placeholder="Estado civil" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_domicilio_usuario" name="domicilio"
                                     class="form-control bg-transparent" placeholder="Domicilio" type="text"
                                     required="">
                             </div>
                         </div>



                         <div class="form-group">
                             <div class="">
                                 <input id="input_domicilio_numero_usuario" name="domicilio_numero"
                                     class="form-control bg-transparent" placeholder="Número de domicilio" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_piso_usuario" name="piso" class="form-control bg-transparent"
                                     placeholder="Piso" type="text" required="">
                             </div>
                         </div>


                         <div class="form-group">
                             <div class="">
                                 <input id="input_depto_usuario" name="depto" class="form-control bg-transparent"
                                     placeholder="depto" type="text" required="">
                             </div>
                         </div>




                         <div class="form-group">
                             <div class="">
                                 <input id="input_localidad_usuario" name="localidad"
                                     class="form-control bg-transparent" placeholder="Localidad" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_partido_usuario" name="partido" class="form-control bg-transparent"
                                     placeholder="Partido" type="text" required="">
                             </div>
                         </div>



                         <div class="form-group">
                             <div class="">
                                 <input id="input_codigo_postal_usuario" name="codigo_postal"
                                     class="form-control bg-transparent" placeholder="Codigo postal" type="text"
                                     required="">
                             </div>
                         </div>


                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_usuario" name="telefono" class="form-control bg-transparent"
                                     placeholder="Telefono" type="text" required="">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_alternativo_usuario" name="telefono_alternativo"
                                     class="form-control bg-transparent" placeholder="Telefono alternativo" type="text"
                                     required="">
                             </div>
                         </div>
                         <!-- DE ACA PARA ABAJO EPRRO -->
                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_alternativo_persona_usuario"
                                     name="telefono_alternativo_persona" class="form-control bg-transparent"
                                     placeholder="Telefono alternativo persona" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_correo_usuario" name="email" class="form-control bg-transparent"
                                     placeholder="Correo electronico" type="text" required="">
                             </div>
                         </div>



                         <div class="form-group">
                             <label class="d-flex justify-content-start">Estado</label>

                             <select class="form-select" aria-label="Default select example" id="input_estado_usuario"
                                 name="estado" required>
                                 <option value="">Por favor seleccione un estado</option>
                                 <option value="1">Habilitado</option>
                                 <option value="0">Deshabilitado</option>
                             </select>
                         </div>

                         <div class="form-group">
                             <label class="d-flex justify-content-start">Contraseña (por defecto 1234)</label>

                             <input readonly id="input_clave_usuario" name="clave" class="form-control bg-transparent"
                                 placeholder="Contraseña" type="password" required>
                         </div>
                         <div class="form-group">
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-info btn-lg btn-block"
                                     id="btn_enviar_form_usuarios">Agregar</button>
                             </div>
                         </div>

                     </fieldset>
                 </div>
             </form>
         </div>
     </div>
 </div>




 <script>
//AGREGAR  USUARIO
$(document).on("click", ".btnAgregarUsuario", function() {
    opcion = 1;

    console.log(opcion);

    /**
     * MODIFICACIONES MODAL
     */

    //HAGO LOS INPUTS VACIOS
    // $("#input_nombre_materia").val("");
    // $("#input_abreviatura_materia").val("");
    // $("#input_estado_m_materia").val("");
    // $("#input_id_materia").val("");
    $("#input_clave_usuario").val("1234");


    /**
     * CSS MODAL
     */
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $("#boton_agregar_form").css("background-color", "#007bff");
    $("#boton_agregar_form").css("color", "white");
    // $(".modal-title").text("Agregar Materia");

    if (opcion === 1) {
        // MODAL AGREGAR
        $("#btn_enviar_form_usuarios").click(function() {


            console.log('ESTA ACA EN OPCION 1 AGREGAR');

            var rol_usuario = $('#select_rol_usuario').val();
            var fecha_inscripcion_usuario = $('#input_fecha_inscripcion').val();
            var nombre_usuario = $('#input_nombre_usuario').val();
            var apellido_usuario = $('#input_apellido_usuario').val();
            var dni_usuario = $('#input_dni_usuario').val();
            var sexo_usuario = $('#select_sexo_usuario').val();
            var fecha_nacimiento_usuario = $('#input_fecha_nacimiento_usuario').val();
            var lugar_nacimiento_usuario = $('#input_lugar_nacimiento_usuario').val();
            var estado_civil_usuario = $('#input_estado_civil_usuario').val();
            var domicilio_usuario = $('#input_domicilio_usuario').val();
            var domicilio_numero_usuario = $('#input_domicilio_numero_usuario').val();
            var piso_usuario = $('#input_piso_usuario').val();
            var depto_usuario = $('#input_depto_usuario').val();
            var localidad_usuario = $('#input_localidad_usuario').val();
            var partido_usuario = $('#input_partido_usuario').val();
            var codigo_postal_usuario = $('#input_codigo_postal_usuario').val();
            var telefono_usuario = $('#input_telefono_usuario').val();
            var telefono_alternativo_usuario = $('#input_telefono_alternativo_usuario').val();
            var telefono_alternativo_persona_usuario = $('#input_telefono_alternativo_persona_usuario')
                .val();
            var correo_usuario = $('#input_correo_usuario').val();
            var estado_usuario = $('#input_estado_usuario').val();
            var clave_usuario = $('#input_clave_usuario').val();


            console.log(rol_usuario, fecha_inscripcion_usuario, nombre_usuario, apellido_usuario,
                dni_usuario, sexo_usuario, fecha_nacimiento_usuario, lugar_nacimiento_usuario,
                estado_civil_usuario, domicilio_usuario, domicilio_numero_usuario, piso_usuario,
                depto_usuario, codigo_postal_usuario, telefono_usuario,
                telefono_alternativo_usuario, telefono_alternativo_persona_usuario, correo_usuario,
                estado_usuario, clave_usuario);

            if (
                rol_usuario == "" ||
                fecha_inscripcion_usuario == "" ||
                nombre_usuario == "" ||
                apellido_usuario == "" ||
                dni_usuario == "" ||
                sexo_usuario == "" ||
                fecha_nacimiento_usuario == "" ||
                lugar_nacimiento_usuario == "" ||
                estado_civil_usuario == "" ||
                domicilio_usuario == "" ||
                domicilio_numero_usuario == "" ||
                codigo_postal_usuario == "" ||
                telefono_usuario == "" ||
                correo_usuario == "" ||
                estado_usuario == "" ||
                clave_usuario == ""


            ) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Por favor no deje ningun campo vacio",
                    // footer: '<a href="">Why do I have this issue?</a>'
                });
            } else {
                Swal.fire({
                    title: "Los datos son correctos?",
                    text: "El usuario sera cargado al sistema",
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
                            url: "modulos/agregarusuario.php",
                            type: "post",
                            data: {
                                opcion: opcion,
                                rol_usuario: rol_usuario,
                                fecha_inscripcion_usuario: fecha_inscripcion_usuario,
                                nombre_usuario: nombre_usuario,
                                apellido_usuario: apellido_usuario,
                                dni_usuario: dni_usuario,
                                sexo_usuario: sexo_usuario,
                                fecha_nacimiento_usuario: fecha_nacimiento_usuario,
                                lugar_nacimiento_usuario: lugar_nacimiento_usuario,
                                estado_civil_usuario: estado_civil_usuario,
                                domicilio_usuario: domicilio_usuario,
                                domicilio_numero_usuario: domicilio_numero_usuario,
                                piso_usuario: piso_usuario,
                                depto_usuario: depto_usuario,
                                localidad_usuario: localidad_usuario,
                                partido_usuario: partido_usuario,
                                codigo_postal_usuario: codigo_postal_usuario,
                                telefono_usuario: telefono_usuario,
                                telefono_alternativo_usuario: telefono_alternativo_usuario,
                                telefono_alternativo_persona_usuario: telefono_alternativo_persona_usuario,
                                correo_usuario: correo_usuario,
                                estado_usuario: estado_usuario,
                                clave_usuario: clave_usuario
                            },
                            success: function(data) {
                                var json = JSON.parse(data);
                                var status = json.status;
                                if (status == 'success') {

                                    Swal.fire(
                                        "Buen Trabajo!",
                                        "El Usuario ha sido cargado con exito!",
                                        "success"
                                    ).then(() => {

                                        $("#formagregarusuario")
                                            .trigger(
                                                "reset"
                                            ); //Reiniciar el formulario
                                        $("#AgregarUsuario .close")
                                            .click(); //Cerrar el formulario

                                        // mytable = $('#materias')
                                        //     .DataTable();
                                        // mytable.draw();
                                    });
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Oops...",
                                        text: "Revisa los campos nuevamente",
                                        // footer: '<a href="">Why do I have this issue?</a>'
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
 </script>