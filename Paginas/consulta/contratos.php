<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<h1 align="center"> Lista de Contratos </h1>
<div class="container col-7" style="border: 1px solid #5bc0de;">

  <!-- Mecanismo de Busca -->
  <form action="buscaConsulta" method="POST">
    <!-- Busca por Responsável -->
    <div class="row" style="margin-top:2%;margin-bottom:2%;margin-left:15%;align-items:center">
      <div class="col-ms-10" style="margin-right:5%">
        <div class="row" style="align-items:center">
          <!--Nome do Responsável-->
          <div class="col-ms-4" style="margin-right:24px;">
            Paciente:
          </div>

          <div class="col-ms-8" >
            <input type="text" name="pac_nome" maxlength=20 size=50 pattern="[a-z]$" title="Insira somente letras!"/>
          </div>
        </div>
        <center style="margin-top:2%;margin-bottom:2%;">Ou</center>

        <!-- Número do CPF -->
        <div class="row" style="align-items:center">
          <div class="col-ms-4" style="margin-right:15px;">
            Tipo de contratos:
          </div>

          <div class="col-ms-2" style="margin-right:10px;">
            <input type="radio" name="ctr_tipo" id="ctr_tipo1"/>Ativo
          </div>
          <div class="col-ms-2" style="margin-right:10px;">
            <input type="radio" name="ctr_tipo" id="ctr_tipo2"/>Encerrado
          </div>
          <div class="col-ms-2" style="margin-right:10px;">
            <input type="radio" name="ctr_tipo" id="ctr_tipo3"/>Cancelado
          </div>
        </div>
      </div>
      <div class="col-ms-2">
        <button class="btn btn-lg btn-primary">Filtrar</button>
      </div>
    </div>

  </form>
</div>

<!-- Adicionar Contrato-->
<div class="container" style="margin-top:2%;margin-bottom:2%;">
  <div class="row">
    <div class="col-6" align="right">
      <form action="../forms/contratosform.php" method="post">
        <button class="btn btn-lg btn-primary">Adicionar Contratos</button>
      </form>
    </div>
    <div class="col-6" align="left">
      <form action="../forms/contratosform.php" method="post">
        <button class="btn btn-lg btn-primary">Renovar Contrato</button>
      </form>
    </div>
  </div>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:21.5%; width=50%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th scope="col"><center>Paciente</center></th>
        <th scope="col"><center>Dt. In&iacutecio</center></th>
        <th scope="col"><center>Dt. T&eacutermino</center></th>
        <th scope="col"><center>Estado</center></th>
        <th scope="col"><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vitor de assunção vieira carvalho</td>
        <td>05/04/2018</td>
        <td>05/04/2019</td>
        <td>Ativo</td>
        <td>
          <div class="row">
            <div class="col-6">
              <a href="../forms/contratoform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-6">
              <a href="#">
                <button type="button" class="btn btn-sm btn-danger">
                  Cancelar
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
