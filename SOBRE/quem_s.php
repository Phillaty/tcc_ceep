<?php   

    session_start();


?>
  <!doctype html>  
<html lang="br">
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
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


            <?php include "../inclu/log.php"; ?>
          </div>
          </nav></div></div>


        


<!--////////divisão entre a navbar e o menu com cardapio, sobre e tals/////////////-->

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

<!--A PARTE DO CONTEUDO-->


      <div class="col-8 vvv">

        <div class="text-center mt-3"><h3>Mais sobre o site e nós</h3></div>

        <div class="mt-3 mhn text-justify">
<p>&nbsp;Na cidade de Cascavel está ocorrendo um grande crescimento, a cidade está
expandido e se tornando uma metrópole, quanto maior a cidade maior a demanda de
alimentos, com esse pensamento começam a surgir diversos estabelecimentos que
vendem e entregam comida, atualmente no mundo a comida preferida das pessoas são
os lanches pois são fáceis e rápidos de comer.</p>

<p>&nbsp;Somos estudantes do Colégio Estadual Pedro Boaretto Neto, cursando no curso técnico em informática
onde tivemos após uma analise desenvolver este site, para apresentarmos como TCC.</p>

<p>&nbsp;Com a grande demanda de comida, pensamos que seria mais eficiente vender
lanches para entrega com um preço acessível e um preparo rápido, assim surgiu a ideia
de nosso site, ao criar um mecanismo simples rápido e que poderia ser utilizado para
matar a fome naquela hora no descanso de sua casa ou de onde você estiver.</p>

<p>&nbsp;O site irá substituir a ideia da pessoa ter que ir até o local, e que poderá ter a
probabilidade de estarem fechados por conta do horário, por algo simples e eficaz que
poderia servir clientes em quaisquer regiões da cidade. A partir daí desenvolvemos um
site de entrega e vendas de lanche para ajudar tais pessoas que sentem fome porém
não querem ou são incapacitados por conta de seus horários de trabalho e não tem
tempo para ir a um estabelecimento que venda comida.</p>

<p>&nbsp;O site tem a intenção de ajudar as pessoas com um sistema simples, no qual o
cliente faz seu pedido Online e que será entregue em sua casa, trabalho ou qualquer
lugar que esteja, assim como o mesmo informou no cadastro, ou na hora de fazer o
pedido. Sendo assim, terá o sistema de login para que saibamos quem o cliente é, onde
é para entregar o lanche e outras informações. Na conta do usuário pedira apenas
informações básicas, respeitando, é claro, suas privacidades com o uso de seus dados
para não causar algum mal entendido.</p>
        </div>

<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=R.%20Natal%2C%202800%20-%20Centro%2C%20Cascavel%20-%20PR%2C%2085805-070+(Ceep)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
        
      </div>


      <!--A PARTE DAS PROPAGANDAS       <div class="dropdown-divider mt-4"> &amp</div>
              PARTICIPAÇÃO-->

      <?php include "../inclu/anuncio.php"; ?>
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


<!--MADE BY GUSTAVO VILLAS BOAS-->