<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>
<div class="row">
    <div class="col-10">
      <h1 style='margin-left:21%'>Marca&ccedil&atildeo de Consulta</h1>

      <form action="../consulta/agenda.php" method="post">

      <div class="container" style='margin-top:2%;'>

        <!-- Paciente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:10px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID">
              <option value=1>Selecione um Paciente</option>
            </select>
          </div>
        </div>

        <!-- Data -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:35px;">
            Data:

          </div>
          <div class="col-ms-9">
            <input type="date" name="data" class="form-control" placeholder="01/01/2000" maxlength=8/>

          </div>
        </div>

        <!-- Horario -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:15px;">
            Hor&aacuterio:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="horario">
              <option value=1>Selecione um Horário</option>
            </select>
          </div>
        </div>

        <!-- Tipo de Atendimento -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:37px;">
            Tipo:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="tpAtendimento">
              <option value=0>Entrevista</option>
              <option value=1>Consulta</option>
            </select>
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
