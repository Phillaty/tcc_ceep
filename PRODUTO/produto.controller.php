<?php  

session_start();


include "../inclu/permi_adm.php";


?>
<!doctype html>     
<html lang="br">

<!--SE TU QUISER ESTUDAR OS CODIGO DE LAYOUT, VAI NO INDEX, LA EU COLOQUEI BASTANTE COMENTARIO-->
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>


<!--PARTE PARA A MASCARA QUE USEI NO TELEFONE E CPF-->
    <script>
      jQuery(function($){$("#preco").mask("R$999,99");});
    </script>

    <script>
  function habilita(campo, idCampo) {
    document.getElementById(idCampo).disabled = campo.checked;
  }
    </script>

  </head>
  <body id="pagina">

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

                  <div class="alert-warning"><marquee>Você está na conta do admin :3</marquee></div>
              
          </div>
          </nav></div></div>
        


<!--/////////////////////////////divisão entre a navbar e o menu com cardapio, sobre e tals//////////////////-->

    <?php include "../inclu/drop.php"; ?>
<!--fim do menu-->


<!--BEIBE BEIBE DO BIRULEIBE LEIBE?-->



      <div class="container-fluid">
        <div class="row">
          
<!--A PARTE DO CONTEUDO-->
<!--O FORMULARIO-->
      


      <div class="col-12 vvv">
        <div class="row">
            <div class="container">
    <form method="post" class="mt-4 row p-2 col-8 png2" action="#">

      <?php

      include "../conexao.class.php";

      $Nome_produto = $_POST['Nome_produto'];
      $Categoria = $_POST['Categoria'];
      $Descricao = $_POST['Descricao'];
      $Preco = $_POST['Preco'];
      $Cent = $_POST['Cent'];
      $Preco_t =  $Preco . '.' . $Cent;

      $sql = "insert into produto (Nome_produto, Categoria, Descricao, Preco) values (?,?,?,?)";
      $stm = conexao::prepare($sql);

      $stm->bindValue(1, $Nome_produto);
      $stm->bindValue(2, $Categoria);
      $stm->bindValue(3, $Descricao);
      $stm->bindValue(4, $Preco_t);

      if($stm->execute()){
  echo '
  <div class="col-12 text-center font-weight-bold">
  Produto cadastrado com sucesso!!!
  <p>Aguarde, irá voltar para a tela de cadastro.</p>
  </div>
    ';
      $var = "<script>javascript:history.back(-3)</script>";
      echo $var;
  }else{
    echo "Erro!";
  }
      ?>


     
    </form>
  </div>


        </div>
      </div>


<!--FIM DO FORMULARIO-->




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