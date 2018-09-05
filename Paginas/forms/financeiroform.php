<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<div class="row">
    <div class="col-10">
      <h1 style='margin-left:22%'>Baixa de Pagamento</h1>
      <form action="../consulta/financeiro.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Paciente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:10px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID" maxlength=11>
              <option value=1>Jos&eacute das Coves</option>
            </select>

          </div>
        </div>
        <!-- Consulta -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:8px;">
            Consulta:

          </div>
          <div class="col-ms-9">
            <table class="table table-responsive">
              <thead>
                <tr class="table-primary">
                  <th>Data</th>
                  <th>Selecionar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>04/05/2018</td>
                  <td><center><input type="checkbox" name="consulta1"/></center></td>
                </tr>
                <tr>
                  <td>11/05/2018</td>
                  <td><center><input type="checkbox" name="consulta2"/></center></td>
                </tr>
                <tr>
                  <td>18/05/2018</td>
                  <td><center><input type="checkbox" name="consulta3"/></center></td>
                </tr>
                <tr>
                  <td>25/05/2018</td>
                  <td><center><input type="checkbox" name="consulta4"/></center></td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>

        <!-- Botões-->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:10%;'>
            <a href="../consulta/financeiro.php">
              <button type="button" class="btn btn-lg btn-primary">
                Voltar
              </button>
            </a>

          </div>
          <div class="col-ms-6">
            <button class="btn btn-lg btn-primary">Pagar</button>

          </div>
        </div>

      </div>

      </form>

    </div>
<?php
  include('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
