<?php
$teste;
include_once('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>
<div class="row">
    <div class="col-10">
      <h1 style='margin-left:15%'>Cadastro de Pacientes</h1>
      <form action="../../Api/paciente.php" method="post">

      <div class="container" style='margin-top:2%;'>
        <!-- Nome -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:50px;">
            Nome:

          </div>
          <div class="col-ms-9">
            <input type="text" name="nome" class="form-control" placeholder="Nome do paciente"
             pattern="[a-z]+$" title="Insira somente letras!" maxlength=50 size="50" autofocus/>

          </div>
        </div>
        <!-- CPF -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:67px;">
            CPF:

          </div>
          <div class="col-ms-9">
            <input type="text" name="cpf" class="form-control" placeholder="Insira somente os números."
            title="Insira somente números! Sem . ou -" pattern="[0-9]+$" size="25" maxlength=11/>

          </div>
        </div>
        <!-- RG -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:72px;">
            RG:

          </div>
          <div class="col-ms-9">
            <input type="text" name="rg" class="form-control" placeholder="Insira somente os números."
            title="Insira somente números! Sem . ou -" pattern="[0-9]+$" size="25" maxlength=9/>

          </div>
        </div>
        <!-- Data de Nascimento -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:9px;">
            Nascimento:

          </div>
          <div class="col-ms-9">
            <input type="date" name="data" class="form-control" title="Insira uma data válida. Utilize o calendário do campo." maxlength=8/>

          </div>
        </div>
        <!-- Responsável -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:7px;">
            Respons&aacutevel:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="respID">
              <option value=1>Selecione um Responsável</option>
            </select>
          </div>
        </div>
        <!-- Celular -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:44px;">
            Celular:

          </div>
          <div class="col-ms-9">
            <input type="text" name="celular" class="form-control" placeholder="(xx) 99999-9999" maxlength=11/>

          </div>
        </div>
        <!-- E-mail -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:49px;">
            E-mail:

          </div>
          <div class="col-ms-9">
            <input type="email" name="email" class="form-control" placeholder="e-mail@servidor.com.br" maxlength=50/>

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
