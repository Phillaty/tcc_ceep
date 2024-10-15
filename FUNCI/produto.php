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


        <div class="row">
            <div class="container">
              <div class="text-center font-weight-bold mt-4"><big>Por favor, ensira os dados do produto desejado para o cadastro, no qual será inserido no cardápio em suas devidas categorias informado em tais dados informados abaixo.</big></div>
              <div class=" bg-white p-2 mt-4">

              <div class="text-center mt-3"><H3>CADASTRO DE PRODUTO</H3></div>


    <form method="post" class="mt-4 row p-2 col-8 png2" action="produto.controller.php"><!--PRA LINKA NO CONTROLER-->

      <div class="form-group col-md-12">
      <label>ESCOLHA A <strong>CATEGORIA:</strong> </label>

      <select name="Categoria"> 
        <option></option>
      <?php

      include "../conexao.class.php";
      $sql = "SELECT * FROM categoria";
      $stm = conexao::prepare($sql);
      $stm->execute(); 

      while($row=$stm->fetch(PDO::FETCH_ASSOC)){
      echo '<option value="'.$row['nome_cate'].'">'.$row['nome_cate'].'</option>';

      }
      ?>
      </select>

      </div>

      <div class="form-group col-md-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nome do produto</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Nome_produto" id="Nome_produto" placeholder="Digite o nome do produto" maxlength="19">
        </div>
      </div>

      <div class="form-group col-md-12">
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text">Descrição</span>
        </div>
          <textarea class="form-control" aria-label="With textarea" name="Descricao" id="Descricao" placeholder="Digite a descrição do produto aqui"></textarea>
        </div>


      </div>

      <div class="form-group col-md-12">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Preço</span><span class="input-group-text">R$:</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Preco" id="Preco" placeholder="diga o preço do produto Ex. 24,90">
        </div>

      </div>



      <button class="bnt btn-primary col-md-4 png4">Cadastrar produto</button>
      <a href="funcionario.php" class="bnt btn-danger col-md-4 text-center png4 mt-3 p-2 mb-5"><h6"><b>Voltar</b></h6></a>
    </form>
  </div>

</div>
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