<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<!-- Area de exibição -->

<h1 align="center"> Financeiro </h1>
<div class="container" align="center">

  <!-- Mecanismo de Busca 1 -->
  <form action="../forms/financeiroform.php" method="GET">

    <div class="row" style="margin-top:2%; margin-bottom:2%;">
      <div class="col-12">
        <button class="btn btn-lg btn-primary">
          Registrar Pagamento
        </button>
      </div>
    </div>

  </form>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:32%; width:50%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th scope="col"><center>Paciente</center></th>
        <th scope="col"><center>Situa&ccedil&atildeo</center></th>
        <th scope="col"><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vitor de assunção vieira carvalho</td>
        <td>Adimplente</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="financeiroindiv.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>João das Coves</td>
        <td>Adimplente</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="financeiroindiv.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Maria Vai Comas Outras</td>
        <td>Inadimplente</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="financeiroindiv.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
