 
<?php  

session_start();


include "../inclu/permi_adm.php";

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
            <div class="alert-warning"><marquee>Você está na conta do admin :3</marquee></div>
          </div>
        </nav>
      </div>
    </div>


      
    <!--////////divisão entre a navbar e o menu com cardapio, sobre e tals(menu)/////////////-->

    <?php include "../inclu/drop.php"; ?>
    
    <!--fim do menu-->
    <!--Fim do topo-->


    <div class="container-fluid">
      <div class="row">
        <div class="col-12 vvv">
          <div class="container-fluid"><div class="row">
        <?php
            $db=mysql_connect ("localhost", "root", "") or die ("Impossivel conectar ao banco de dados." . mysql_error());
            $mydb=mysql_select_db("tcc");

            $sql="SELECT * FROM usuario" ;
            $result=mysql_query($sql);

            while($row=mysql_fetch_array($result)){ 
                 $nome =$row['nome'];
                 $sobnome =$row['sobnome'];
                 $email = $row['email'];
                 $endereco = $row['endereco'];
                 $numero = $row['numero'];
                 $cep = $row['cep'];
                 $complemento = $row['complemento'];
                 $fone = $row['fone'];


                  echo '<div class="card border-danger mt-2 ml-5 p-2">Nome: '.$nome.' '.$sobnome.'<br /> 
                  Email: '.$email.'<br />
                  Endreço: '.$endereco.'<br />
                  Numero: '.$numero.'<br />
                  Cep: '.$cep.'<br />
                  Complemento: '.$complemento.'<br />
                  Telefone: '.$fone.'<br />
                  </div>';}

        ?></div></div>










        
      </div>
      </div>
    </div>

    <!--fIM PROPAGANDAS-->


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
