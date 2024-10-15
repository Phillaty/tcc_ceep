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
       <div class="dtz"><h5>Política de privacidade para X-ratão</h5></div>
<h6>Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.</h6>

<h6>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o X-ratão.</h6>

<h6>Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o X-ratão serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</h6>

<h6>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.</h6>

<h6>O uso do X-ratão pressupõe a aceitação deste Acordo de privacidade. A equipa do X-ratão reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.</h6>

<div class="dtz"><h5>Os anúncios</h5></div>
<h6>Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.</h6>

<div class="dtz"><h5>Ligações a Sites de terceiros</h5></div>
<h6>O X-ratão possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</h6>

<h6>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</h6>
<button class="btn offset-5 h2 wdf" onclick="history.go(-1)"><b>Voltar</b></button>
      </div>


      <!--A PARTE DAS PROPAGANDAS-->

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