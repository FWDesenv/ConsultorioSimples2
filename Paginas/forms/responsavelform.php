<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<div class="row">
    <div class="col-10">
      <h1 style='margin-left:17%'>Cadastro de Respons&aacuteveis</h1>
      <form action="../consulta/responsaveis.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Paciente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:5px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID" autofocus>
              <option value=1>Selecione um Paciente</option>
            </select>

          </div>
        </div>
        <!-- Nome -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:21px;">
            Nome:

          </div>
          <div class="col-ms-9">
            <input type="text" name="nome" class="form-control" placeholder="Nome do responsável" maxlength=50/>

          </div>
        </div>
        <!-- CPF -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:37px;">
            CPF:

          </div>
          <div class="col-ms-9">
            <input type="text" name="cpf" class="form-control" placeholder="999.999.999-99" maxlength=11/>

          </div>
        </div>
        <!-- RG -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:42px;">
            RG:

          </div>
          <div class="col-ms-9">
            <input type="text" name="rg" class="form-control" placeholder="99.999.999-9" maxlength=9/>

          </div>
        </div>
        <!-- Celular -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:14px;">
            Celular:

          </div>
          <div class="col-ms-9">
            <input type="text" name="celular" class="form-control" placeholder="(xx) 99999-9999" maxlength=11/>

          </div>
        </div>
        <!-- E-mail -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:19px;">
            E-mail:

          </div>
          <div class="col-ms-9">
            <input type="email" name="email" class="form-control" placeholder="e-mail@servidor.com.br" maxlength=50/>

          </div>
        </div>

        <!-- Botões-->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:5%;'>
            <a href="../consulta/responsaveis.php">
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
