<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index-responsividade.css">
    <link rel="stylesheet" href="css/filtro.css">    
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
    <title>Ratatouille - Filtrar Por: </title>
</head>
<body>
  
    <!-- Header -->
    <title>Ratatouille</title>
    <?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    
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
       
<?php
    // session_start();
    // include_once("conexaoDB.php");
    if(isset($_GET['cat'])){
    $type=$_GET['cat'];
    }else{
        $type = "bebida";
    }
    switch ($type) {
     case 'salgado':
       $type = 'salgado';
       break;
     case 'doce':
       $type = 'doce';
       break;
     case 'vegetariano':
       $type = 'vegetariano';
       break;
     default:
       $type = 'bebida';
   }
 
   $queryQtd = "SELECT COUNT(idReceita) AS qtdReceitas FROM receita WHERE categoria = '$type'";
   $resultQtd = $connect->prepare($queryQtd);
   $resultQtd->execute();
 
   $result = $resultQtd->get_result()->fetch_assoc();
   $_SESSION['msgTitulo'] = "Quantidade " . $type .": ";
   $_SESSION['msgQtd'] =  $result['qtdReceitas'];
  
 
?>


        <!-- Filtro -->

        <main>
            <div class="container-titulo">
                <div class="grid-titulo">
                    <h2 class="titulo">
                    <?php
                        if(isset($_SESSION['msgTitulo'])){
                            echo $_SESSION['msgTitulo'];
                            unset ($_SESSION['msgTitulo']);
                            // $id = $_SESSION['id'];
                        }
                    ?>
                    </h2>
                    <span class="subtitulo">
                    <?php
                        if(isset($_SESSION['msgQtd'])){
                            echo $_SESSION['msgQtd'];
                            unset ($_SESSION['msgQtd']);
                        }
                    ?> receitas
                    </span>
                </div>
            </div>

            <div class="display">
                <div class="text-filter">
                    <div class="filter">
                        <ul class="filter-list">
                            <li class="filter-list-by">
                                <span>Filtrar</span>
                            </li>
                            <a href="filtro.php?cat=salgado">
                                <li class="filter-list-item">
                                    <span class="span">Salgados </span>
                                </li>
                            </a>
                            <a href="filtro.php?cat=doce">
                                <li class="filter-list-item">
                                    <span class="span">Doces </span>
                                </li>
                            </a>
                            <a href="filtro.php?cat=vegetariano">
                                <li class="filter-list-item">
                                    <span class="span">Vegetarianos </span>
                                </li>
                            </a>
                                <a href="filtro.php?cat=bebidas">
                                <li class="filter-list-item">
                                    <span class="span">Bebidas </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
             
                <div class="div-receitas">   
                <?php
                    $sqlselect = "SELECT * FROM  receita WHERE categoria = '$type'";
                    $resultadoselect = @mysqli_query($connect,$sqlselect) or die ("Erro ao consultar receitas");


                    while ($registro = mysqli_fetch_array($resultadoselect)) {
                    $nome = $registro['nome'];
                    $categoria = $registro['categoria'];
                    $dataPublicacao = $registro['dataPublicacao'];
                    $userName = $registro['userName'];
                    $imagem = $registro['imagem'];
                    $id = $registro['idReceita'];
                ?>
                    <div class="container-receitas">
                        <a href="consulta.php?id=<?php echo $id; ?>">
                        <div class="grupo-receita">
                            <div class="div-img">
                                <div class="img">
                                    <!-- <img src="img/img/coxas.png" alt="Coxinha Crocante"> -->
                                    <!-- <img src="img/imgFixa.png" alt="Imagem Fixa"> -->
                                    <?php
                                        // $img= $_SESSION['msg9'];
                                        echo "<img alt='img' src='$imagem' width='250px' height='207px'/>"; 
                                    ?>
                                </div>
                            </div>
                            <div class="info">    
                                <span class="text-filtro">
                                    <?php
                       
                            echo $categoria;
                           
                    
                                    ?>
                                </span>
                                <br>
                                <span class="text-titulo"><?php
                       
                            echo $nome;
                    
                       
                    ?></span>
                                <br>
                                <span class="text-user1">Por <span class="text-user"><?php
                      
                            echo $userName;
                          
                       
                    ?></span></span>
                                <!-- <div class="avalicao">
                                    <div class="icon">
                                        <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAe5JREFUSEu1lU1SGlEUhb+LVToUVhBcQXAF4gpMVhBYQXQSu0fiqNGJuoLgCpIdBHcQVhB2EBg6iNd6t98DGvq1LdFXRUEBfc79Oec84Z2PvDM+ryLQIb8BlYTDuoXVJtCMHsJ3A1b6kjKqQ/IagjHCkQcdS8LxmxFoRhfhFzD3oPsox5IyfomkVgc65CdwgnJpgMIFyr2k9P6bQDPaCH8MaI+WvT/y1+/iQFKmVSSLDvSKT8BHlDbYy50m0PFgi4o1Y4Twxf/HKWvmP08RI5zIuXW9lKkO0YpK5iidUK3vygHvx56RJMdedlCU4T0wYoeZfDPtR49e0+EfTYRbm8CajAtL3kbrekOTR27AFu46PV31yIaKCiQwkoR+rHwP7uTr9jSnQXe941KZFkiEMzm39jeOjw43llLwwg7Wn9ahgX512peUQSlBhlPNhyrTRY2mGXk0CJ+D5DaKCHKt6DJOEGS7R0vOmJlannzYNei7WZt3lB8oD5LSLesytoOQPRNJ6GjGwOJh9QgDdrlbuNoXsk5STnDFKWrSCx4Ibl5mUY7kfndud3FSOspyghBuy3ImNOgFCfpxufsgN1ZurtLwixG4bMljoFpFq6ObSsJBvRHlVyOrVUfNli/fbje3r1oEMbBtvq914WwDHJ55BhsQtRmolfqZAAAAAElFTkSuQmCC"/>
                                    </div>
                                    <span class="subtitle">
                                        4.3
                                    </span>
                                </div> -->
                                <br>
                                <span><?php
                     
                            echo $dataPublicacao;
                     
                    ?></span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
              
            </div>
        </main>

        <!-- <footer>
            <div class="footer-content">
                <h3>Siga nossas redes sociais</h3>
                <p>Fique por dentro de nossas novidades e junte-se à comunidade.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ratatouille.recipes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer> -->
        
</body>
</html>