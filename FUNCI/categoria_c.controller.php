<?php
  include "../conexao.class.php";
//Pegar dados do formulário

$nome_cate = $_POST['nome_cate'];
$descricao_cate = $_POST['descricao_cate'];

//Criar conexao com banco de dado

$sql = "insert into categoria (nome_cate, descricao_cate) values (?,?)";
$stm = conexao::prepare($sql);

$stm->bindValue(1, $nome_cate);
$stm->bindValue(2, $descricao_cate);

  if($stm->execute()){
  echo '
  <div class="text-center mt-3 aumentar">
  Categoria criada com sucesso!!
  <p>Espere...</p>
  </div>
    ';

   $var = "<script>javascript:history.back(-2)</script>";
   echo $var;
}

