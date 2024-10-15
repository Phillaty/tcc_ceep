<?php
  if ($_SESSION['adm2'] == true) 
{ }else{
    header('Location: ../index.php');
    $_SESSION['logEr'] = 'VOCÊ NÃO TEM PERMISSÃO PARA ENTRAR NESTA PAGINA!!!';
      };


?>