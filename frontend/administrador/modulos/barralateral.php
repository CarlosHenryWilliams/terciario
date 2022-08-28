 <div id="layoutSidenav_nav">
     <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
         <div class="sb-sidenav-menu">
             <div class="nav">
                 <div class="sb-sidenav-menu-heading">Inicio</div>
                 <a class="nav-link" href="index.php">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Administrar
                 </a>
                 <div class="sb-sidenav-menu-heading">Usuarios</div>
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
                 <div class="sb-sidenav-menu-heading">Formularios</div>

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
                         <a class="nav-link" href="">Cargar Nuevo</a>
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
                         <a class="nav-link" href="materiasrial.php">Materias RIAL</a>
                         <a class="nav-link" href="">Cargar Nuevo</a>
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