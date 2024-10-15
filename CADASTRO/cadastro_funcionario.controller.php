<!doctype html>    
<html lang="br">
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
  </head>
  <body id="pagina">


<!--/////////////////////////////onde começa///////////////////-->
<!--parte da imagem logo, no lado esquerdo-->
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

              <div class="bg-warning text-center"><marquee>Cadastrado >u<</marquee></div>
            
          </div>
          </nav></div></div>
        


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


      <div class="col-12 vvv"> 




        <!--


       _                           _ _
      | |                         | (_)
 _ __ | |__  _ __     ___ ___   __| |_  __ _  ___  ___
| '_ \| '_ \| '_ \   / __/ _ \ / _` | |/ _` |/ _ \/ __|
| |_) | | | | |_) | | (_| (_) | (_| | | (_| | (_) \__ \
| .__/|_| |_| .__/   \___\___/ \__,_|_|\__, |\___/|___/
| |         | |                         __/ |
|_|         |_|                        |___/


-->



     




<?php
  include "../conexao.class.php";
//Pegar dados do formulário

$email_fu = $_POST['email_fu'];
$senha_fu = hash('sha256', $_POST['senha_fu']);

//Criar conexao com banco de dado

$sql = "insert into funcionario (email_fu, senha_fu) values (?,?)";
$stm = conexao::prepare($sql);


$stm->bindValue(1, $email_fu);
$stm->bindValue(2, $senha_fu);

    $db=mysql_connect ("localhost", "root", "");
    $mydb=mysql_select_db("tcc");

    $verifica = "Select email_fu from funcionario WHERE email_fu = '$email_fu'";
    $dest = mysql_query($verifica);

              error_reporting(0);
              ini_set(“display_errors”, 0 );

if (mysql_num_rows($dest) === 0) {

  if($stm->execute()){
  echo '
  <div class="text-center mt-3 aumentar">
  Conta cadastrada com sucesso!!!!
  <p>Espere...</p>
  </div>
    ';
  header("refresh: 2;../LOGIN/adm.php");

  echo '
  <div class="alert alert-success mt-0 text-center" role="alert">
  Por favor, espere...
  </div>
    ';
}else{
  echo '
  <div class="alert alert-danger mt-0 text-center" role="alert">
  Erro :(
  </div>
    ';
}
   
} else {
   echo'<center><div class="validaop mt-3">EMAIL JÁ CADASTRADO!!!</div></center>
    <center><a href="../LOGIN/logar.php"><button class="btn h2 wdf mt-2"><b>Faça o login!</b></button></a></center>
    <div class="text-center"><small>ou</small></div>
    <center><button class="btn h2 wdf mt-2" onclick="history.go(-1)"><b>Tentar novamente</b></button></center>'
    ;
}




?>



<!--

       _              __ _                           _ _
      | |            / _(_)                         | (_)
 _ __ | |__  _ __   | |_ _ _ __ ___     ___ ___   __| |_  __ _  ___  ___
| '_ \| '_ \| '_ \  |  _| | '_ ` _ \   / __/ _ \ / _` | |/ _` |/ _ \/ __|
| |_) | | | | |_) | | | | | | | | | | | (_| (_) | (_| | | (_| | (_) \__ \
| .__/|_| |_| .__/  |_| |_|_| |_| |_|  \___\___/ \__,_|_|\__, |\___/|___/
| |         | |                                           __/ |
|_|         |_|                                          |___/

-->
























      <!--A PARTE DAS PROPAGANDAS-->
      </div>

    </div>
    
  </div>



<!---///////////////////////////////////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    

<!--A PARTE DO RODAPÉ-->

    <?php include "../inclu/foot.php"; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>
</html>