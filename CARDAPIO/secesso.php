<?php  

    session_start();


?>

<!doctype html>
<html lang="br">
  <head>
    <?php include "../inclu/head2.php";?>
    <?php include "../inclu/javascript2.php"; ?>
  </head>
<body id="pagina">

<!--/////////////////////////////onde começa///////////////////-->
<!--parte da imagem logo, no lado esquerdo-->
           <?php include "../inclu/menu2.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-light b">
          <div class="col-2 ab"><img src="../imagens/rt.png" class="img-fluid"></div>
          <form class="form-inline col-7 btt" method="post" action="../search_submit.php"  id="searchform">
            <input class="form-control mr-sm-2 col-8 offset-1 nya" type="search" placeholder="Pesquise por lanches aqui!!!" aria-label="Search" name="pesquisa" required>  
            <button class="btn h my-2 my-sm-0 col-2 wd" type="submit" name="submit">
              <i class="material-icons">search</i></button>
          </form>


          <div class="col-3">
            <?php include "../inclu/log2.php"; ?>
          </div>
          </nav></div></div>



    <?php include "../inclu/drop2.php"; ?>



      <!--fim do menu-->



      <div class="container-fluid">
      <div class="row">

    <!--A PARTE DAS CATEGORIAS(esquerdo)-->


        <div class="col-2 cat cor">
          <?php include "../inclu/cate2.php"; ?>
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



    <div class="col-8 vvv">
      <div class="text-center font-weight-bold"><h3>PEDIDO FEITO COM SUCESSO!!</h3></div>
      <?php

      header('refresh: 2; ../index.php');

      ?>
    </div>


      <!--A PARTE DAS PROPAGANDAS-->

      <?php include "../inclu/anuncio2.php"; ?>
    </div>
    
  </div>



<!---///////////////////////////////////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    

    <?php include "../inclu/foot2.php"; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>
</html>