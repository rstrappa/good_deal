<?php require_once('header.php');?>

        <div class=" text-center">
            <h1 style="font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 40px;
    line-height: 47px;
    margin-top: 53px;
    letter-spacing: 0.01em;
    color: #565656;">Registro a Good Deal</h1><hr>
        </div>

        <div class="container">
              <div>
                            <form action="acciones/registrarBeneficios.php" enctype="multipart/form-data" method="post">
                      <div class="text-center">
                          <div class="d-flex justify-content-center">
                              <div class="text-center col-mb-6">
                                  Subir Archivo excel
                                  <input type="file" name="archivo" id="archivo" class="form-control">
                              </div>
                          </div>
                          <div class="text-center mt-3">
                            <div class="text-center">
                              <input class="btn btn-success" type="submit" value="Subir Beneficios" style="background: #1E1062;
          box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          color: #ffff;">
                            </div>
                          </div>
                          <div class="text-center mt-3">
                            <div class="text-center">
                              <a href="acciones/eliminarBeneficios.php" class="btn btn-danger" style="background: #FF1822;
          border: 4px solid #1E1062;
          box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          border-radius: 10px;
          text-decoration: none;
          color: #FFFFFF;">Eliminar Beneficios actuales </a>
                            </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
<?php require_once('footer.php');?>
