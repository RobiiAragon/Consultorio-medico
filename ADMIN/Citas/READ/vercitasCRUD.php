<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <center>

<body>
  <hearder>
    <h1 class="container mt-4">READ</h1>
  </hearder>

  <main>
    <section class="cml-2">

    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ame";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para seleccionar todos los datos de la tabla "agendar_cita"
    $sql = "SELECT * FROM agendar_cita";
    $result = $conn->query($sql);

    // Comprobar si hay resultados
    if ($result->num_rows > 0) {
        // Crear tabla HTML
        echo "<table border=1;>";
        // Cabecera de la tabla
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre del paciente</th>";
        echo "<th>Fecha</th>";
        echo "<th>Horario</th>";
        echo "<th>Número teléfono</th>";
        echo "</tr>";

        // Imprimir cada fila de resultados
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["nombre"] . "</td>";
          echo "<td>" . $row["fecha"] . "</td>";
          echo "<td>" . $row["horario"] . "</td>";
          echo "<td>" . $row["numero_telefono"] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
    } else {
        echo "No hay resultados en la tabla.";
    }

    $conn->close();
?>

      </center>
  </main>
  <br>
</body>

</html>