<?php require_once('header.php');?>
    <div class="">
        <div class="col-md-12 col-sm-12 text-center">
            <h1 style="
font-family: Roboto;
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 47px;
margin-top: 53px;


letter-spacing: 0.01em;

color: #565656;
">Ingresar a <span style="font-weight: bold;">Good Deal</span></h1>
        </div>
    </div>
    <div class="container">
      <div class="abs-center"style=" display: flex;
      align-items: center;
      justify-content: center;
      min-height: 50vh;">
        <form action="acciones/ingresar.php" class="border p-3 form" style="background: #fff;">


          <div class="form-group text-center">
            <label for="text">Rut</label>
            <input type="text" name="rut" id="rut" class="form-control" onkeyup="checkRut(this)">
          </div>
          <div class="form-group text-center">
            <label for="password">Contraseña</label>
            <input type="password" name="pass" id="pass" class="form-control">
          </div>


        <div class="text-center">
          <button type="submit" class="btn btn-primary abs-center"style="    background: #FF1822;
        border: 4px solid #1E1062;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        text-decoration: none;
        color: #FFFFFF;">Ingresar</button>



              <div class="form-group mt-2"><a href="registrar.php" style="text-decoration: none;
        color: #1e1062;">Crea una cuenta aqui!</a>

          </div> </div>


        </form>
      </div>
    </div>
<?php require_once('footer.php');?>
