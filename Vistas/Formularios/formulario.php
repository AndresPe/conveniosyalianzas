<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Formulario </title>

    <!-- BOOSTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- ICONOS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- HOJA DE ESTILOS -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- AXIOS -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- MODAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
</head>

<body>
    <div>
        <!--  BURBUJA DE CIERRE DE SESIÓN  -->
        <a href="../ConveniosNac/read.php" class="made-with-mk">
            <div class="brand"><i class="fas fa-sign-out-alt"></i></div>
            <div class="made-with"><strong> Cerrar sesión </strong></div>
        </a>
        <!--   CONTENEDOR PRINCIPAL   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--              -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="" method="">
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Información Requerida
                                    </h3>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#contacto" data-toggle="tab">PERSONAL</a></li>
                                        <li><a href="#contacto" data-toggle="tab">CONTACTO</a></li>
                                        <li><a href="#vivienda" data-toggle="tab">VIVIENDA</a></li>
                                        <li><a href="#solicitud" data-toggle="tab">SOLICITUD</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!-- INFO PERSONAL -->
                                    <div class="tab-pane" id="contacto">
                                        <h5>Información personal.</h5>
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombre</label>
                                                        <input name="nombre_contacto" id="nombre_contacto" type="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellido</label>
                                                        <input name="apellido_contacto" id="apellido_contacto"
                                                            type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Teléfono - Celular </label>
                                                        <input name="telefono_contacto" id="telefono_contacto"
                                                            type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Correo Electrónico </label>
                                                            <input name="correo_contacto" id="correo_contacto"
                                                                type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Dirección </label>
                                                            <input name="direccion_contacto" id="direccion_contacto"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                   
                                    <!-- INFO CONTACTO DE EMERGENCIA -->
                                    <div class="tab-pane" id="contacto">
                                        <h5>Información de tu contacto de emergencias.</h5>
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombre</label>
                                                        <input name="nombre_contacto" id="nombre_contacto" type="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellido</label>
                                                        <input name="apellido_contacto" id="apellido_contacto"
                                                            type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Teléfono - Celular </label>
                                                        <input name="telefono_contacto" id="telefono_contacto"
                                                            type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Correo Electrónico </label>
                                                            <input name="correo_contacto" id="correo_contacto"
                                                                type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Dirección </label>
                                                            <input name="direccion_contacto" id="direccion_contacto"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>

                                    <!-- INFO RECIDENCIA EN EL PAÍS -->
                                    <div class="tab-pane" id="vivienda">
                                        <h5>Información de tu recidencia</h5>

                                        <div class="row">
                                            <center>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Ciudad </label>
                                                            <input name="ciudad_colombia" id="ciudad_colombia"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Barrio </label>
                                                            <input name="barrio_colombia" id="barrio_colombia"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                            <center>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Telefono - Celular </label>
                                                            <input name="telefono_colombia" id="telefono_colombia"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Consulado / Embajada </label>
                                                            <input name="embajada_colombia" id="embajada_colombia"
                                                                type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>

                                    <!-- INFO DE SOLICITUD -->
                                    <div class="tab-pane" id="solicitud">
                                        <h5>Información de la solicitud.</h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tipo de Intercamio</label>
                                                    <select name="tipo_intercambio" id="tipo_intercambio"
                                                        class="form-control">
                                                        <option value="academico"> Académico </option>
                                                        <option value="idiomas"> Idiomas </option>
                                                        <option value="practica"> Práctica </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Periodo de Estudio </label>
                                                        <input name="periodo_estudio" id="periodo_estudio" type="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Duración (En meses) </label>
                                                        <input name="duracion" id="duracion" type="number"
                                                            class="form-control" value="6" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Semestre </label>
                                                        <input name="semestre" id="semestre" type="number"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="control-label"> Fecha Partida </label>
                                                    <div class="form-group label-floating">
                                                        <input name="fecha_partida" id="fecha_partida" type="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="control-label"> Fecha Llegada </label>
                                                    <div class="form-group label-floating">
                                                        <input name="fecha_llegada" id="fecha_llegada" type="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next'
                                            value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd'
                                            name='finish' value='Finish' />
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                            name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->
    </div>
    <!-- FOOTER -->
    <div class="footer">
        <div class="container text-center">
            <i class="fa fa-heart heart"></i>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="../assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="../assets/js/jquery.validate.min.js"></script>

</html>