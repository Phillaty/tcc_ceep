<?php 
echo '
    <script type="text/javascript">
      function mudar_cor_de_fundo(){

      var cor = document.getElementById("seletor_de_cores").value;

      document.getElementById("pagina").style.backgroundColor = cor;

      document.getElementById("cor_escolhida").innerHTML = "A Cor escolhida é "+cor;
      }
    </script>';

?>