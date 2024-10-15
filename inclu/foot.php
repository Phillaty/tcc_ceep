<?php


    $cx = mysqli_connect("127.0.0.1", "root", "");


    $db = mysqli_select_db($cx, "tcc");
 



    $seleciona2 = mysqli_query($cx, "SELECT * FROM categoria") or die(
     mysqli_error($cx)
    );



echo 
      '
      <div class="container-fluid asd">
      <small>
        Copyright &copy; Gustavo V. Boas e Victor H. Cichella 2018
      </small>

      <h6><a href="http://localhost/tcc/SOBRE/diretrizes.php">Politica de privacidade</a></h6>

      <div class="dropdown-divider"></div><!--Essa div eh daquela linha-->


      <div class="container">
        <div class="row">

          <div class="col-4 mt-3 mb-3"><small><a href="http://twitter.com/share" class="twitter-share-button" data-url="batata" data-text="Pra tweetar meu TCC msm e.e" data-count="horizontal" data-via="X-ratão"></a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></small></div>

          <div class="col-4 mt-3 mb-3"><small><iframe src="https://www.facebook.com/plugins/share_button.php?href=https://www.google.com.br%2F&layout=button&size=small&mobile_iframe=false&width=97&height=20&appId" width="97" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></small></div>

          <div class="col-4 mt-3 mb-3"><small>
            <script src="https://apis.google.com/js/platform.js"></script>

            <div class="g-ytsubscribe" data-channelid="UClgQ7G6e3RE6IhHs1G4t0Lg" data-layout="default" data-count="default"></div>            
          </small></div>
        </div>
      </div>

      <div class="dropdown-divider"></div><!--Essa div eh daquela linha-->
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h6>Cardápio</h6>';

    while ($pro = mysqli_fetch_assoc($seleciona2)) {
            echo '<h6><small>'.$pro['nome_cate'].'</small></h6>';
    }

    echo '<h6><small>Cardápio inteiro</small></h6>
          </div>
          <div class="col-4">
            <h6>Contato</h6>
            <h6><small>Número e endereço</small></h6>
            <h6><small>Mande um e-mail</small></h6>
            <h6><small>Trabalhe conosco</small></h6>
          </div>
          <div class="col-4">
            <h6>Sobre</h6>
            <h6><small>Sobre nós</small></h6>
            <h6><small>Noticias</small></h6>
            <h6><small>Prêmios</small></h6>
            <h6><small>Créditos</small></h6>
          </div>
        </div>
      </div>

      <div class="dropdown-divider"></div>
    </div>
    <div class="estavel imagem_cardap"><a href="http://localhost/tcc/CARDAPIO/lanches_n.php"><img src="http://localhost/tcc/imagens/cardapio.png"></a></div>';
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<div id="backtopo">
<a href="#" title="Back to Top"><img src="http://localhost/tcc/imagens/Seta_Para_Cima1.png" /></a>
</div>

<script>
$(document).ready(function(){
    
    // hide #back-top first
    $('#backtopo').hide();
       
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#backtopo').fadeIn();
            } else {
                $('#backtopo').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#backtopo').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
</script>