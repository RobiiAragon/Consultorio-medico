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

        <h2 class="myH2">Agenda</h2>

        <div class="container pt-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">Agendar paciente</div>
                <div class="card-body">
                  <main>
                    <section class="principal">
                    </section>
                    <section class="secundario">
                      <form action="addcita.php" method="POST" enctype="multipart/form-data">
                        <label for="nombre">Nombre:</label>
                        <br>
                        <input type="text" id="nombre" name="nombre" required>
                        <br>
                        <label for="fecha">Fecha de la Cita:</label>
                        <br>
                        <input type="date" name="fecha" required placeholder="Duracion" class="entradas">
                        <br>

                        <label for="horario">Duracion de la Cita:</label>
                        <br>
                        <select name="horario" id="horario">
                          <option value="08:00 A.M - 10:00 A.M">08:00 A.M - 10:00 A.M</option>
                          <option value="10:00 A.M - 12:00 P.M">10:00 A.M - 12:00 P.M</option>
                          <option value="12:00 P.M - 02:00 P.M">12:00 P.M - 02:00 P.M</option>
                          <option value="02:00 P.M - 04:00 P.M">02:00 P.M - 04:00 P.M</option>
                          <option value="04:00 P.M - 06:00 P.M">04:00 P.M - 06:00 P.M</option>
                          <option value="06:00 P.M - 08:00 P.M">06:00 P.M - 08:00 P.M</option>
                        </select>

                        <br>
                        <label for="numero_telefono">Numero de Telefono:</label>
                        <br>
                        <input type="text" id="numero_telefono" name="numero_telefono">
                        <br>
                        <br>
                        <input type="reset" value="cancelar" class="button1">
                        <input type="submit" value="Agendar cita" class="button2">
                      </form>
                      <?php
                      include_once("cita.php");
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