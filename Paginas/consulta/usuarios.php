<?php
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<!-- Area de exibição -->

<h1 align="center"> Lista de Usu&aacuterios </h1>
<div class="container col-7" style="border: 1px solid #5bc0de; background-color: #FFFFFF">

  <!-- Mecanismo de Busca -->
  <form action="buscaConsulta" method="POST">
    <!-- Busca por Usuario -->
    <div class="row" style="margin-top:2%;margin-bottom:2%;margin-left:15%;align-items:center">
      <div class="col-ms-10" style="margin-right:5%">
        <div class="row" style="align-items:center">
          <!--Nome de Usuário-->
          <div class="col-ms-4" style="margin-right:24px;">
            Login:
          </div>

          <div class="col-ms-8" >
            <input type="text" name="login" maxlength=20 size=50 pattern="[a-z]+\.[a-z]{1,20}$" title="Fora do formato <nome>.<sobrenome>!"/>
          </div>
        </div>
        <center style="margin-top:1%;margin-bottom:1%;">Ou</center>
        <!-- Nome do Cliente -->
        <div class="row" style="align-items:center">
          <div class="col-ms-4" style="margin-right:15px;">
            Cliente:
          </div>

          <div class="col-ms-8" >
            <input type="text" name="nome" maxlength=50 size=50 pattern="[a-z]+$" title="Insira somente letras!"/>
          </div>
        </div>
        <center style="margin-top:1%;margin-bottom:1%;">Ou</center>
        <!-- Número do CPF -->
        <div class="row" style="align-items:center">
          <div class="col-ms-4" style="margin-right:37px;">
            CPF:
          </div>

          <div class="col-ms-8">
            <input type="text" name="CPF" maxlength=11 size=20 pattern="[0-9]+$" title="Insira somente números!"/>
          </div>
        </div>
      </div>
      <div class="col-ms-2">
        <button class="btn btn-lg btn-primary">Filtrar</button>
      </div>
    </div>

  </form>
</div>

<!-- Botão Adicionar Conta de Usuário -->
<div class="container-fluid" style="margin-top:2%;margin-bottom:2%;">
  <form action="../forms/usuarioform.php" method="POST">
    <div class="row" align="center">
      <div class="col-12">
        <button class="btn btn-lg btn-primary">Adicionar Usuário</button>
      </div>
    </div>
  </form>
</div>

<!-- Informações da Tabela -->
<div class="container" style="margin-left:22%; width: 750px; background-color: #FFFFFF">
  <table class="table table-responsive" style="margin-left:5px;">
    <thead>
      <tr class="table-primary">
        <th scope="col"><center>Login</center></th>
        <th scope="col"><center>Cliente</center></th>
        <th scope="col"><center>Tipo</center></th>
        <th scope="col" ><center>A&ccedil&atildeo</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>willian.boucas </td>
        <td>Willian Bouças</td>
        <td>Admin</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/usuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/usuarioform.php">
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
        <td>vitor.carvalho</td>
        <td>Vitor de assunção vieira carvalho</td>
        <td>cliente</td>
        <td>
          <div class="row">
            <div class="col-4">
              <a href="../forms/usuarioform.php">
                <button type="button" class="btn btn-sm btn-primary">
                  Acessar
                </button>
              </a>
            </div>
            <div class="col-4">
              <a href="../forms/usuarioform.php">
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

<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
