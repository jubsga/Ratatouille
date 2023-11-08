<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index-responsividade.css">
    <link rel="stylesheet" href="css/info-receita.css">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- MediaQuery -->
    <link type="text/css" rel="stylesheet" href="css-index/801-1024px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1025-1152px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1153-1280px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1281-1360px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1361-1366px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1367-1400px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1401-1440px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1441-1600px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1601-1680px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1681-1920px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/slide.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/conteudo.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/footer.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>
    <link type="text/css" rel="stylesheet" href="footer.css"/>

    <!-- Icons -->
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/le592b5726.js" crossorigin="anonymous"></script>
    <title>Informações da Receita</title>
</head>
<body>
<?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recEspecifica.css">
    <title>Página Específica da Receita</title>
</head>
<body>
<form action="consulta.php" method="post">
  <label for="">Digite o Nome da Receita: </label>
        <input type="text" name="nomeR" id="nomeR" placeholder="nomeR" required><br><br>

        <button type="submit" name="consultar" id="send2" required>
        <span>Consultar</span>
        </button>

  </form> -->


    <!-- Header -->
    
    <header>
            <nav>
                <div class="navbar">
                    <div class="nome">Ratatouille</div>
                    <a href="index.php"><img src="img/img_icon.svg"/></a>
                    <div class="navbar-left">
                        <div class="receita"><a href="receita.php">Receitas</a></div>
                        <div class="sobrenos"><a href="about-us.php">Sobre nós</a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
                            <form action="consultaPesquisa.php" method="get">
                                <input type="text" name="nomeR" id="search" placeholder="Faça sua busca" required>
                                <button type="submit"><i class="fa fas fa-search"></i></button>

                            </form>
                            <div class="login"><a href="dados.php">
                        
                                <?php
                                 echo $userName_cookie;
                                ?>
                            
                            </a></div>
                    </div>
                </div>
            </nav>  
        </header>
        <?php
    } else{
           ?>
        <header>
            <nav>
                <div class="navbar">
                    <div class="nome">Ratatouille</div>
                    <a href="index.php"><img src="img/img_icon.svg"/></a>
                    <div class="navbar-left">
                        <div class="receita"><a href="receita.php">Receitas</a></div>
                        <div class="sobrenos"><a href="about-us.php">Sobre nós</a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
                            <form action="consultaPesquisa.php" method="get">
                                <input type="text" name="nomeR" id="search" placeholder="Faça sua busca" required>
                                <button type="submit"><i class="fa fas fa-search"></i></button>

                            </form>
                            <div class="login"><a href="login.php">Entrar</a></div>
                            <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                    </div>
                </div>
            </nav>  
        </header>
        <?php
    }?>
    <!-- Info Receita -->
    <!-- <form action="consulta.php" method="post">
  <label for="">Digite o Nome da Receita: </label>
        <input type="text" name="nomeR" id="nomeR" placeholder="nomeR" required><br><br>

        <button type="submit" name="consultar" id="send2" required>
        <span>Consultar</span>
        </button>

  </form> -->
    <main class="main-info">
        <div class="container-info">
            <h2 class="titulo t">  <?php
           
              if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset ($_SESSION['msg']);
              }
           if(isset($_SESSION['msg1'])){
               echo $_SESSION['msg1'];
               unset ($_SESSION['msg1']);
           }
            ?></h2>
            <div class="img-info">
                <!-- <img src="img/img/coxas.png" alt="Coxinha Crocante"> -->
                <!-- <img src="img/imgFixa.png" alt="Imagem Fixa"> -->
                 <?php
                 if(isset($_SESSION['msg9'])){
                    $img= $_SESSION['msg9'];
                     echo "<img alt='img' src='$img' width='500px' height='500px'/>"; //
                     $_SESSION['msg9'];
                    unset ($_SESSION['msg9']);
                 }
               ?> 
            </div>
            <div class="info-grupo">
                <div class="display">
                    <div class="avalicao">
                        <div class="icon">
                            <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXZJREFUSEu1lc9VwkAQh785hZuhA0vQCsAOtAKxAzgRTuIpeMIOeHSQDoQKpAQ6EG56Gt9ulmf+bx6QveUlmW9mfjO/FTo+0nF8WgE0ZojwCty5hHYobzJj40vQC9CYuQtejpVC5k2QRoDL/BM4oozpkciEg8aMED6AG5SHpkp8gA3CAOFJpiTZTB1khbKVGcO6KpoBCw4mS4nKWumSkF++gYNE9LsEHCUiPA8Q03GL0vE0IptWjQjYZkReAuFFIpuyOx3TU1/tuGL3IV00ZWeer7Jovk31va8dUzeGz8Cjs4jipBhdTCUJAWujTRWsEuA2eAXc+jJ07/coL1UtKwEy9mB6vbW977ErZmgr/LGaGG0GTpuSbeQAri1fNvMWRpYZgpMh7gm4zyaTB7wzRln6/KWqbfq/lBOZWiO0Jw84feRxyBpAupQF88sDnLkR0K+bijrR68yvCFBbVoV7tpkmXVD633ujtQl89o12afCSyNcIWIzxBwrTmBnLoV0mAAAAAElFTkSuQmCC"/> 
                        </div>
                        <span class="label"><?php
           if(isset($_SESSION['msg8'])){
               echo $_SESSION['msg8'];
               unset ($_SESSION['msg8']);
           }
       ?></span>
                        <br>
                        <span class="subtitle">
                        <?php
                            if(isset($_SESSION['msg7'])){
                                echo $_SESSION['msg7'];
                                unset ($_SESSION['msg7']);
                            }
                        ?>
                        </span>
                    </div>
                    
                    <div class="time">
                        <div class="icon">
                            <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaNJREFUSEvtVMtNw0AQHSNLxHDAEeFOB0AFCR04HYQKMBXgVJDtAKiAUAFJB7gCcscIc4AEyWDeOLtilazXJpIlDlha2d6dmffefNahhh+n4fj0NwHmYSfXlXsiKSW6kYLGAcrq9hL6fovccygaKptfKVAB4BQgR8cyyARvLPfGoexW7g8BEvF5bYB5eDDIKR/Bwbd1HgDiD8p6bZGmawBlueXgRPkVOyDAHUAEGDJzgk8PL2bb5f8vyvu74nlsTJEJgNOyTe7jkrlz5omna5MC+DLIJSjMFvR5YlRgc2TmOyIJlI0io7co9lhVF7YXsBW1avAedh7A/gjGpyotMjXFLKwAcLrusabY5++fIpfnfzlUq8NkUqCA4ZBCQbsxAJ1QZZuWpchUr7dwP9gih2chhoJiTioBVHfAcNwSSd8UWCt8UWQs86BZ2nQGgD04Rvo1oIMpImD/ikE73HjQEHQC3ZE3SqayqNwt6H8qusY6aHb5xVUhpJI1U2aO84E+xbVqoEeSl12IYIGcDb46Yq7PgjKh0qL7VBbZpqrO2T9AZZa+AdLy1hnKBGRGAAAAAElFTkSuQmCC"/>
                        </div>
                        <span class="label">Preparo</span>
                        <br>
                        <span class="subtitle">
                        <?php
           if(isset($_SESSION['msg2'])){
               echo $_SESSION['msg2'];
               unset ($_SESSION['msg2']);
           }
       
        ?> MIN
                        </span>
                    </div>
                    <div class="porcao">
                        <div class="icon">
                            <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAT9JREFUSEvllcFNw0AQRd+EA9ySEtIBcQXEFZAOgA7CBdknwskWl9ABSQfpAHdASqCE5MgBBu1qjRyzNjbESCiW9rSrff//mVkLHX/S8f0cGEBT1EQqUXPnrSLqBKAJY4QLYOSWMbG2S1lKTFbXKJUONGGI8AiMv+m0DOVKYl5857wAvWfEO0/AANiiPHDESm6scuz+GxOEKdAHNvQI8/0i6AvAKX+2lytLTpjKNRufOp0z4JUFcG4hSlB24gNkCGcu38smg6gpKwfJJCKsdOAKaqLZcsywSnkZ6pyYGvRRwmLhdxxowsJ2jHInMbMm6vMzmjBDuC073wWktoin9Ah8BasDusYwtVtLRJCfLQNaT2oR6htEL6BNNN7eLzwlfwv4rfLaSc7z2xckf3E/I+ocsC/l5Xta/Q9+IuL/Az4AmMpnGVQYUWcAAAAASUVORK5CYII="/>
                        </div>
                        <span class="label">Rendimento</span>
                        <br>
                        <span class="subtitle">
                        <?php
           if(isset($_SESSION['msg3'])){
               echo $_SESSION['msg3'];
               unset ($_SESSION['msg3']);
           }
  
       ?>
                        </span>
                    </div>
                   
                    <div class="categoria">
                        <div class="icon">
                            <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARFJREFUSEvtlMFxwjAQRd+eOEI6gA6gApIKQgmkA7jZFZgb6SApIenAVAAd4HRgKlhGljRjA7Y8Js4kM9FVO/9p/+6X0PORnvX5WYAmpAjzmq5SiXgyd23rTG2lA92gTZZJZOvb1tUCvJCHecFLQKjuH0Bni+oGff+Qm9ZU2UnMY3BNS3VXQ+4j1b8zyc6mMcIWmLrODyhricnKTnRLcoIR3wOjC1tzlFkZchMQWj/d8AE8o+yApYO8u3/sUyIWHtwVkANDlIl/rdqujkAmEZPvAQx4kDUGZn5YC1C+JGZ8L8BaBCnKSyEmvEGRk7BFwSTb1x4Km6rnhDKtH3LLJJcseTWCrgOzpqvGNf37Se6jgzOoDa4ZbsouIAAAAABJRU5ErkJggg=="/>
                        </div>
                        <span class="label">Categoria</span>
                        <br>
                        <span class="subtitle">
                        <?php
           if(isset($_SESSION['msg6'])){
               echo $_SESSION['msg6'];
               unset ($_SESSION['msg6']);
           }
      
       ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container-ingredientes">
        <h2 class="titulo">Ingredientes</h2> 
        <div class="ingredientes">
        <textarea class="txt-area" name="ingredientes" id="" cols="30" rows="8" disabled="true">
        <?php
           if(isset($_SESSION['msg4'])){
               echo $_SESSION['msg4'];
               unset ($_SESSION['msg4']);
           }  
       ?>
        </textarea>
            <!-- <ul>
                <li class="ul"></li>
                <li class="ul">Frango</li>
                <li class="ul">Frango</li>
                <li class="ul">Frango</li>
                <li class="ul">Frango</li> 
            </ul> -->
        </div>
    </div>
    <div class="container-ingredientes">
        <h2 class="titulo">Modo de Preparo</h2>
        <div class="ingredientes">
        <textarea class="txt-area" name="ingredientes" id="" cols="30" rows="8" disabled="true">
        <?php
           if(isset($_SESSION['msg5'])){
               echo $_SESSION['msg5'];
               unset ($_SESSION['msg5']);
           }
       ?>
       </textarea>
           
        </div>
    </div>


</body>
</html>