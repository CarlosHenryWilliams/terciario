<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <div class="container">
        <button type="button" class="btn btn-info w-25 my-5" data-toggle="modal" data-target="#exampleModal">Agregar alumno</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title">Agregar Alumno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-light">
                        <div id="wrapper" class="container">
                        <center>
            <hr>

            <form name="form-work">

                <fieldset>
                    <div class="form-group">
                        <div class="">
                            <label for="" class="d-flex justify-content-start">Fecha de inscripcion</label>
                            <input name="fecha" class="form-control bg-transparent" placeholder="Fecha" type="date" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="nombre" class="form-control bg-transparent" placeholder="Nombre" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="apellido" class="form-control bg-transparent" placeholder="Apellido" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="dni" class="form-control bg-transparent" placeholder="Dni" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <label for="" class="d-flex justify-content-start">Genero</label>
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
                            <input id="input" name="fecha_nacimiento" class="form-control bg-transparent" placeholder="Fecha de nacimiento" type="date" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="lugar_nacimiento" class="form-control bg-transparent" placeholder="Lugar de nacimiento" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="estado_civil" class="form-control bg-transparent" placeholder="Estado civil" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="domicilio" class="form-control bg-transparent" placeholder="Domicilio" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="domicilio_numero" class="form-control bg-transparent" placeholder="Número de domicilio" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="piso" class="form-control bg-transparent" placeholder="Piso" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="dpto" class="form-control bg-transparent" placeholder="Dpto" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="localidad" class="form-control bg-transparent" placeholder="Localidad" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="partido" class="form-control bg-transparent" placeholder="Partido" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="codigo_postal" class="form-control bg-transparent" placeholder="Codigo postal" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input id="input" name="telefono" class="form-control bg-transparent" placeholder="Telefono" type="text" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-info btn-lg btn-block">Guardar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>