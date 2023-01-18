<?php
  /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['inputEdad'];
 echo $_POST['inputEmail'];*/
  echo $_POST['idpaciente'];

  include_once("paciente.php");
  $mypaciente = new pacienteUPD();

  $newid = $mypaciente->updpaciente($_POST['idpaciente'], $_POST['UPnombrepaciente'], $_POST['UPfecha'], $_POST['UPduracion'], $_POST['UPtipo_paciente'], $_POST['UPjuegos']);
  //  echo $newid;

  header('Location:pacienteCRUD.php');
  ?>