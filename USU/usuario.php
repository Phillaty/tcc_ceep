 <?php  

    session_start();


      if ($_SESSION['permissao'] == true) { }
        else{

          if ($_SESSION['adm'] == true) {
            $_SESSION['logEr'] = 'Não tem nada de intereçante ali...';
            header('Location: ../index.php');
          }else{

            if ($_SESSION['adm2'] == true) {
            $_SESSION['logEr'] = 'Não tem nada de intereçante ali...';
            header('Location: ../index.php');
            }else{
            header('Location: ../index.php');
            $_SESSION['logEr'] = 'VOCÊ PRECISA SE LOGAR PRIMEIRO PARA ENTRAR NESSA PAGINA!!!';
            }
          }}


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
        <div class="text-dark font-weight-bold text-center lanche_normal mt-2">Seu perfil!!</div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-6 text-center">
                <div class="text-info font-weight-bold text-center lanche_normal mt-2">Dados pessoais</div>
                <div class="dropdown-divider"></div>
                <?php
                echo "<p><strong>Nome</strong>: ".$_SESSION['usuario']; 
                echo "<p><strong>Sobrenome</strong>: ".$_SESSION['sobrenome_usu'];
                echo "<p><strong>Email</strong>: ".$_SESSION['email'];
                echo "<p><strong>CPF</strong>: ".$_SESSION['cpf'];
                echo "<p><strong>FONE</strong>: ".$_SESSION['fone'];
                echo "<p><strong>Data de nascimento</strong>: ".$_SESSION['datanasci'];
                ?>


            </div>
            <div class="col-6 text-center">
                <div class="text-info font-weight-bold text-center lanche_normal mt-2">Endereço padrão</div>
                <div class="dropdown-divider"></div>
                <?php
                echo "<p><strong>Endereço</strong>: ".$_SESSION['endereco'];
                echo "<p><strong>Número</strong>: ".$_SESSION['numero'];
                echo "<p><strong>CEP</strong>: ".$_SESSION['cep'];
                echo "<p><strong>Complemento</strong>: ".$_SESSION['complemento'];                
                ?>

            </div>
            <div class="col-12 text-center">
                <div class="text-info font-weight-bold text-center lanche_normal mt-2">Endereço de entrega</div>
                <div class="dropdown-divider"></div>
                <?php
                if ($_SESSION['endereco_entrega'] == true) {
               
                echo "<p><strong>Endereço</strong>: ".$_SESSION['endereco_entrega'];
                echo "<p><strong>Número</strong>: ".$_SESSION['numero_entrega'];
                echo "<p><strong>CEP</strong>: ".$_SESSION['cep_entrega'];
                echo "<p><strong>Complemento</strong>: ".$_SESSION['complemento_entrega']; 
                }else{

                  echo "Erro no server >n<";

                }                
                ?>

            </div>
          </div>
        </div>






      </div>





















































      <!--A PARTE DAS PROPAGANDAS       <div class="dropdown-divider mt-4"></div>
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