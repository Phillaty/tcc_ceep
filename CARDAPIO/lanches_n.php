<?php 

    session_start();

    if (isset($_SESSION['venda'])) {
    }else{
      $_SESSION['venda'] = array();
    }

    if (isset($_GET['par'])) {
      $_SESSION['venda'][$_GET['par']] = 1;
    }

    if (isset($_GET['del'])) {
      unset($_SESSION['venda'][$_GET['del']]);
    }

?>
<!doctype html> 
<html lang="br">
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
  </head>
  <body id="pagina">

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



<!--A PARTE DO CONTEUDO-->




<div class="col-2 carrim cat">
<div class="box_manter box_manter_estilo border border-danger">
  <?php

include "conectar.php";




  ?>
<div class="text-danger font-weight-bold text-center mt-2"><h5>Seu Carrinho</h5></div>

<div class="p-3">
<table class="text-center tamanhu_tabela table_estilo table-striped">
        <?php
include "conectar.php";


foreach ($_SESSION['venda'] as $Prod => $Quantidade) {
  $SqlCarrinho = mysql_query("SELECT * FROM produto WHERE id = '$Prod'");
  $ResAssoc = mysql_fetch_array($SqlCarrinho);

  echo "<tr><td>Nome:</td>";
  echo '<td>'.$ResAssoc['Nome_produto'].'</td></tr>';
  echo "<tr><td>Preço:</td>";
  echo '<td>'.$ResAssoc['Preco'].'</td></tr>';
  echo "<tr>";
  echo '<td colspan="3"><a href="lanches_n.php?del='.$ResAssoc['id'].'"><div class="btn btn-danger">Excluir</div></a></td>';
  echo "</tr>";
  echo "<tr class='text-center'><td colspan='2'>&nbsp;</td></tr>";
  $total += $ResAssoc['Preco'] * $Quantidade;
  $totalidade = number_format($total,2,",",".");
}
if (isset($SqlCarrinho)) {
echo '<tr>';
echo '<td colspan="3" class="font-weight-bold">Total: <h4>R$'.$totalidade.'</h4></td>';
echo '</tr>';
echo '</table>';
if (isset($_POST['enviar'])) {
  $SqlInserirVenda = mysql_query("INSERT INTO pedido(total) VALUES('$totalidade')");

  $idVenda = mysql_insert_id();

  foreach ($_SESSION['venda'] as $ProdInserir => $Qtd) {
    $SqlInserirItens = mysql_query("INSERT INTO itensvenda(idVenda, idProd, Qtd) VALUES('$idVenda','$ProdInserir','$Qtd')");

    $SqlInserirAcom = mysql_query("INSERT INTO pedido_acom(idVenda) VALUES('$idVenda')");
  }
  header('location: secesso.php');
}
echo '<form action="" enctype="multipart/form-data" method="post"><button name="enviar" class="btn btn-primary col-12">Confirmar</button></form>';
}else{
  echo '<div class="text-center">Carrinho vazio!! >n<)</div>';
  echo '</table>';
}
?>
<?php

?>
<form enctype=""></form>

</div></div>  
      <?php include "../inclu/cate2.php"; ?>
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
              <button type="button" class="btn btn-primary" onclick="mudar_cor_de_fundo()" name="FexarConta">Executar</button>
            </form>
            <p id="cor_escolhida"></p>
          </div>




</div>





      <div class="col-8 vvv">



        <div class="text-dark font-weight-bold text-center lanche_normal mt-2"><h3>Bem-vindo ao cardápio!! :D</h3></div>
        <div class="text-danger font-weight-bold text-center mt-2 mb-4"><big>Passe o mouse para ver mais detalhes das comidas!! >u<</big></div>
        <div class="dropdown-divider2"></div>



<?php
$cx = mysqli_connect("127.0.0.1", "root", "");


$db = mysqli_select_db($cx, "tcc");
 
$seleciona_acom = mysqli_query($cx, "SELECT * FROM acompanhantes") or die(
  mysqli_error($cx)
);


$seleciona2 = mysqli_query($cx, "SELECT * FROM categoria") or die(
  mysqli_error($cx)
);


