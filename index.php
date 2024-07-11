<?php require_once('header.php');?>

 <img src="assets/Img/Group-442.jpg" class="img-fluid" alt="Responsive image" style="width: 100%">
      <section class="container">
      <div class="container-fluid text-center text-md-left" style="">
        <div class="row"style="    margin-top: 32px;">
          <p class="col-md-4 col-sm-12" style="    font-style: normal;
    font-weight: lighter;
    font-size: 23px;
    line-height: 35px;
    font-family: Roboto;
    font-weight: bold;
    letter-spacing: 0.01em;
    width: 1270px;">Conoce los distintos beneficios <span style="font-family: Roboto;
          font-style: normal;
          font-weight: bold;
          font-family: Roboto;
          font-size: 23px;
          line-height: 35px;
          letter-spacing: 0.01em;
          float:right;

    color: #565656;"></span></p>

          <div class="col-xs-1 " style=" ">
            <select class="form-control" id="ddlDia">
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
          <div class="col-md-3 mb-md-0 col-xs-1 "style="" id="divRegiones"></div>
          <div class="mb-md-0 mb-3 col-xs-1 " id="divComunas"style="">
            <select class="form-control" id="id_comuna" name="id_comuna">
              <option value="">Selecione una comuna</option>';
            </select>
          </div>
        </div>
      </div>




      <div class="container-fluid text-md-center" style="" id="divPromos"></div>


</section>
    <?php require_once('footer.php');?>
