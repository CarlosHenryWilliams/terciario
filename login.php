<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iniciar Sesion</title>
        <link href="frontend/administrador/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body id="body_login" background="assets/img/fondo_login.jpg">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container align-items-center">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg rounded-lg mt-5 bg-light border">
                                    <div class="card-header"><h3 class="text-center font-weight-light text-dark  my-3">Iniciar Sesion</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputdni" type="number" placeholder="Dni" />
                                                <label for="inputdni">Dni</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputclave" type="password" placeholder="Contraseña" />
                                                <label for="inputclave">Contraseña</label>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label text-dark" for="inputRememberPassword">Recordar Contraseña</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Olvide mi Contraseña</a>
                                                <a id="boton_entrar_login" class="btn btn-outline-dark" href="index.html">Entrar</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 mt-auto" style="backdrop-filter: blur(1px);">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-dark">7mo C 709 &copy; Pagina Web 2022</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
