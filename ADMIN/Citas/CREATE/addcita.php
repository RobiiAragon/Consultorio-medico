<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <?php
  echo $_POST['nombre'];
  ?>
  <br>
  <?php
  echo $_POST['fecha'];
  ?>
  <br>
  <?php
  echo $_POST['horario'];
  ?>
  <br>
  <?php
  echo $_POST['numero_telefono'];
  ?>
  <br>
  <?php


  include_once("cita.php");
  $mycita = new cita();

  $newid = $mycita->setcita($_POST['nombre'], $_POST['fecha'], $_POST['horario'], $_POST['numero_telefono']);
  header('citasCRUD.php');

  ?>
  <a href="/index.html">
    <input type="button" value="Regresar al inicio" class="button1">
  </a>