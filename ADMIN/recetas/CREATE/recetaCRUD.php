<Head>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <center>
      <section class="home">
      </section>
      <div style="height: 1000px">

        <h2 class="myH2">Receta</h2>

        <div class="container pt-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">Recetar paciente</div>
                <div class="card-body">
                  <main>
                    <section class="principal"></section>
                    <section class="secundario">
                      <form action="addreceta.php" method="post">
                        <label for="nombres">Nombre:</label>
                        <br>
                        <input type="text" id="nombres" name="nombres" required><br>

                        <label for="edad">Edad:</label><br>
                        <input type="number" id="edad" name="edad"><br>

                        <label for="temperatura">Temperatura:</label><br>
                        <input type="number" id="temperatura" name="temperatura" step="0.1"><br>

                        <label for="tratamiento">Tratamiento:</label><br>
                        <input type="text" id="tratamiento" name="tratamiento"><br>

                        <label for="ta">TA:</label><br>
                        <input type="text" id="ta" name="ta"><br>

                        <label for="peso">Peso(KG):</label><br>
                        <input type="number" id="peso" name="peso"><br>

                        <label for="FC">FC:</label><br>
                        <input type="text" id="FC" name="FC"><br>

                        <label for="talla">Talla:</label><br>
                        <input type="number" id="talla" name="talla" step="0.1"><br>

                        <label for="FR">FR:</label><br>
                        <input type="text" id="FR" name="FR"><br>

                        <label for="circun_abdom">Circunferencia Abdominal cm:</label><br>
                        <input type="number" id="circun_abdom" name="circun_abdom" step="0.1"><br>

                        <label for="ID">Grupo Sanguineo:</label><br>
                        <input type="text" id="ID" name="ID"><br>

                        <label for="alergias">Alergias:</label><br>
                        <input type="text" id="alergias" name="alergias"><br>

                        <label for="indicaciones_generales">Indicaciones Generales:</label><br>
                        <input type="text" id="indicaciones_generales" name="indicaciones_generales"><br>

                        <label for="proxima_cita">Proxima cita:</label><br>
                        <input type="date" id="proxima_cita" name="proxima_cita">
                      </form>

                      <br>
                      <input type="submit" value="Submit">
                      </form>
                      <?php
                      include_once("receta.php");
                      ?>



                    </section>
                  </main>
                </div>
              </div>
            </div>
          </div>
        </div>




        </header>
    </center>