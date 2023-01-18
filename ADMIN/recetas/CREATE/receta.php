<?php

include('../conexionDB.php');

class receta extends conexionDB
{
  private $codigo;
  private $nombres;
  private $edad;
  private $temperatura;
  private $tratamiento;
  private $TA;
  private $peso;
  private $FC;
  private $talla;
  private $FR;
  private $circun_abdom;
  private $ID;
  private $alergias;
  private $indicaciones_generales;
  private $proxima_cita;

  public function getAllreceta()
  {
    $result = $this->conectar();
    if ($result) {
      $dataset = $this->consultar("SELECT * FROM receta;");
    } else {
      echo "no hay datos ";
      $dataset = "vacio";
    }
    return $dataset;
  }

  public function setreceta($txtnombres, $txtedad, $txttemperatura, $txttratamiento, $txtTA, $txtpeso, $txtFC, $txttalla, $txtFR, $txtcircun_abdom, $txtID, $txtalergias, $txtindicaciones_generales, $txtproxima_cita)
  {
    $sql = "insert into receta(nombres,edad,temperatura,TA,peso,FC,talla,FR,circun_abdom,ID,alergias,indicaciones_generales,proxima_cita) 
      values('" . $txtnombres . "','" . $txtedad . "','" . $txttemperatura . "','" . $txttratamiento . "','" . $txtTA . "','" . $txtpeso . "','" . $txtFC . "','" . $txttalla . "','" . $txtFR . "',,'" . $txtcircun_abdom . "','" . $txtID . "','" . $txtalergias . "','" . $txtindicaciones_generales . "','" . $txtproxima_cita . "')";
    echo $sql;
    $result = $this->conectar();

    if ($result) {
      $newid = $this->insertar($sql);
    } else {
      $newid = 0;
    }

    return $newid;
    header('C:\xampp\htdocs\Consultorio\Consultorio-medico\index.html');
  }
}
