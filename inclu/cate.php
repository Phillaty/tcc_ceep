
<?php 

    $cx = mysqli_connect("127.0.0.1", "root", "");


    $db = mysqli_select_db($cx, "tcc");
 



    $seleciona2 = mysqli_query($cx, "SELECT * FROM categoria") or die(
     mysqli_error($cx)
    );

    $seleciona3 = mysqli_query($cx, "SELECT * FROM categoria_esp") or die(
     mysqli_error($cx)
    );

echo '
      <div class="text-center">
        <div class="col-12 cx">Categorias</div>
      ';
      
        while ($pro = mysqli_fetch_assoc($seleciona3)) {
        
        echo '<ul class="avd2"><li><a href="http://localhost/tcc/CARDAPIO/lanches_n.php#'.$pro['id'].'">'.$pro['nome_c'].'</a></li></ul>';

        }


echo'   
        <div class="dropdown-divider2"></div>
        ';

        while ($pro = mysqli_fetch_assoc($seleciona2)) {

        echo '<ul class="avd2"><li><a href="http://localhost/tcc/CARDAPIO/lanches_n.php#'.$pro['id'].'">'.$pro['nome_cate'].'</a></li></ul>';

        }

echo '
      <div class="dropdown-divider2"></div>
        <ul class="avd2"><li><a href="http://localhost/tcc/SOBRE/noticias.php">Noticias</a></li></ul>
      </div>';


?>

<div class="dropdown-divider2 mb-4"></div>

<div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=R.%20Natal%2C%202800%20-%20Centro%2C%20Cascavel%20-%20PR%2C%2085805-070+(Ceep)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe></div><br />