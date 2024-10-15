 
<?php  

session_start();


include "../inclu/permi_adm.php";

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

                  <div class="alert-warning"><marquee>Você está na conta do admin :3</marquee></div>
              
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
        <div class="dtz2 text-center mt-2"><h3>MANDE UMA IMAGEM PARA A PAGINA DE DESTAQUES!!</h3></div>
        <div class="text-center">Escolha uma imagem proporcional para que fique mais bunitin :3</div>
        <div class="col-5 png card mt-4 p-4">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            Selecione a imagem para o destaque:
            <input type="file" name="file" id="fileToUpload" class="mt-3"><br>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary mt-3"><br>
          </form>
          <a href="excluir_des.php"><div class="btn btn-danger mt-4">Limpar destaques</div></a>
          <a href="../LOGIN/adm.php"><div class="btn btn-dark mt-2">Voltar</div></a>
        </div>
        <div class="col-5 png card mt-4 p-4">
          <div class="text-center font-weight-bold">Imagens que estão a mostra em destaques</div>
            <form method="post" name="destaque" >
                    <?php
              $pasta ="../IMAGEM_DES/" ;
              $images=glob("$pasta/{*.png,*.jpg,*.gif,*.jpeg}",GLOB_BRACE);
                foreach ($images as $filename) {
              ?>

                <div class="teste mt-4 mb-4">
              

              <?php
              echo "<img src='$filename'>";
              echo '<div class="text-center">Arquivo: '.$filename.'</div>';
              ?>

                </div>
              <div class="dropdown-divider2 mt-4"></div>

              <?php
              }
          ?> 
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