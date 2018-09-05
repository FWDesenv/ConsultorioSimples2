<?php
include('../../Layouts/_include/_topo2.php'); // Carrega o header da página
?>

<div class="row">
    <div class="col-10">
      <h1 style='margin-left:21%'>Cadastro de Contratos</h1>
      <form action="../consulta/contratos.php" method="post">

      <div class="container" style='margin-top:5%;'>
        <!-- Paciente -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:32px;">
            Paciente:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="pacID" autofocus>
              <option value=1>Selecione um Paciente</option>
            </select>

          </div>
        </div>
        <!-- Tipo -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:60px;">
            Tipo:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="tpContrato">
              <option value=1>Selecione um tipo</option>
            </select>

          </div>
        </div>
        <!-- Inicio -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:52px;">
            In&iacutecio:

          </div>
          <div class="col-ms-9">
            <input type="date" name="dtInicio" class="form-control" placeholder="01/01/2000" maxlength=8/>

          </div>
        </div>
        <!-- Término -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:32px;">
            T&eacutermino:

          </div>
          <div class="col-ms-9">
            <input type="date" name="dtTermino" class="form-control" placeholder="01/01/2000" maxlength=8/>

          </div>
        </div>
        <!-- Vencimento -->
        <div class="row" style='margin-bottom:5px;'>
          <div class="col-ms-3" style="margin-right:5px;">
            Vencimento:

          </div>
          <div class="col-ms-9">
            <select class="form-control" name="dVencimento">
              <option>Selecione um dia</option>
              <option value=5>5</option>
              <option value=10>10</option>
              <option value=15>15</option>
              <option value=20>20</option>
              <option value=25>25</option>
            </select>

          </div>
        </div>


        <!-- Botões-->
        <div class="row" style='margin-top:5%;'>
          <div class="col-ms-6" style='margin-right:7%;'>
            <a href="../consulta/contratos.php">
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