while ($pro = mysqli_fetch_assoc($seleciona2)) {
    echo '<a id="'.$pro['id'].'"><div class="text-danger text-center font-weight-bold lanche_normal ml-4 mt-2">'.$pro["nome_cate"].'</div></a>';

$seleciona = mysqli_query($cx, "SELECT * FROM produto") or die(
  mysqli_error($cx)
);

while($aux = mysqli_fetch_assoc($seleciona))
{

  if ($aux["Categoria"] == $pro[nome_cate]) {
    if ($aux["Categoria"] == "Lanches") {
  

  echo '<div class="dropdown3">
       <div class="card border-danger mb-3 mt-4 ml-3" style="max-width: 18rem;">
        <div class="card-header font-weight-bold titulo">
          <div class="text-center mb-1">'.$aux["Nome_produto"].'</div>

          ';
    if (isset($_SESSION['usuario'])) {



      echo '<form action="" enctype="multipart/form-data" method="post"><button class="btn btn-danger col-12" name="'.$aux['Nome_produto'].'">Pedir</button>';
      
      //echo '<a href="lanches_n.php?par='.$aux["id"].'"><button class="btn btn-danger col-12">Pedir</button></a>';

    }else{

      echo '<a href="../LOGIN/verificar.php"><button class="btn btn-danger col-12">Pedir</button></a>';
    }
          

  echo '

          <div class="font-weight-bold text-center preço text-dark mt-1">R$'.$aux["Preco"].'</div>
        </div>
        <div class="dropdown-content3">
          <div class="card-body font-weight-bold xsalada">
            <h5 class="card-title preço">Descrição</h5>
              <p class="card-text text-light">'.$aux["Descricao"].'</p>
          </div>
          <img src="'.$aux['img'].'" class="estabilizar2">
          </div>
          </div>
        </div>';

      
      if (isset($_POST[$aux['Nome_produto']])) {
        echo "<div class='kodew col-5 text-center'>";
        echo '<div class="card border border-danger font-weight-bold col-12">

            <p><h4>'.$aux["Nome_produto"].'</h4></p>
            <p>Escolha algo para acompanhar >u<</p>
            <div class="container">
            <div class="alert alert-warning m-0 text-center text-black">Clique em adicionar, acompanhantes estão indisponiveis</div>
            </div>
            <div class="text-center mb-2">Katchup irá como padrão, se não quiser, joga fora sla :/</div>
            <h6>Opção 1:</h6>';

      ?>

      <select class="mb-3 col-12" name="op1"> 
        <option></option>
      <?php
        $cx = mysqli_connect("127.0.0.1", "root", "");
        $db = mysqli_select_db($cx, "tcc");
      $buscar57 = mysql_query("SELECT * FROM acompanhantes");
      while($ver = mysql_fetch_array($buscar57)){
      echo '<option value="'.$ver['id_acom'].'">'.$ver['nome_acom'].'</option>';
      }
      ?>
      </select>

      <?php

      echo '<h6>Opção 2:</h6>';

      ?>

      <select class="mb-3 col-12" name="op2">
        <option></option>
      <?php
      $buscar57 = mysql_query("SELECT * FROM acompanhantes");
      while($ver2 = mysql_fetch_array($buscar57)){
      echo '<option value="'.$ver2['id_acom'].'">'.$ver2['nome_acom'].'</option>';
      }

      ?>
      </select>
      <?php

      echo '<p>Quer nos dizer alguma observação?</p>';

      ?>

      <textarea class="mb-3 col-12" name="obs"></textarea>

      <?php

      echo'
        </div>';
        if (isset($_POST[fechar])) {
            unset($_POST[$aux['Nome_produto']]);
      }
     

        echo '<button class="btn btn-danger nyams col-12" name="fechar">Fechar</button></form>';?><?php

        echo '<form action="lanches_n.php?par='.$aux["id"].'&acom=" method="post"><button class="btn btn-primary nyams2 col-12" name="postar">Adicionar ao carrinho!</button></div></form>';
        
      }

      
    }else{


  echo '<div class="dropdown3">
       <div class="card border-danger mb-3 mt-4 ml-3" style="max-width: 18rem;">
        <div class="card-header font-weight-bold titulo">
          <div class="text-center mb-1">'.$aux["Nome_produto"].'</div></form>

          ';
          ?>
          <a href="lanches_n.php?par=<?php echo $aux["id"];?>"><button class="btn btn-danger col-12">Pedir</button></a>
          <?php
  echo '

          <div class="font-weight-bold text-center preço text-dark mt-1">R$'.$aux["Preco"].'</div>
        </div>
        <div class="dropdown-content3">
          <div class="card-body font-weight-bold xsalada">
            <h5 class="card-title preço">Descrição</h5>
              <p class="card-text text-light">'.$aux["Descricao"].'</p>
          </div>
          <img src="'.$aux['img'].'" class="estabilizar2">
          </div>
          </div>
        </div>';


    }
  }

}
echo '<div class="dropdown-divider2"></div>';
}

?>





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