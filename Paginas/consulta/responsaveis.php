<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<!-- Area de exibição -->
<h1 align="center"> Lista de Respons&aacuteveis </h1>
<div class="container col-7" style="border: 1px solid #5bc0de;">

  <!-- Mecanismo de Busca -->
  <form action="buscaConsulta" method="POST">
    <!-- Busca por Responsável -->
    <div class="row" style="margin-top:2%;margin-bottom:2%;margin-left:15%;align-items:center">
      <div class="col-ms-10" style="margin-right:5%">
        <div class="row" style="align-items:center">
          <!--Nome do Responsável-->
          <div class="col-ms-4" style="margin-right:24px;">
            Nome:
          </div>

          <div class="col-ms-8" >
            <input type="text" name="resp_nome" maxlength=20 size=50 pattern="[a-z]$" title="Insira somente letras!"/>
          </div>
        </div>
        <center style="margin-top:2%;margin-bottom:2%;">Ou</center>

        <!-- Número do CPF -->
        <div class="row" style="margin-top:2%;align-items:center">
          <div class="col-ms-4" style="margin-right:37px;">
            CPF:
          </div>

          <div class="col-ms-8">
            <input type="text" name="resp_CPF" maxlength=11 size=20 pattern="[0-9]+$" title="Insira somente números!"/>
          </div>
        </div>
      </div>
      <div class="col-ms-2">
        <button class="btn btn-lg btn-primary">Filtrar</button>
      </div>
    </div>

  </form>
</div>

<!-- Adicionar Responsável-->
<div class="container" align="center" style="margin-top:2%;margin-bottom:2%;">
  <form action="../forms/responsavelform.php" method="post">
    <div class="row">
      <div class="col-12">
        <button class="btn btn-lg btn-primary">Adicionar Respons&aacutevel</button>
      </div>
    </div>
  </form>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:20%; width:70%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th scope="col"><center>Respons&aacutevel</center></th>
        <th scope="col"><center>CPF</center></th>
        <th scope="col"><center>Paciente</center></th>
        <th scope="col"><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Thiago da Silva</td>
        <td>000.000.000-00</td>
        <td>Vitor de assunção vieira carvalho</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/responsavelform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/responsavelform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Editar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="#">
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
