<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>
<div class="row">
    <div class="col-10">
      <h1 style='margin-left:15%'>Cadastro de Usu&aacuterios</h1>
      <form action="../consulta/usuarios.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Tipo de Usuário -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-4" style="margin-right:13px;">
            Tipo de Usuário:

          </div>
          <div class="col-ms-4" style="margin-right:13px;">
            <input type="radio" name="tpUsuario" >Administrador
          </div>
          <div class="col-ms-4" style="margin-right:13px;">
            <input type="radio" name="tpUsuario">Cliente
          </div>
        </div>
        <!-- Cliente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:80px;">
            Cliente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID">
              <option value="">Selecione um cliente</option>
            </select>
          </div>
        </div>
        <!-- Login -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:90px;">
            Login:

          </div>
          <div class="col-ms-9">
            <input type="text" name="login" class="form-control" placeholder="willian.boucas" maxlength=20/>

          </div>
        </div>
        <!-- Senha -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:86px;">
            Senha:

          </div>
          <div class="col-ms-9">
            <input type="password" name="senha" class="form-control" placeholder="*****" maxlength=10/>

          </div>
        </div>
        <!-- Confirmar Senha -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:10px;">
            Confirmar Senha:

          </div>
          <div class="col-ms-9">
            <input type="password" name="confirSenha" class="form-control" placeholder="*****" maxlength=10/>

          </div>
        </div>
        <!-- Botões -->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:7%;'>
            <a href="../consulta/pacientes.php">
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
