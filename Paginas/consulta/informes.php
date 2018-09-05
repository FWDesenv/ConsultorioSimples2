<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<!-- Area de exibição -->
<div class="container">
  <h1 align="center">Hist&oacuterico de Informes</h1>
  <h3 align="center">Nome do Paciente</h3>
</div>

<!-- Botão Upload de Informe-->
<div class="container-fluid" align="center" style="margin-top:2%;margin-bottom:2%;">
  <a href="../forms/informeform.php">
    <button class="btn btn-lg btn-primary">
      UPLOAD DE ARQUIVO
    </button>
  </a>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:28%;width:50%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th scope="col"><center>Arquivo</center></th>
        <th scope="col"><center>Dispon&iacutevel</center></th>
        <th scope="col"><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Relat&oacuterio de Interven&ccedil&atildeo 1</td>
        <td>
          <center><input type="checkbox" name="disponivel" checked disabled/></center>
        </td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/informeform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-danger">
                  Excluir
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Relat&oacuterio de Interven&ccedil&atildeo 2</td>
        <td>
          <center><input type="checkbox" name="disponivel" disabled/></center>
        </td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/informeform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-danger">
                  Excluir
                </button>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Relat&oacuterio de Interven&ccedil&atildeo 3</td>
        <td>
          <center><input type="checkbox" name="disponivel" checked disabled/></center>
        </td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/informeform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="informes.php">
                <button type="button" class="btn btn-sm btn-danger">
                  Excluir
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
