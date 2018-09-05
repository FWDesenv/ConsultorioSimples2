<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<div class="row">
    <div class="col-10">
      <h1 style='margin-left:21.5%'>Upload de Informes</h1>
      <form action="../consulta/informes.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Paciente -->
        <div class="row" style='margin-bottom:1%;'>
          <div class="col-ms-3" style="margin-right:10px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID" autofocus>
              <option value=1>Selecione um Paciente</option>
            </select>

          </div>
        </div>

        <!-- Arquivo -->
        <div class="row" style='margin-bottom:1%;'>
          <div class="col-ms-3" style="margin-right:15px;">
            Arquivo:
          </div>

          <div class="col-ms-6" style="margin-right:17px;">
            <input = type="file" class="form-control" name="arquivo" maxlength=200/>
          </div>
          <div class="col-ms-3">
            <button class="btn btn-primary">
              Upload
            </buton>
          </div>
        </div>

        <div class="row" style='margin-bottom:5px;'>
          <input type="checkbox" name="disponivel">Diponibilizar Relat&oacuterio
        </div>

        <!-- Botões-->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:23%;'>
            <a href="../consulta/informes.php">
              <button type="button" class="btn btn-lg btn-primary">
                Voltar
              </button>
            </a>

          </div>
          <div class="col-ms-6">
            <button class="btn btn-lg btn-primary">
              Cadastrar
            </button>

          </div>
        </div>

      </div>

      </form>

    </div>
<?php
  include('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
