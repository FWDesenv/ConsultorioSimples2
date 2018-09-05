<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
require_once('../forms/pacienteform.php');
?>

<h1 align="center"> Lista de Pacientes </h1>
<div class="container col-7" style="border: 1px solid #5bc0de;">

  <!-- Mecanismo de Busca -->
  <form action="" method="POST">
    <!-- Busca por Paciente -->
    <div class="row" style="margin-top:2%;margin-bottom:2%;margin-left:15%;align-items:center;">
      <div class="col-ms-10" style="margin-right:5%">
        <div class="row" style="align-items:center">
          <!--Nome de Usuário-->
          <div class="col-ms-4" style="margin-right:24px;">
            Nome:
          </div>

          <div class="col-ms-8" >
            <input type="text" name="pac_nome" maxlength=20 size=50 pattern="[a-z]$" title="Insira somente letras!"/>
          </div>
        </div>
        <center style="margin-top:2%;margin-bottom: b:2%;">Ou</center>
        <!-- Nome do Cliente -->
        <div class="row" style="align-items:center">
          <div class="col-ms-3" style="margin-right:15px;">
            Pacientes:
          </div>

          <div class="col-ms-3" style="margin-right:20px;">
            <input type="radio" name="pac_tipo" id="pac_tipo1"/>Ativos
          </div>
          <div class="col-ms-3">
            <input type="radio" name="pac_tipo" id="pac_tipo2"/>Inativos
          </div>
        </div>
      </div>
      <div class="col-ms-2">
        <button class="btn btn-lg btn-primary">Filtrar</button>
      </div>
    </div>

  </form>
</div>

<!-- Adicionar Pacientes-->
<div class="container" align="center" style="margin-top:2%;margin-bottom:2%;">
  <form action="../forms/pacienteform.php" method="post">
    <div class="row">
      <div class="col-12">
        <button class="btn btn-lg btn-primary"> Adicionar Paciente</button>
      </div>
    </div>
  </form>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:12%">
  <table class="table table-responsive">
    <thead>
      <tr class="table-primary">
        <th><center></center></th>
        <th><center>Nome</center></th>
        <th><center>CPF</center></th>
        <th><center>Contato</center></th>
        <th><center>E-mail</center></th>
        <th><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="radio" name="acao"/></td>
        <td>Vitor de assunção vieira carvalho</td>
        <td>000.000.000-00</td>
        <td>(xx) 00000-0000</td>
        <td>seila@imaginação.com.br</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/pacienteform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/pacienteform.php">
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
      <tr>
        <td><input type="radio" name="acao"/></td>
        <td>João das Coves</td>
        <td>05/05/2018</td>
        <td>05/05/2019</td>
        <td>Ativo</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/pacienteform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/pacienteform.php">
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
      <tr>
        <td><input type="radio" name="acao"/></td>
        <td>Maria Vai Comas Outras</td>
        <td>15/05/2018</td>
        <td>15/05/2019</td>
        <td>Ativo</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/pacienteform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/pacienteform.php">
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
  <div class="container">
    <div class="row">
      <div class="col-3">
        <a href="responsaveis.php">
          <button type="button" class="btn btn-sm btn-primary">
            Respons&aacuteveis
          </button>
        </a>
      </div>
      <div class="col-3">
        <a href="contratos.php">
          <button type="button" class="btn btn-sm btn-primary">
            Contratos
          </button>
        </a>
      </div>
      <div class="col-3">
          <a href="prontuario.php">
          <button type="button" class="btn btn-sm btn-primary">
            Prontu&aacuterio
          </button>
        </a>
      </div>
      <div class="col-3">
        <a href="informes.php">
          <button type="button" class="btn btn-sm btn-primary">
            Informes
          </button>
        </a>
      </div>
    </div>
  </div>

</div>

<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
