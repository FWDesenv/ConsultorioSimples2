<?php
  include_once('Layouts/_include/_topo.php');
  session_start();
  session_destroy();
?>

<h1 style="text-align:center;margin-top:4%;margin-bottom:4%">Bem Vindo</h1>

<div class="container-fluid" style="width: 280px; height: 200px; border: 1px solid #5bc0de;">
  <form action="Api/login.php" method="POST" style="margin-left:7%;margin-top:8%">
    <div class="row" style="align-items:center;margin-top:5%">
      <div class="col-ms-3" style="margin-right:4%;">
        Login:
      </div>
      <div class="col-ms-9">
        <input type="text" name="login" class="form-control" placeholder="Login" maxlength=20 autofocus/>
      </div>
    </div>

    <div class="row" style="margin-top:3%;align-items:center;">
      <div class="col-ms-3" style="margin-right:2%;">
        Senha:
      </div>
      <div class="col-ms-9">
        <input type="password" name="senha" class="form-control" placeholder="Password" maxlength=12/>
      </div>
    </div>

    <div class="row" style="margin-left:40%">
      <a href="Paginas/recovery.php">Esqueceu sua senha?</a>
    </div>

    <!-- Botões -->
    <div class="row" style="margin-top:5%;margin-left:25%">
      <div class="col-ms-6">
        <button type="submit" class="btn btn-lg btn-primary" >
          Entrar
        </button>
      </div>
    </div>

  </form>

</div>

<script>
$(document).ready(function(){
$('#errolog').hide(); //Esconde o elemento com id errolog
$('#formlogin').submit(function(){ 	//Ao submeter formulário
  var login=$('#email').val();	//Pega valor do campo email
  var senha=$('#senha').val();	//Pega valor do campo senha
  $.ajax({			//Função AJAX
    url:"Api/login.php",			//Arquivo php
    type:"post",				//Método de envio
    data: "login="+login+"&senha="+senha,	//Dados
      success: function (result){			//Sucesso no AJAX
                  if(result==1){
                    location.href='restrito.php'	//Redireciona
                  }else{
                    $('#errolog').show();		//Informa o erro
                  }
              }
  })
  return false;	//Evita que a página seja atualizada
})
})
</script>

<?php
  include_once('Layouts/_include/_rodape.php');
?>
