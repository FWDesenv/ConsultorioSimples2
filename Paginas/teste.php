<?php
include_once('../../Layouts/_include/_topo3.php'); // Carrega o header da página
?>
<main>
    <header>
        <div class="row" align="right">
            <div class="col-8">
            </div>
            <div class="col-2">
                <?php echo $_SESSION['usuID']; ?>
            </div>
            <div class="col-2">
                <a href="../../Api/login.php">
                    <font color="white">Logout</font>
                </a>
            </div>
        </div>
    </header>
    
    <nav>
        <ul>
            <li>
                <a href="/ConsultorioSimples/Paginas/consulta/agenda.php" style="width:100%">
                    <button type="button" class="btn btn-primary btn-lg btn-block" >Agenda</button>
                </a>
            </li>

            <li>
                <a href="/ConsultorioSimples/Paginas/consulta/pacientes.php" style="width:100%">
                    <button type="button" class="btn btn-primary btn-lg btn-block" >Pacientes</button>
                </a>
            </li>

            <li>
                <a href='/ConsultorioSimples/Paginas/consulta/financeiro.php'style="width:100%">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Financeiro</button>
                </a>
            </li>

            <li>
                <a href='/ConsultorioSimples/Paginas/consulta/usuarios.php'style="width:100%">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Usu&aacuterios</button>
                </a>
            </li>
        </ul>
    </nav>
    
    <article>
        <div class="row">

  <div class="col-2">
    <?php include_once('../menu.html'); ?>
  </div>
  <!-- Área de exibição -->
  <div class="col-10">
    <?php
    include_once('../../Api/horarios.php');
    date_default_timezone_set('America/Sao_Paulo');
    $dateTitulo = date('d/m/Y');
    $dateForm = date('Y-m-d')
    ?>

    <h1 style="margin-left:18.3%">
      Agenda em : <?php echo $dateTitulo;?>
    </h1>

    <!-- Mecanismo de Busca -->
    <div class="container" style="margin-left:25%;">
      <form action="buscaConsulta" method="POST">

        <div class="row" style="margin-top:3%;margin-bottom:3%;">
          <div class="col-ms-2" style="margin-right:5px;">
            Data:
          </div>

          <div class="col-ms-8" style="margin-right:15px;">
            <input type="date" name="data" value="<?php echo ($dateForm); ?>">
          </div>

          <div class="col-ms-2">
            <button class="btn btn-sm btn-primary">Filtrar</button>
          </div>

        </div>
      </form>
      <form action="../forms/agendaform.php" method="POST">
        <div class="row" style="margin-left:1%; margin-bottom:3%;">
          <div class="col-12">
            <button class="btn btn-lg btn-primary">
              Marcar Atendimento
            </button>
          </div>
        </div>
      </form>
    </div>

    <!-- Informações da Tabela -->
    <div class="container" style="margin-left:5%">
    <table class="table table-responsive">
      <thead>
        <tr class="table-primary">
          <th scope="col"><center>Data</center></th>
          <th scope="col"><center>Horário</center></th>
          <th scope="col"><center>Paciente</center></th>
          <th scope="col"><center>Ação</center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>05/04/2018</td>
          <td><?php echo (getHorario('6'))?></td>
          <td>Vitor de assunção vieira carvalho</td>
          <td>
            <div class="row">
              <div class="col-4">
                <a href="../forms/consultaform.php">
                  <button type="button" class="btn btn-sm btn-primary">
                    Acessar
                  </button>
                </a>
              </div>
              <div class="col-4">
                <a href="../forms/agendaform.php">
                  <button type="button" class="btn btn-sm btn-primary">
                    Remarcar
                  </button>
                </a>
              </div>
              <div class="col-4">
                <a href="#">
                  <button type="button" class="btn btn-sm btn-danger">
                    Desmarcar
                  </button>
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

</div>
    
    </article>
</main>

<?php
  include_once('../../Layouts/_include/_rodape.php'); // Carrega o foot da página
?>
