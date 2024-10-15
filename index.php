<?php  
    session_start();
?>
<!doctype html>
<html lang="br">
  <head>
    <?php include "inclu/head.php";?>
    <?php include "inclu/javascript.php"; ?>

  </head>
  <body id="pagina">

    <!--/////////////////////////////onde começa///////////////////-->

    <?php include "inclu/menu.php"; ?>



    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-light b">
          <div class="col-2 ab"><img title="Hoi meu consagrado :3" src="http://localhost/tcc/imagens/rt.png" class="img-fluid"></div>
          <form class="form-inline col-7 btt" method="post" action="search_submit.php"  id="searchform">
            <input class="form-control mr-sm-2 col-8 offset-1 nya" type="search" placeholder="Pesquise por lanches aqui!!!" aria-label="Search" name="pesquisa" required>
            <button class="btn h my-2 my-sm-0 col-2 wd" type="submit" name="submit"><i class="material-icons">search</i></button>
          </form>
          <div class="col-3">
            <?php include "inclu/log.php"; ?>
          </div>
        </nav>
      </div>
    </div>


      
    <!--////////divisão entre a navbar e o menu com cardapio, sobre e tals(menu)/////////////-->

    <?php include "inclu/drop.php"; ?>
    
    <!--fim do menu-->
    <!--Fim do topo-->


    <div class="container-fluid">
      <div class="row">

    <!--A PARTE DAS CATEGORIAS(esquerdo)-->


        <div class="col-2 cat cor">
          <?php include "inclu/cate.php"; ?>
          <div class="dropdown-divider2"></div>

      
          <div class="text-center font-weight-bold mt-1">
            Não gostou da cor de fundo do topo?
             Personalize!! >u<
           </div>
             <div class="text-center mt-1">
            <INPUT name="alterar" TYPE="submit" id="alterar" onClick="document.all.mostraBox.style.display = (document.all.mostraBox.style.display == 'none') ? '' : 'none', document.getElementById('alterar').style.display = 'none';" value="Mudar" class="btn btn-danger">
          </div>
          <div STYLE="display:none" ID="mostraBox" name="email" class="text-center">
            <form>
              <p class="font-weight-bold text-white"><h5>Escolha uma cor para o fundo da página</h5></p>
              <small>Clique aqui para escolher a cor</small>
              <input id="seletor_de_cores" type="color" class="col-12" /><br><br>
              <button type="button" class="btn btn-primary col-12" onclick="mudar_cor_de_fundo()">Executar</button>
            </form>
            
          </div>

      
        </div>
      

    <!--Fim categoria-->

    <!--A PARTE DO CONTEUDO(meio)-->


      <div class="col-8 vvv">


    
        <div id="carouselExampleIndicators" class="carousel slide jj mt-2" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="CARDAPIO/lanches_n.php"><img class="d-block w-100" src="imagens/img1.png" alt="First slide"></a>
            </div>
            <div class="carousel-item">
              <a href="CARDAPIO/lanches_n.php"><img class="d-block w-100" src="imagens/img2.png" alt="Second slide"></a>
            </div>
            <div class="carousel-item">
              <a href="CARDAPIO/lanches_n.php"><img class="d-block w-100" src="imagens/img3.png" alt="Third slide"></a>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <div class="dropdown-divider2 mt-4"></div>
            <div class="container-fluid">
            <div class="alert alert-warning m-0 text-center text-black mt-1"><marquee truespeed="">ATENÇÃO! O SITE ESTÁ EM CONSTRUÇÃO!! FALTA ALGUMAS COISAS AINDA!! :3</marquee></div>
            </div>
          
          <?php
              $pasta ="IMAGEM_DES/" ;
              $images=glob("$pasta/{*.png,*.jpg,*.gif,*.jpeg}",GLOB_BRACE);
                foreach ($images as $filename) {
              ?>

              <div class="teste mt-4 mb-4">
                <div class="dropdown-divider2 mb-4"></div>

              <?php
              echo "<a href='CARDAPIO/lanches_n.php'><img src='$filename'></a>";
              ?>

              </div>

              <?php
              }
          ?>    

          <div class="dropdown-divider2 mt-4"></div>

        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <img class="img-fluid rounded-circle" src="imagens/burg3.png" alt="">
                </div>
              </div>
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <h2 class="display-4">X-ratão, delivery</h2>
                    <p>O nosso site faz delivery para as pessoas, com uma taxa pequena e entrega rapida para que a comida não esfrie >u<</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="dropdown-divider2 mt-4"></div>
          <footer class="py-5 bg-black">
            <div class="container">
            <div class="alert alert-warning m-0 text-center text-black"><marquee scrollamount="3">ATENÇÃO! O SITE ESTÁ EM CONSTRUÇÃO!! FALTA ALGUMAS COISAS AINDA!! :3</marquee></div>
            </div>
          </footer>




<script type="text/javascript">
  window.countFPS = (function () {
  var lastLoop = (new Date()).getMilliseconds();
  var count = 1;
  var fps = 0;

  return function () {
    var currentLoop = (new Date()).getMilliseconds();
    if (lastLoop > currentLoop) {
      fps = count;
      count = 1;
    } else {
      count += 1;
    }
    lastLoop = currentLoop;
    return fps;
  };
}());

requestAnimationFrame(function () {
  console.log(countFPS());
});
</script>











          <br>
          
          <img id="impot">

        <script type="text/javascript">
          function impot(){
            document.getElementById('impot').src = 'http://3.bp.blogspot.com/-Gu7Q9STkSc0/TitiSldhGxI/AAAAAAAAAew/0ufXB5X_bSM/s320/ok_sign.jpg';
            document.getElementById('boto').style.display = 'none';
          }
        </script>
        <button id="boto" onclick="impot()">clique</button>



<marquee direction="down" width="250" height="200" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
    lol
  </marquee>
</marquee>


        </div>

      <!--Fim do conteudo(meio)-->

      <!--A PARTE DAS PROPAGANDAS(direita)-->

        <?php include "inclu/anuncio.php"; ?>
      </div>
    </div>

    <!--fIM PROPAGANDAS-->


    <!---//////////////////////////////coisa do bootstrap/////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    
    <!---/////////////////////////////////////////////////////////////////////////////////////-->

    <!--A PARTE DO RODAPÉ(embaixo)-->

    <?php include "inclu/foot.php"; ?>

    <!--NÃO LEMBRO O QUE ESSES DOIS FAZEM, MAS EH IMPORTANTE-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="pace.min.js"></script>

  </body>
</html>


<!--MADE BY GUSTAVO VILLAS BOAS AND D< -->

