<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/receita-banner.css">
    <link rel="stylesheet" href="css/receita-filter-list.css">
    <link rel="stylesheet" href="css/receita-responsividade.css">
    <link rel="shortcut icon" href="img/fav.png">
    <link rel="stylesheet" href="css/receita1.css">
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>  
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <title>Ratatouille - Receitas</title>
</head>
<body>
    <?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    
?>


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
                <div class="nome"></div>
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

    <!-- Banner -->
    <div class="banner_wrapper">
        <div class="banner_text">
            <div class="banner_header">
                <span class="banner_subtitle">O melhor lugar para se fazer uma receita é aqui!</span>
                <h1 class="banner_title">Receitas de todos os tipos</h1>
            </div>
            <div class="banner_descri">
                <p class="banner_paragrafo">De deliciosas guloseimas que dão água na boca a saborosos <br> 
                    salgados, selecionamos algumas de nossas receitas favoritas <br>
                    para você poder saborear em casa.
                </p>
            </div>
        </div>
           
        <div class="banner_image">
            <div class="image">
                <div class="image_circulo">
                </div>
            </div>
            <div class="banner_shadow"></div>
        </div>
    </div>

    <!-- Filtro -->
    <div class="text-filter">
        <div class="text">
            <h1 class="h1-receitas">Receitas</h1>
        </div>
        <div class="filter">
            <ul class="filter-list">
                <li class="filter-list-by">
                    <span>Filtrar por: </span>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=salgado">
                    <span>Salgados</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=doce">
                    <span>Doces</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=vegetariano">
                    <span>Vegetarianos</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=bebida">
                    <span>Bebidas</span>
                </a>
                </li>
            </ul>
        </div>
    </div>

    
    <!-- Lista de Receitas -->
    <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
        }
        $sqlselect = "SELECT idReceita, nome, categoria, dataPublicacao, userName, imagem
                        FROM receita
                        ORDER BY idReceita DESC
                        LIMIT 6";
        $resultadoselect = @mysqli_query($connect,$sqlselect) or die ("Erro ao consultar receitas");
        
        while ($registro = mysqli_fetch_array($resultadoselect)) {
            $nome = $registro['nome'];
            $categoria = $registro['categoria'];
            $dataPublicacao = $registro['dataPublicacao'];
            $userName = $registro['userName'];
            $imagem = $registro['imagem'];
            $id = $registro['idReceita'];
    ?>

    <main class="container-card">
        <div class="org">
            <div class="display">
           
                <div class="img">
                    <!-- <img src="img/img/coxas.jpg" alt='img' width='250px' height='250px'> -->
                    <?php
                        // $img= $_SESSION['msg9'];
                        echo "<img alt='img' src='$imagem' width='250px' height='207px'/>"; 
                    ?>
                </div>
                <a href="consulta.php?id=<?php echo $id; ?>" class="item-link">
                    <div class="card-receita">
                        <span class="titulo_filtro">
                            <!-- salgado -->
                            <?php
                            echo $categoria;
                            ?>
                        </span>
                        <br>
                        <span class="titulo">
                            <!-- coxinha -->
                            <?php
                            echo $nome;
                            ?>
                        </span>
                        <br>
                        <span class="titulo_user1">Por</span>
                        <span class="titulo_user">
                          <!-- marcos -->
                          <?php
                          echo $userName;
                          ?>
                        </span>
                        <br>
                        <span>
                          <!-- 2022-11-11 -->
                        <?php
                            echo $dataPublicacao;
                        ?>
                        </span>
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </main>

     

</body>
</html>