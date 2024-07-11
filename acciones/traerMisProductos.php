<?php
session_start();

include ("../database.php");
$id = $_REQUEST['id'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{

    $sql3 = mysqli_query($con,"SELECT b.nombre_beneficiador nombre, t.descripcion descripcion,c.id_cuenta id_cuenta
                                  from cuenta_bancaria c
                                  join beneficiador b using(id_beneficiador)
                                  join tipo_cuenta t USING(id_tipo)
                                  where id_persona = $id");


    mysqli_close($con);

    echo '  <div class="col-md-12 col-sm-12">';
  while ($r = mysqli_fetch_object($sql3))
  {
    echo '
      <div class="row mt-2">
        <div class="col-md-12 col-sm-12">
          <div class="col-md-5 col-sm-12" style="float:left;">
            <h5>Beneficiador</h5>
            <label for="">'.$r->nombre.'</label>
          </div>
          <div class="col-md-5 col-sm-12" style="float:left;">
            <h5>Producto</h5>
            <label for="">'.$r->descripcion.'</label>
          </div>
					<div class="col-md-2 col-sm-12" style="float:left;">
						<a onclick="eliminarProducto('.$r->id_cuenta.')" class="btn btn-danger">X</a>
					</div>
        </div>
      </div>
    ';

  }
  echo '
  <div class="col-md-3 col-sm-4" >
      <a style="background: #1E1062;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #ffff;"onclick="mostrarModalProductos()" class="btn btn-success">Agregar Productos</a>
  </div>
  </div>
  ';


  }

?>
