<?php   
 
  session_start();

  if (isset($_SESSION['usuario'])) {
  header('location: ../index.php');
  $_SESSION['logEr'] = 'Calma ae, vai parando por ai né meu comparça °^°';
  }else{}

?> 

<!doctype html>
<html lang="br">
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
  </head>
<body id="pagina">

<!--/////////////////////////////onde começa///////////////////-->
           <?php include "../inclu/menu.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-light b">
          <div class="col-2 ab"><img src="http://localhost/tcc/imagens/rt.png" class="img-fluid"></div>
          <form class="form-inline col-7 btt" method="post" action="../search_submit.php"  id="searchform">
            <input class="form-control mr-sm-2 col-8 offset-1 nya" type="search" placeholder="Pesquise por lanches aqui!!!" aria-label="Search" name="pesquisa" required>  
            <button class="btn h my-2 my-sm-0 col-2 wd" type="submit" name="submit">
              <i class="material-icons">search</i></button>
          </form>


          <div class="col-3">

              <div class="container">
                <div class="row">
                  <div class="col-1 ml-5 conta_u"><span class="badge badge-light">4</span></div>
                  <div class="col-1 ml-5 notificicacao"><span class="badge badge-light">20</span></div>
                  <div class="col-1 ml-5 logout"></div>
              </div></div>



          </div>
          </nav></div></div>




          <!--
          <div class="col-1 conta"><span class="badge badge-light">10</span></div>
          <div class="col-1 notificacao"><span class="badge badge-light">2</span></div>
          <div class="col-1 carrinho">
          <span class="badge badge-light">4</span></div>
          -->
        


<!--/////////////////////////////divisão entre a navbar e o menu com cardapio, sobre e tals/


  Sobremesas
Bebidas
Acompanhamentos
Combos
Saladas//////////////////-->

    <?php include "../inclu/drop.php"; ?>
<!--fim do menu-->

<!--BEIBE BEIBE DO BIRULEIBE LEIBE?-->



      <div class="container-fluid">
      <div class="row">

    <!--A PARTE DAS CATEGORIAS(esquerdo)-->


        <div class="col-2 cat cor">
          <?php include "../inclu/cate.php"; ?>
          <div class="dropdown-divider2"></div>

      
          <div class="text-center font-weight-bold mt-1">
            Não gostou da cor de fundo do topo?
             Personalize!! >u<
           </div>
             <div class="text-center mt-1">
            <INPUT name="alterar" TYPE="submit" id="alterar" onClick="document.all.mostraBox.style.display = (document.all.mostraBox.style.display == 'none') ? '' : 'none'" value="Mudar" class="btn btn-danger">
          </div>
          <div STYLE="display:none" ID="mostraBox" name="email" class="text-center">
            <form>
              <p class="font-weight-bold">Escolha uma cor para o fundo da página</p>
              <small>Clique aqui para escolher a cor</small>
              <input id="seletor_de_cores" type="color"/><br><br>
              <small>Clique aqui para executar a cor</small>
              <button type="button" class="btn btn-primary" onclick="mudar_cor_de_fundo()">Executar</button>
            </form>
            <p id="cor_escolhida"></p>
          </div>
      
        </div>
        
        <!--
        <li><a href="#" class="avd2">Combos
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Especiais
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Populares
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Hamburgues
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Bebidas
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>-->


      

<!--A PARTE DO CONTEUDO-->


    <div class="col-8 vvv">











<?php

  include("../conexao.class.php");
  $email_a = $_POST['email'];
  $senha_a = $_POST['senha'];
	$sql = "select * from adm where email_a=? and senha_a=?";
	$stm = Conexao::prepare($sql);
	$stm->bindValue(1, $_POST['email']);
	$stm->bindValue(2,  hash('sha256', $_POST['senha']));
	$stm->execute();

if($stm->rowCount()>0){

header('Location: adm.php');
$_SESSION['adm'] = "Admin";
$_SESSION['adm2'] = "Admin";
$_SESSION['usuario'] = 'Administrador';


}else{

  $email_fu = $_POST['email'];
  $senha_fu = $_POST['senha'];
	$sql = "select * from funcionario where email_fu=? and senha_fu=?";
	$stm = Conexao::prepare($sql);
	$stm->bindValue(1, $_POST['email']);
	$stm->bindValue(2,  hash('sha256', $_POST['senha']));
	$stm->execute();


	 if($stm->rowCount()>0){
    $mensagem = 'Bem-vindo!! :D';
    foreach ($stm as $key => $value) {
          header('Location: ../FUNCI/funcionario.php');
          $_SESSION['adm2'] = "5puuweujhrjweqkjhr234kj23iu4y2387y48723y78234y7823y4234t823eft23tegyr23y47";
          $_SESSION['usuario'] = "Funcionário";
        }
  }else{
	 	$email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = "select * from usuario, entrega where email=? and senha=?";
  $stm = Conexao::prepare($sql);
  $stm->bindValue(1, $_POST['email']);
  $stm->bindValue(2,  hash('sha256', $_POST['senha']));
  $stm->execute();

   if($stm->rowCount()>0){
    $mensagem = 'Bem-vindo!! :D';
    foreach ($stm as $key => $value) {
      echo '<div class="text-success alert-success text-center font-weight-bold">'.$mensagem,'</div>';
      header('refresh: 0.3; ../index.php');

        $nome1 = $value->nome;
        $sobnome1 = $value->sobnome;
        $email1 = $value->email;
        $cpf1 = $value->cpf;
        $endereco1 = $value->endereco;
        $numero1 = $value->numero;
        $cep1 = $value->cep;
        $complemento1 = $value->complemento;
        $fone1 = $value->fone;
        $datanasci1 = $value->datanasci;
 

        $_SESSION['usuario'] = $nome1;
        $_SESSION['sobrenome_usu'] = $sobnome1;
        $_SESSION['email'] = $email1;
        $_SESSION['cpf'] = $cpf1;
        $_SESSION['endereco'] = $endereco1;
        $_SESSION['numero'] = $numero1;
        $_SESSION['cep'] = $cep1;
        $_SESSION['complemento'] = $complemento1;
        $_SESSION['fone'] = $fone1;
        $_SESSION['datanasci'] = $datanasci1;
        $_SESSION['permissao'] = "fjksdhfjksdhfklsdjhfksjdhkjdsyhrewkuhrwkej234234dfsdfds56f7wer4wer542354r54r45r5";

        if ($value->id_entrega == $value->id) {
          $endereco_entrega1 = $value->endereco_entrega;
          $numero_entrega1 = $value->numero_entrega;
          $cep_entrega1 = $value->cep_entrega;
          $complemento_entrega1 = $value->complemento_entrega;

          $_SESSION['endereco_entrega'] = $endereco_entrega1;
          $_SESSION['numero_entrega'] = $numero_entrega1;
          $_SESSION['cep_entrega'] = $cep_entrega1;
          $_SESSION['complemento_entrega'] = $complemento_entrega1;

  }
}

	}else{
    $_SESSION['loginErro'] = "USUÁRIO OU SENHA INCORRETOS!!!";
    header('location: logar.php');
  }
  }}
  





	?>


    </div>


      <!--A PARTE DAS PROPAGANDAS-->

      <?php include "../inclu/anuncio.php"; ?>
    </div>
    
  </div>



<!---///////////////////////////////////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    


    <?php include "../inclu/foot.php"; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>
</html>

