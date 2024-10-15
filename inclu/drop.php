     
<?php

    $cx = mysqli_connect("127.0.0.1", "root", "");


    $db = mysqli_select_db($cx, "tcc");
 



    $seleciona2 = mysqli_query($cx, "SELECT * FROM categoria") or die(
     mysqli_error($cx)
    );


    echo '
    <div class="container-fluid batata_1">
      <div class="row">
        <div class="col-3 pi fff dropdown batata_1"><a href="http://localhost/tcc/index.php"><center><div class="pi2"><i class="material-icons mt-1">home</i></div></center></a></div>
        <div class="col-3 pi fff dropdown batata_1">
        <a href="http://localhost/tcc/CARDAPIO/lanches_n.php"><div class="pao pi2 text-center mt-1">Cardápio</div></a>
            <div class="dropdown-content pi2">
              ';

              while ($pro = mysqli_fetch_assoc($seleciona2)) {

              echo '<a href="CARDAPIO/lanches_n.php#'.$pro['id'].'"><p class="osdrop text-center">'.$pro['nome_cate'].'</p></a>';
              }

             echo '
              <a href="http://localhost/tcc/CARDAPIO/lanches_n.php"><p class="osdrop badge-danger text-center">Cardápio inteiro</p></a>
            </div>
          
        </div>

        <div class="col-3 pi fff dropdown batata_1">
          <div class="pao pi2 text-center mt-1">Contato</div>
            <div class="dropdown-content pi2">
              <a href="#"><p class="osdrop text-center">Número e endereço</p></a>
              <a href="#"><p class="osdrop text-center">Mande um e-mail</p></a>
              <a href="#"><p class="osdrop text-center">Trabalhe conosco</p></a>          
            </div>
          
        </div>
        <div class="col-3 pi fff dropdown batata_1">
          <div class="pi2 text-center pao mt-1">Sobre</div>
            <div class="dropdown-content pi2 text-center">
              <a href="http://localhost/tcc/SOBRE/quem_s.php"><p class="osdrop">Sobre nós</p></a>
              <a href="http://localhost/tcc/SOBRE/noticias.php"><p class="osdrop">Noticias</p></a>
              <a href="http://localhost/tcc/SOBRE/premios.php"><p class="osdrop">Premios</p></a>
              <a href="http://localhost/tcc/SOBRE/creditos.php"><p class="osdrop">Créditos</p></a>
            </div>
          
        </div>
      </div>
    </div>'
?>


 

