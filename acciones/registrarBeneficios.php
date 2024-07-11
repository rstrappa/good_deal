<?php
      $hoy = date("YmdHis");

      //Subir archivo
        $i = $_FILES['archivo']['name'];
        $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
        $archivo = $_FILES['archivo']['tmp_name'];
        $ruta = "../excel/";
        $ruta = $ruta.$hoy.".".$ext;

        $moved=move_uploaded_file($archivo, $ruta);

        if($moved)
        {
              include ("../database.php");

              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
              mysqli_set_charset($con, 'utf8');

              //Si se movio, lo convierto en excel
              include '../excel/PHPExcel.php';
              $tempFile = $ruta;
              $excelReader = PHPExcel_IOFactory::createReaderForFile($tempFile);
              $excelObj = $excelReader->load($tempFile);
              //Hoja benefiucios
              $worksheet = $excelObj->getActiveSheet();
              $lastRow = $worksheet->getHighestRow();

              //Hoja locales
              $locales = $excelObj->setActiveSheetIndex(1);
              $ultimaFilalocaes = $locales->getHighestRow();

              for ($i=2; $i <=$lastRow ; $i++)
              {
                    $id_beneficio = $worksheet->getCell('A'.$i)->getValue();
                    $id_beneficiador = $worksheet->getCell('B'.$i)->getValue();
                    $id_comercio = $worksheet->getCell('C'.$i)->getValue();
                    $id_tipo_beneficio= $worksheet->getCell('D'.$i)->getValue();
                    $descripcion_beneficio = $worksheet->getCell('E'.$i)->getValue();
                    $dia_beneficio = $worksheet->getCell('F'.$i)->getValue();
                    $id_tipo_descuento = $worksheet->getCell('G'.$i)->getValue();
                    $oferta = ($worksheet->getCell('H'.$i)->getValue()) * 100;
                    $tipo_beneficio = $worksheet->getCell('I'.$i)->getValue();
                    $fecha_vencimiento = $worksheet->getCell('J'.$i)->getValue();
                    $fecha = date($format = 'Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($fecha_vencimiento));
                    $descripcion_larga = $worksheet->getCell('K'.$i)->getValue();

                    //Insertamos
                   $sql3 = mysqli_query($con,"INSERT INTO beneficio(id_beneficiador,id_comercio,id_tipo_beneficio,descripcion_beneficio,dia_beneficio,id_tipo_descuento,oferta,tipo_beneficio,fecha_vencimiento,descripcion_larga)VALUES($id_beneficiador,$id_comercio,$id_tipo_beneficio,'$descripcion_beneficio',$dia_beneficio,$id_tipo_descuento,'$oferta',$tipo_beneficio,'$fecha','$descripcion_larga')");

                   $sqlID = mysqli_query($con,"SELECT max(id_beneficio) id from beneficio");
                   $id = mysqli_fetch_object($sqlID);

                   for ($r=2; $r <=$ultimaFilalocaes ; $r++) {
                     $id_beneficio2 = $locales->getCell('A'.$r)->getValue();
                     $id_region = $locales->getCell('B'.$r)->getValue();
                     $id_comuna = $locales->getCell('C'.$r)->getValue();

                     if ($id_beneficio == $id_beneficio2)
                     {
                       $sqlInsert = mysqli_query($con,"INSERT INTO beneficio_locales(id_beneficio,id_region,id_comuna) VALUES($id->id,$id_region,$id_comuna)");
                     }
                   }

              }


            mysqli_close($con);
            header('Location: ../registrarBeneficios.php?m=Se registraron los beneficios');
        }
        else {
          echo "Error al subir el archivo";
        }

?>
