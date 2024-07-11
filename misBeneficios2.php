<?php require_once('header.php');?>
   <img src="assets/Img/banner--tus-beneficios.jpg" class="img-fluid" alt="Responsive image" style="width: 100%">


    <div class="row">
        <div class="col-md-12" id="divNombre">

        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12" style="float:right; margin-left:18%;">
        <div class="col-md-4 col-sm-12" style="float:left;">
          <select class="form-control" id="ddlDia" onchange="filtrarMisPreferencias()">
            <option value="nada">Selecciona un dia</option>
            <option value="8">Todos los dias</option>
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sabado</option>
            <option value="7">Domingo</option>
          </select>
        </div>
        <div class="col-md-4 col-sm-12"style="float:left;" id="divRegiones"></div>
        <div class="col-md-4 col-sm-12" id="divComunas"style="float:left;">
          <select class="form-control" id="id_comuna" name="id_comuna">
            <option value="">Selecione una comuna</option>;
          </select>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row text-center" style="" id="divMisPromos"></div><hr>
      <p class="col-md-6 col-sm-12" style="font-style: normal;
        font-weight: lighter;
        font-size: 30px;
        line-height: 35px;
        font-family: Roboto;
        font-weight: bold;
        letter-spacing: 0.01em;
        width: 1270px;">Lo que te estas perdiendo<span style="font-family: Roboto;
              font-style: normal;
              font-weight: bold;
              font-family: Roboto;
              font-size: 23px;
              line-height: 35px;
              letter-spacing: 0.01em;
              float:right;

        color: #565656;"></span></p>
        <div class="row text-center" style="" id="divPromosPodrias"></div>

    </div>
    <input type="hidden" name="hId" id="hId" value="<?php echo $sesion; ?>">

    <?php require_once('footer.php');?>
