<!doctype html>   
<html lang="br">

<!--SE TU QUISER ESTUDAR OS CODIGO DE LAYOUT, VAI NO INDEX, LA EU COLOQUEI BASTANTE COMENTARIO-->
  <head>
    <?php include "../inclu/head.php";?>
    <?php include "../inclu/javascript.php"; ?>
    <script type="text/javascript" href="jquery.js"></script> 
    <script type="text/javascript" href="jquery.maskedinput.js"></script>
    <link rel="stylesheet" type="text/javascript" href="jquery.js">
    <link rel="stylesheet" type="text/javascript" href="mascara/jquery.js">
    <script type="text/javascript" href="mascara/jquery.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


<!--PARTE PARA A MASCARA QUE USEI NO TELEFONE E CPF--> 
    <script>
      jQuery(function($){$("#cpf").mask("999.999.999-99");});
      jQuery(function($){$("#fone").mask("(00)0000-0000");});
      jQuery(function($){$("#cep").mask("99999-999");});
      jQuery(function($){$("#cep_entrega").mask("99999-999");});
      jQuery(function($){$("#cep3").mask("99999-999");});
    </script>

    <script>
          $(document).ready(function () { 
        var $seuCampoCpf = $("#cpf");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
    </script>
    <script>
  function habilita(campo, idCampo) {
    document.getElementById(idCampo).disabled = campo.checked;
  }
</script>

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

            <a href="http://localhost/tcc/LOGIN/logar.php">
              <button class="btn h my-2 my-sm-0 col-5 wd" type="submit"><b>
              Login</b></button></a>

              <div class="btn my-2 my-sm-0 col-6">
                <b class="ncon">não tem conta?</b><br>
                  <a href="http://localhost/tcc/CADASTRO/cadastro.php" class="hh">
                   <samp> Cadastrar-se </samp>
                  </a>
                </div>
          </div>
          </nav></div></div>
        


<!--/////////////////////////////divisão entre a navbar e o menu com cardapio, sobre e tals/


  Sobremesas
Bebidas
Acompanhamentos
Combos
Saladas//////////////////-->

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
        <!--
        <li><a href="#" class="avd2">Combos
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Especiais
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Populares
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Hamburgues
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>

        <li><a href="#" class="avd2">Bebidas
                  <ul class="avd">
                  <li>batata</li>
                  </ul></a></li>-->
      

















<!--A PARTE DO CONTEUDO-->
<!--O FORMULARIO-->


      <div class="col-8 vvv">
        <div class="row">
            <div class="container">
    <form method="post" class="row" action="cadastro_conta.controller.php"><!--PRA LINKA NO CONTROLER-->


      <div class="form-group col-md-12 kld BDI">
        <h4>DADOS DA CONTA</h4><small>Definir o email e senha da sua conta</small></div>
        <div class="form-group col-md-12">
        <label for="id">Email:</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Insirir seu e-mail" required>
      </div>









      <script>

 function verificaForcaDaSenha()
 {
        var passwordTextBox = document.getElementById("senha");
        var password = passwordTextBox.value;
        var caracteresEspeciais = "!£$%^&*_@#~?";
        var passwordPontos = 0;
        passwordTextBox.style.color = "white";
        // Contém caracteres especiais
        for (var i = 0; i < password.length; i++)
        {
            if (caracteresEspeciais.indexOf(password.charAt(i)) > -1)
            {
                  passwordPontos += 20;
                  break;
            }
        }
        // Contém numeros
        if (/\d/.test(password))
            passwordPontos += 35;
        // Contém letras minúsculas
        if (/[a-z]/.test(password))
            passwordPontos += 35;
        // Contém letras maiúsculas
        if (/[A-Z]/.test(password))
            passwordPontos += 30;
        if (password.length >= 8)
            passwordPontos += 20;
        var forcaSenha = "";
        var backgroundColor = "red";
        if (passwordPontos >= 100)
        {
           forcaSenha = "(Forte)";
            backgroundColor = "green";
        }
        else if (passwordPontos >= 80)
        {
           forcaSenha = "(Média)";
           backgroundColor = "gray";
        }
        else if (passwordPontos >= 50)
        {
            forcaSenha = "(Fraca)";
            backgroundColor = "maroon";
        }
        else
        {
           forcaSenha = "(Muito Fraca)";
           backgroundColor = "red";
        }
        document.getElementById("lblmensagem").innerHTML = forcaSenha;
        passwordTextBox.style.backgroundColor = backgroundColor;
 }
</script>





      
      <div class="form-group col-md-6">
        <label for="id">Senha: </label><label id="lblmensagem"></label>
        <input type="password" name="senha" class="form-control" id="senha" placeholder="Insira a senha" onkeyup="verificaForcaDaSenha()" required>
      </div>
      
      <div class="form-group col-md-6">
        <label for="id">Confirmar senha:</label>
        <input type="password" name="rsenha" class="form-control" id="rsenha" placeholder="Inserir novamente a senha" oninput="validaSenha(this)" required>
      </div>

      <script>
            function validaSenha (input){ 
              if (input.value != document.getElementById('senha').value) {
                input.setCustomValidity('Senhas diferentes!!');
                } else {
                input.setCustomValidity('');
                }
                }
      </script>

      <div class="form-group col-md-12 kld BDI">
      <h4>DADOS PESSOAIS</h4> <small>Cadastre os seus dados</small></div>
      <div class="form-group col-md-6">
        <label for="id">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
      </div>

      <div class="form-group col-md-6">
        <label for="id">Sobrenome:</label>
        <input type="text" name="sobnome" class="form-control" id="sobnome" placeholder="Sobrenome" required>
      </div>

      <div class="form-group col-md-6">
        <label for="id">CPF:</label>
        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" required>
      </div>

      <div class="form-group col-md-6">
        <label for="id">Telefone:</label>
        <input type="text" name="fone" class="form-control" id="fone" placeholder="Telefone" required>
      </div>
      <div class="form-group col-md-6 offset-3">
        <label for="id" class="col-12 text-center">Data de nascimento:</label>
        <input type="date" name="datanasci" class="form-control col-6 offset-3" id="datanasci" required>
      </div>
      <div class="form-group col-md-12 kld">
      <h4>LOCALIZAÇÃO DO USUÁRIO</h4><small>Defina o endereço padrão do usuário</small></div>
      <div class="form-group col-md-6">
        <label for="id">Endereço:</label>
        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Seu endereço" required>
      </div>

      <div class="form-group col-md-6">
        <label for="id">Numero:</label>
        <input type="text" name="numero" class="form-control" id="numero" placeholder="Número da residência" required>
      </div>

      <div class="form-group col-md-6">
        <label for="id">CEP:</label>
        <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" required>
      </div>
      

      <div class="form-group col-md-6">
        <label for="id">Complemento:</label>
        <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento">
      </div>
        

          <div class="form-group col-md-12 kld">
            <h4>LOCAL DA ENTREGA</h4><small>Defina o local para a entrega dos lanches</small></div>
          <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="id">Endereço:</label>
                  <input type="text" name="endereco_entrega" class="form-control" id="endereco_entrega" placeholder="Sua rua" required>
                </div>

              <div class="form-group col-md-6">
                <label for="id">Numero:</label>
                <input type="text" name="numero_entrega" class="form-control" id="numero_entrega" placeholder="Número da residência" required>
              </div>
              <div class="form-group col-md-6">
                <label for="id">CEP:</label>
                <input type="text" name="cep_entrega" class="form-control" id="cep_entrega" placeholder="CEP" required>
              </div>
      
              <div class="form-group col-md-6">
                <label for="id">Complemento:</label>
                <input type="text" name="complemento_entrega" class="form-control" id="complemento_entrega" placeholder="Complemento">
              </div>
            </div>
          </div>
          
          <div class="centralizar form-group col-12">
            <!--AQUI NOVAMENTE, PARA COLOCAR MAIS UM ENDEREÇO-->
          <INPUT name="alterar" TYPE="checkbox" id="alterar" onClick="document.all.mostrarcaxa.style.display = (document.all.mostrarcaxa.style.display == 'none') ? '' : 'none'" value="no" disabled>
           <strong>tenho mais um endereço</strong>
            <small>Temporiamente indisponível</small>
          </div>
        <div STYLE="display:none" ID="mostrarcaxa" name="endereco2">
          <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="id">Endereço:</label>
                  <input type="text" name="endereco3" class="form-control" id="endereco3" placeholder="Sua rua">
                </div>

              <div class="form-group col-md-6">
                <label for="id">Numero:</label>
                <input type="text" name="numero3" class="form-control" id="numero3" placeholder="Número da residência">
              </div>

              <div class="form-group col-md-6">
                <label for="id">CEP:</label>
                <input type="text" name="cep3" class="form-control" id="cep3" placeholder="CEP">
              </div>
              <div class="form-group col-md-6">
                <label for="id">Complemento:</label>
                <input type="text" name="complemento3" class="form-control" id="complemento3" placeholder="Complemento">
              </div>
            </div>
          </div>
        </div>

        <!--CHECKBOX DAS REGRAS LA-->
        <div class="container">
          <div class="row">
        <div class="form-group lado text-center col-8">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">Li e concordo com os <a href="../SOBRE/diretrizes.php">termos e diretrizes do uso de privacidade do site</a></label>
        </div></div></div>
        <button class="bnt btn-primary col-md-4 offset-4">Cadastrar-se</button>
    </form>
  </div>
        </div>
      </div>


<!--FIM DO FORMULARIO-->



























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