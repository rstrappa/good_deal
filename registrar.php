<?php require_once('header.php');?>

        <div class=" text-center">
            <h1 style="    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 40px;
    line-height: 47px;
    margin-top: 53px;
    letter-spacing: 0.01em;
    color: #1E1062">Registro a Good Deal</h1><hr>
        </div>
    
    <div class="container">
        <div >
            <form action="acciones/registrar.php" method="post">
                <div class="col-md-12">
                <h3 style="color: #FF1822;font-weight: 300;">Cuentanos un poco de ti</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Rut
                            <input type="text" name="rut" id="rut" onkeyup="checkRut(this)" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            Nombre
                            <input type="text" name="nombre" id="nombre" class="form-control"required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            Fecha de nacimiento
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"  class="form-control"required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           Direccion
                            <input type="text" name="direccion" id="direccion" class="form-control"required>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6" id="divRegiones"></div>
                    <div class="col-md-6" id="divComunas"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12">
                           Contraseña
                            <input type="password" class="form-control" name="password" id="password"required>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <h3 style="color: #FF1822;font-weight: 300;">Ahora cuentanos mas de ti, cuantanos que productos tienes para decirte tus beneficios</h3>
                    </div>

                    <div class="row mt-3">
                        <h5>Producto 1</h5>
                        <div class="col-md-3 col-sm-4" id="ddlBeneficiador"></div>
                        <div class="col-md-3 col-sm-4" id="ddlTipo"></div>

                        <div class="col-md-3 col-sm-4" >
                            <a style="background: #1E1062;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    color: #ffff;"onclick="agregarProducto()" class="btn btn-success">+</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12" id="masProductos"></div>
                    </div><hr>
                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12">
                            <h3>Cuentanos cuales son tus preferencias</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12">
                           <div id="preferencias">

                           </div>
                        </div>
                    </div>
                    <div class="row mt-4 text-center">
                        <div class="col-md-12 col-sm-12 text-center">
                            <input type="submit" class="btn btn-success" value="Registrar"style="background: #FF1822;
    border: 4px solid #1E1062;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    text-decoration: none;
    color: #FFFFFF;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require_once('footer.php');?>
