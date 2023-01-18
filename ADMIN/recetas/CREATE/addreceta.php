<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




  <?php
  echo $_POST['nombres'];
  ?>
  <br>
  <?php
  echo $_POST['edad'];
  ?>
  <br>
  <?php
  echo $_POST['temperatura'];
  ?>
  <br>
  <?php
  echo $_POST['tratamiento'];
  ?>
  <br>
  <?php
  echo $_POST['TA'];
  ?>
  <br>
  <?php
  echo $_POST['peso'];
  ?>
  <br>
  <?php
  echo $_POST['FC'];
  ?>
  <br>
  <?php
  echo $_POST['talla'];
  ?>
  <br>
  <?php
  echo $_POST['FR'];
  ?>
  <br>
  <?php
  echo $_POST['circun_abdom'];
  ?>
  <br>
  <?php
  echo $_POST['ID'];
  ?>
  <br>
  <?php
  echo $_POST['alergias'];
  ?>
  <br>
  <?php
  echo $_POST['indicaciones_generales'];
  ?>
  <br>
  <?php
  echo $_POST['proxima_cita'];
  ?>
  <br>

  <?php
  include_once("receta.php");
  $myreceta = new receta();

  $newid = $myreceta->setreceta($_POST['nombres'], $_POST['edad'], $_POST['temperatura'], $_POST['tratamiento'], $_POST['TA'], $_POST['peso'], $_POST['FC'], $_POST['talla'], $_POST['FR'], $_POST['circun_abdom'], $_POST['ID'], $_POST['alergias'], $_POST['indicaciones_generales'], $_POST['proxima_cita']);
  header('recetaCRUD.php');

  ?>
  <a href="/index.html">
    <input type="button" value="Regresar al inicio" class="button1">
  </a>