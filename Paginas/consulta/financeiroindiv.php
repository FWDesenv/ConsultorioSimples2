<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<div class="row">

  <div class="col-2">
    <?php include_once('../menu.html'); ?>
  </div>
  <!-- Area de exibição -->
  <div class="col-10">
    <div class="container" style="margin-left:-10.3%;margin-bottom:3%">
      <center>
        <h1 > Extrato Financeiro </h1>
        <h3> Nome do Paciente</h3>
      </center>
    </div>

    <!-- Informações da Tabela -->
    <div class="container" style="margin-left:14%">
      <table class="table table-responsive">
        <thead>
          <tr class="table-primary">
            <th><center>ID</center></th>
            <th><center>Data Consulta</center></th>
            <th><center>Data Pagamento</center></th>
            <th><center>Situa&ccedil&atildeo</center></th>
            <th><center>A&ccedil&atildeo</center></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>07</td>
            <td>27/04/2018</td>
            <td></td>
            <td>Em Aberto</td>
            <td>
              <div class="row">
                <div class="col-4">
                  <a href="#">
                    <button type="button" class="btn btn-sm btn-primary">
                      Pagar
                    </button>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>06</td>
            <td>20/04/2018</td>
            <td>20/04/2018</td>
            <td>Paga</td>
            <td>
              <div class="row">
                <div class="col-4">
                  <a href="#">
                    <button type="button" class="btn btn-sm btn-danger">
                      Desfazer
                    </button>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>05</td>
            <td>13/04/2018</td>
            <td>13/04/2018</td>
            <td>Paga</td>
            <td>
              <div class="row">
                <div class="col-4">
                  <a href="#">
                    <button type="button" class="btn btn-sm btn-danger">
                      Desfazer
                    </button>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="container">
    <div class="row">
      <a href="financeiro.php">
        <button type="button" class="btn btn-lg btn-primary">
          Voltar
        </button>
      </a>
    </div>
  </div>

</div>

</div>
<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
