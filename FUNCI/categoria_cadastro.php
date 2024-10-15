<?php  

session_start();


include "../inclu/permi_adm2.php";


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
          <form class="form-inline col-7 btt" method="post" action="search_submit.php"  id="searchform">
            <input class="form-control mr-sm-2 col-8 offset-1 nya" type="search" placeholder="Pesquise por lanches aqui!!!" aria-label="Search" name="pesquisa" required>  
            <button class="btn h my-2 my-sm-0 col-2 wd" type="submit" name="submit"><i class="material-icons">search</i></button>
          </form>
          <div class="col-3">
            <div class="alert-warning"><marquee>Você está na conta do funcionario :3</marquee></div>
          </div>
        </nav>
      </div>
    </div>


      
    <!--////////divisão entre a navbar e o menu com cardapio, sobre e tals(menu)/////////////-->


    
    <!--fim do menu-->
    <!--Fim do topo-->


    <div class="container-fluid">
      <div class="row">


      <div class="col-12 vvv">

      	<div class="container">

      	<div class=" fundo_cat p-2 mt-4">
          <div class="mt-3 text-center"><H3>CADASTRO DE CATEGORIAS</H3></div>
      	<form method="post" class="mt-4 row p-2 col-7 png2" action="categoria_c.controller.php"><!--PRA LINKA NO CONTROLER-->
          
      <div class="form-group col-md-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nome da categoria</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nome_cate" id="Nome_produto" placeholder="Digite o nome da categoria" maxlength="19">
        </div>
      </div>

      <div class="form-group col-md-12">
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text">Descrição</span>
        </div>
          <textarea class="form-control" aria-label="With textarea" name="descricao_cate" id="Descricao" placeholder="Digite a descrição da categoria aqui"></textarea>
        </div>


      </div>



      <button class="bnt btn-primary col-md-4 png4">Cadastrar categoria</button>
      <a class="bnt btn-warning col-md-4 text-center png4 mt-3 p-2" href="funcionario.php"><h6><b>Voltar</b></h6></a>
    </form>

</div></div>

      </div>

      <!--Fim do conteudo(meio)-->
      </div>
    </div>


    <!---//////////////////////////////coisa do bootstrap/////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    
    <!---/////////////////////////////////////////////////////////////////////////////////////-->


    <!--A PARTE DO RODAPÉ(embaixo)-->

    <?php include "../inclu/foot.php"; ?>

    <!--NÃO LEMBRO O QUE ESSES DOIS FAZEM, MAS EH IMPORTANTE-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>


<!--MADE BY GUSTAVO VILLAS BOAS AND D< -->
