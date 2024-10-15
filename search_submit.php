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

    <?php include "inclu/menu.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-light b">
          <div class="col-2 ab"><img src="http://localhost/tcc/imagens/rt.png" class="img-fluid"></div>
          <form class="form-inline col-7 btt" method="post" action="search_submit.php" id="searchform">
            <input class="form-control mr-sm-2 col-8 offset-1 nya" type="search" placeholder="Pesquise por lanches aqui!!!" aria-label="Search" name="pesquisa" required>  
            <button class="btn h my-2 my-sm-0 col-2 wd" type="submit" name="submit">
              <i class="material-icons">search</i></button>
          </form>


          <div class="col-3">
            <?php include "inclu/log.php"; ?>
          </div>
          </nav></div></div>

    <?php include "inclu/drop.php"; ?>

      <div class="container-fluid">
        <div class="row">
          
      <div class="col-2 cat cor">
      <?php include "inclu/cate.php"; ?>
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


      <div class="col-8 vvv">
                
      			<?php 
	  if(isset($_POST['submit'])){ 
 
	  $pesquisa=$_POST['pesquisa'];


	  $db=mysql_connect ("localhost", "root", "") or die ("Impossivel conectar ao banco de dados." . mysql_error());
	  $mydb=mysql_select_db("tcc");

	  $sql="SELECT Preco, Nome_Produto, Descricao, Categoria FROM produto WHERE Nome_Produto LIKE '%" . $pesquisa . "%'" ;

	  $result=mysql_query($sql);
	  $count = mysql_num_rows($result);

	  if ($count == 0) {
	  	echo '<div class="text-dark font-weight-bold text-center lanche_normal mt-2">Nenhum resultado encontrado! :(</div>';
	  }else{

	  while($row=mysql_fetch_array($result)){ 
          $Pesquisaproduto =$row['Nome_Produto']; 
          $Preco=$row['Preco'];
          $Descricao=$row['Descricao'];
          $Categoria=$row['Categoria'];

         
         		echo '
			<div class="dropdown3">
      			<div class="card border-danger mb-3 mt-4 ml-3" style="max-width: 18rem;">
      				<div class="card-header font-weight-bold titulo">
      					<div class="text-center mb-1">'.$Pesquisaproduto.'</div>
      					<button class="btn btn-danger col-12">Pedir</button>
      					<div class="font-weight-bold text-center preço text-dark mt-1">R$'.$Preco.'</div>
      					<div class="text-center mt-3 text-danger">'.$Categoria.'</div>
      				</div>
      				<div class="dropdown-content3">
      					<div class="card-body font-weight-bold xsalada">
      						<h5 class="card-title preço">Igredientes</h5>
      						<p class="card-text text-light">'.$Descricao.'</p>
      						
      					</div>
                <img src="img/carda/xburguer.png" class="estabilizar2">
      				</div>
      			</div>
      		</div>';
	  }
	}
	}
		else{
	  	echo "submit";
	  }
	  ?>

      </div>
      <?php include "inclu/anuncio.php"; ?>

    </div>
  </div>





<!---//////////////////////////////coisa do bootstrap/////////////////////////////////////-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></div>
    
<!---/////////////////////////////////////////////////////////////////////////////////////-->



    <?php include "inclu/foot.php"; ?>






    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>





<!--MADE BY GUSTAVO VILLAS BOAS-->

