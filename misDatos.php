<?php require_once('header.php');?>

        <div class=" text-center">
            <h1 style="    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 40px;
    line-height: 47px;
    margin-top: 53px;
    letter-spacing: 0.01em;
    color: #1E1062">Mis Datos</h1><hr>
        </div>

    <div class="container">
      <div class="col-md-12 col-sm-12">
          <div class="row" id="divMisDatos"></div>
          <div class=" text-center">
              <h1 style="    font-family: Roboto;
                font-style: normal;
                font-weight: 500;
                font-size: 40px;
                line-height: 47px;
                margin-top: 53px;
                letter-spacing: 0.01em;
                color: #1E1062">Productos</h1><hr>
          </div>
          <div class="row" id="divMisProductos"></div>
          <div class=" text-center">
              <h1 style="font-family: Roboto;
                font-style: normal;
                font-weight: 500;
                font-size: 40px;
                line-height: 47px;
                margin-top: 53px;
                letter-spacing: 0.01em;
                color: #1E1062">Mis categorias de interes</h1><hr>
          </div>
          <div class="row" id="divMisPreferencias"></div>
      </div>
    </div>
  <input type="hidden" id="sId" value="<?php echo $_SESSION["id"] ?>">

  <!-- Modal Productos -->
  <div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Agregar Productos</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="col-md-6 col-sm-12" style="float:left;" id="ddlBeneficiador"></div>
         <div class="col-md-6 col-sm-12" style="float:left;" id="ddlTipo"></div>
         <div class="row">
           <div class="col-md-12 col-sm-12 text-center mt-3">
            <a style="background: #1E1062;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #ffff;"onclick="agregarMisProductos()" class="btn btn-success">Agregar preferencia</a>
           </div>
         </div>
         <div id="divMensaje"></div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" onclick="cerrarModal()"data-dismiss="modal">Cerrar</button>
       </div>
     </div>
   </div>
  </div>

  <!-- Modal Categorias -->
  <div class="modal fade" id="modalPreferencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Agregar Preferencia</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
          <div id="divModalNuevaPreferencia"></div>
           <div id="divMensajePreferencia"></div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" onclick="cerrarModal()"data-dismiss="modal">Cerrar</button>
       </div>
     </div>
   </div>
  </div>
<?php require_once('footer.php');?>
