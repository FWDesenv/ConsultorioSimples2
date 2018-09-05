<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<!-- Area de exibição -->
<div class="container">
  <h1 align="center">Prontu&aacuterio </h1>
  <h3 align="center">Nome do Paciente</h3>
</div>
<!-- Botão adicionar prontuário-->
<div class="container-fluid" align="center" style="margin-top:2%;margin-bottom:2%;">
  <a href="../forms/prontuarioform.php">
    <button class="btn btn-lg btn-primary">
      Adicionar Prontu&aacuterio
    </button>
  </a>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:39%; margin-top:2%; width:30%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th><center>Consulta</center></th>
        <th><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>08/05/2018</td>
        <td>
          <div class="row">
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>15/05/2018</td>
        <td>
          <div class="row">
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>22/05/2018</td>
        <td>
          <div class="row">
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-6">
              <a href="../forms/prontuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
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
    <a href="pacientes.php">
      <button type="button" class="btn btn-lg btn-primary">
        Voltar
      </button>
    </a>
  </div>
</div>

<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
