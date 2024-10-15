            
            <?php


              error_reporting(0);
              // ini_set(“display_errors”, 0 );

              if ($_SESSION['usuario'] == true) {

                if ($_SESSION['adm'] == "Admin") {
              echo '<div class="text-center text-warning marginzin marginzin2">Bem-vindo '.$_SESSION['usuario'],'  ';
              echo $_SESSION['sobrenome_usu'],'<div>';
              echo '<div class="container">
                      <div class="row ml-1">
                        <a href="http://localhost/tcc/LOGIN/adm.php"><div class="col-8 ml-5 mt-3 btn btn-danger">Voltar</div></a>
                        <a href="http://localhost/tcc/logout.php"><div class="col-1 ml-5 mt-1 logout"></div>
                      </div>
                    </div>';
                }else{

                if ($_SESSION['adm2'] == "Admin") {
              echo '<div class="text-center text-warning marginzin marginzin2">Bem-vindo '.$_SESSION['usuario'],'  ';
              echo $_SESSION['sobrenome_usu'],'<div>';
              echo '<div class="container">
                      <div class="row ml-1">
                        <a href="http://localhost/tcc/FUNCI/funcionario.php"><div class="col-8 ml-5 mt-3 btn btn-danger">Voltar</div></a>
                        <a href="http://localhost/tcc/logout.php"><div class="col-1 ml-5 mt-1 logout"></div>
                      </div>
                    </div>';
                }else{
              
              echo '<div class="text-center text-warning marginzin marginzin2">Bem-vindo '.$_SESSION['usuario'],'  ';
              echo $_SESSION['sobrenome_usu'],'<div>';
              echo '<div class="container">
                      <div class="row">
                        <a href="http://localhost/tcc/USU/usuario.php"><div class="col-1 ml-5 conta_u"><span class="badge badge-light"></span></div></a>
                        <a href="#"><div class="col-1 ml-5 notificicacao"><span class="badge badge-light"></span></div></a>
                        <a href="http://localhost/tcc/logout.php"><div class="col-1 ml-5 logout"></div>
                      </div>
                    </div>';}}}
              else{

                echo '<a href="http://localhost/tcc/LOGIN/logar.php"><button class="btn h my-2 my-sm-0 col-5 wd" type="submit"><b>Login</b></button></a>
                        <div class="btn my-2 my-sm-0 col-6">
                          <b class="ncon">não tem conta?</b><br>
                          <a href="http://localhost/tcc/CADASTRO/cadastro.php" class="hh">
                            <samp> Cadastrar-se </samp>
                          </a>
                        </div>';
                
                  }
            ?>