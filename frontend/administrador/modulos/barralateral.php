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

                 <a class="nav-link" href="#!" data-toggle="modal" data-target="#AgregarUsuario">
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





 <!-- Modal -->
 <div class="modal fade" id="AgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                 <label for="" class="d-flex justify-content-start">Fecha de
                                     inscripcion</label>
                                 <input id="input_fecha_inscripcion" name="fecha_inscripcion"
                                     class="form-control bg-transparent" placeholder="Fecha" type="date" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_nombre_alumno" name="nombre" class="form-control bg-transparent"
                                     placeholder="Nombre" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_apellido_alumno" name="apellido" class="form-control bg-transparent"
                                     placeholder="Apellido" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_dni_alumno" name="dni" class="form-control bg-transparent"
                                     placeholder="Dni" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <label class="d-flex justify-content-start">Género</label>
                                 <select id="select_sexo_alumno" class="form-control" name="sexo">
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
                                 <input id="input_fecha_nacimiento_alumno" name="fecha_nacimiento"
                                     class="form-control bg-transparent" placeholder="Fecha de nacimiento" type="date"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_lugar_nacimiento_alumno" name="lugar_nacimiento"
                                     class="form-control bg-transparent" placeholder="Lugar de nacimiento" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_estado_civil_alumno" name="estado_civil"
                                     class="form-control bg-transparent" placeholder="Estado civil" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input input="input_domicilio_alumno" name="domicilio"
                                     class="form-control bg-transparent" placeholder="Domicilio" type="text"
                                     required="">
                             </div>
                         </div>



                         <div class="form-group">
                             <div class="">
                                 <input input="input_domicilio_numero_alumno" name="domicilio_numero"
                                     class="form-control bg-transparent" placeholder="Número de domicilio" type="text"
                                     required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input input="input_piso_alumno" name="piso" class="form-control bg-transparent"
                                     placeholder="Piso" type="text" required="">
                             </div>
                         </div>


                         <div class="form-group">
                             <div class="">
                                 <input id="input_depto_alumno" name="depto" class="form-control bg-transparent"
                                     placeholder="depto" type="text" required="">
                             </div>
                         </div>




                         <div class="form-group">
                             <div class="">
                                 <input id="input_localidad_alumno" name="localidad" class="form-control bg-transparent"
                                     placeholder="Localidad" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_partido_alumno" name="partido" class="form-control bg-transparent"
                                     placeholder="Partido" type="text" required="">
                             </div>
                         </div>



                         <div class="form-group">
                             <div class="">
                                 <input id="input_codigo_postal_alumno" name="codigo_postal"
                                     class="form-control bg-transparent" placeholder="Codigo postal" type="text"
                                     required="">
                             </div>
                         </div>


                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_alumno" name="telefono" class="form-control bg-transparent"
                                     placeholder="Telefono" type="text" required="">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_alternativo_alumno" name="telefono_alternativo"
                                     class="form-control bg-transparent" placeholder="Telefono alternativo" type="text"
                                     required="">
                             </div>
                         </div>
                         <!-- DE ACA PARA ABAJO EPRRO -->
                         <div class="form-group">
                             <div class="">
                                 <input id="input_telefono_alternativo_persona_alumno"
                                     name="telefono_alternativo_persona" class="form-control bg-transparent"
                                     placeholder="Telefono alternativo persona" type="text" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="">
                                 <input id="input_correo_alumno" name="email" class="form-control bg-transparent"
                                     placeholder="Correo electronico" type="text" required="">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="modal-footer">
                                 <button type="submit" class="btn btn-info btn-lg btn-block"
                                     id="btn_enviar_form_alumno">Agregar</button>
                             </div>
                         </div>

                     </fieldset>
                 </div>
             </form>
         </div>
     </div>
 </div>