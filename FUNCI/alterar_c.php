<?php  

session_start();


include "../inclu/permi_adm2.php";


?>
<!doctype html>   
<html lang="br">
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
    <script src="mascara/jquery.js"></script>
    <script src="mascara/jquery.maskedinput.js"></script>
  </head>
  <body>

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

                  <div class="alert-warning"><marquee>Você está na conta do funcionario :3</marquee></div>
              
          </div>
          </nav></div></div>


    
<!--////////divisão entre a navbar e o menu com cardapio, sobre e tals///////

<a href="#" class="ml-5"><img src="../img/acon/2x/baseline_account_circle_black_18dp.png"></a>

<a href="#" class="ml-5"><img src="../img/noti/2x/baseline_notifications_black_18dp.png"></a>

//////-->

           
           
<!--fim do menu-->


<!--BEIBE BEIBE DO BIRULEIBE LEIBE?-->



      <div class="container-fluid">
        <div class="row">
        

      <div class="col-12 vvv">

<?php
include "conectar.php"; // Chama a conexao com o banco de dados

              error_reporting(0);
              ini_set(“display_errors”, 0 );
  
if($_SERVER['REQUEST_METHOD']=='GET'){
    isset($_GET['id']) ? $busca2=mysql_query("SELECT * FROM categoria WHERE id='".$_GET['id']."'") : die(mysql_error());
 
    $dados = mysql_fetch_array($busca2);
 
}elseif($_SERVER['REQUEST_METHOD']=='POST'){

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome_cate  = isset($_POST['nome_cate']) ? $_POST['nome_cate'] : '';
$descricao_cate  = isset($_POST['descricao_cate']) ? $_POST['descricao_cate'] : '';
 
$atualizar = mysql_query("UPDATE categoria SET nome_cate='$nome_cate', descricao_cate='$descricao_cate' WHERE id='$id'")or die(mysql_error());
 
($atualizar) ? print '<div class="text-center"><h2>Dados alterados com sucesso</h2></div><div class="text-center"><h4>Porfavor espere...</h4</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>' : die('Falha ao alterar dados');
header("refresh: 0;listar.php");
}
?>


<div class="col-5 png card mt-4 p-4">
<div class="text-center"><H3>ALTERAR CATEGORIA</H3></div>
<div class="text-center font-weight-bold"><h6>Escreva o que quer modificar abaixo ;P</h6></div> 
<div class="dropdown-divider"></div>
<form name="teste2" id="teste2" action="" method="POST" class="text-center">
<input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">

<h5 class="mt-2">Nome categoria</h5>
 <input type="text" class="form-control" name="nome_cate" value="<?php echo $dados['nome_cate']; ?>" />
<br />

<h5>Descrição</h5>
 <textarea name="descricao_cate" class="form-control" id="Descricao"><?php echo $dados['descricao_cate']; ?></textarea>
<br />

<input type="submit" name="ok" value="Alterar" class="btn btn-info mt-2 mb-2 col-12" /><br />
<a href="#" onclick="history.go(-1)">Voltar</a>
</form>

















</div>


</div>

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





<!--MADE BY GUSTAVO VILLAS BOAS-->