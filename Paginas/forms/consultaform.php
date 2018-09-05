<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>
<div class="row">
    <div class="col-10">
      <h1 style='margin-left:31%'>Consulta</h1>

      <form action="../consulta/prontuario.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Consulta -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:30px;">
            Consulta:

          </div>
          <div class="col-ms-9">
            <input type="radio" name="consulta"/> Realizada
            <input type="radio" name="consulta"/> Não Realizada
          </div>
        </div>
        <!-- Paciente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:30px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            Nome do Paciente
          </div>
        </div>

        <!-- Consulta -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:27px;">
            Consulta:

          </div>
          08/05/2018
        </div>

        <!-- Horario -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:35px;">
            Hor&aacuterio:

          </div>
          <div class="col-ms-9">
            14:00 ~ 14:50
          </div>
        </div>

        <!-- Anotações -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:17px;">
            Anota&ccedil&otildees:

          </div>
          <div class="col-ms-9">
            <textarea rows="5" cols="50" maxlength="2000"></textarea>
          </div>
        </div>

        <!-- Botões -->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:7%;'>
            <a href="../consulta/agenda.php">
              <button type="button" class="btn btn-lg btn-primary">
                Voltar
              </button>
            </a>

          </div>
          <div class="col-ms-6">
            <button class="btn btn-lg btn-primary">Cadastrar</button>

          </div>
        </div>

      </div>

      </form>

    </div>
</div>
<?php
  include('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
