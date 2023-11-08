<?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    } 

    if(isset($userName_cookie)){
        $userName = $userName_cookie;
        $sqlverifica= "SELECT * FROM  cadastro WHERE userName = '$userName' ";
        $resultadoverifica = @mysqli_query($connect,$sqlverifica);

        $queryQtd = "SELECT COUNT(idReceita) AS qtdReceitas FROM receita WHERE userName = '$userName'";
        $resultQtd = $connect->prepare($queryQtd);
        $resultQtd->execute();
 
        $result = $resultQtd->get_result()->fetch_assoc();
        $_SESSION['msgQtd'] =  $result['qtdReceitas'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index-responsividade.css">
    <link rel="stylesheet" href="css/receitas_cad.css">
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
    <title>Ratatouille - Receitas Cadastradas</title>
</head>
<body>
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
            </div>
        </nav>  
    </header>
    <main>
        <div class="container-titulo">
            <div class="grid-titulo">
                <h2 class="titulo">Área do Usuário</h2>
                <!-- <span class="subtitulo"> marquinhos </span> -->
            </div>
        </div>

        <div class="display">
            <div class="text-filter">
                <div class="filter">
                <ul class="filter-list">
                        <li class="filter-list-by">
                            <span class="txt">Sobre o Usuário</span>
                        </li>
                        <a href="dados.php">
                            <li class="filter-list-item">
                                <span class="span">Dados</span>
                            </li>
                        </a>
                        <a href="edit_dados.php">
                            <li class="filter-list-item">
                                <span class="span">Editar Dados</span>
                            </li>
                        </a>
                        <a href="receita_cad.php">
                            <li class="filter-list-item">
                                <span class="span">Receitas Cadastradas</span>
                            </li>
                        </a>
                        <a href="sair.php">
                            <li class="filter-list-item">
                                <span class="span">Sair / Excluir Conta</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
         
            <div class="div-receitas">   
                <div class="total">
                    <span class="text-total">Total de Receitas Cadastradas:</span>
                    <span class="text-nmr"> <?php
                        // if(isset($_SESSION['msgQtd'])){
                            echo $_SESSION['msgQtd'];
                        //     unset ($_SESSION['msgQtd']);
                        //     // $id = $_SESSION['id'];
                        // }
                    ?></span>
                </div>
                <?php
                    $sqlselect = "SELECT * FROM  receita WHERE userName = '$userName'";
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
                    <!-- <a href=""> -->
                    <a href="consulta.php?id=<?php echo $id; ?>">
                     <div class="grupo-receita">
                        <div class="div-img">
                            <div class="img">
                                <!-- <img src="img/img/coxas.png" alt="Coxinha Crocante"> -->
                               <!-- <img src="img/imgFixa.png" alt="Imagem Fixa"> -->
                                <?php
                                 echo "<img alt='img' src='$imagem' width='250px' height='207px'/>"; 
                                ?>
                            </div>
                        </div>
                        <div class="info">    
                            <span class="text-filtro"><?php echo $categoria;?></span>
                            <br>
                            <span class="text-titulo"><?php echo $nome;?></span>
                            <br>
                            <span class="text-user1">Por</span>
                            <span class="text-user"></span><?php echo $userName;?></span>
                            <br>
                            <span><?php echo $dataPublicacao;?></span>
                        </div>
                    </div> 
                    <!-- <div class="grupo-receita">
                        <div class="div-img">
                            <div class="img">
                                 <img src="img/img/coxas.png" alt="Coxinha Crocante">
                                <img src="img/imgFixa.png" alt="Imagem Fixa">
                            </div>
                        </div>
                        <div class="info">    
                            <span class="text-filtro">Salgado</span>
                            <br>
                            <span class="text-titulo">Coxinha</span>
                            <br>
                            <span class="text-user1">Por</span>
                            <span class="text-user"></span>Marquinhos</span>
                            <br>
                            <span>2022-11-11</span>
                        </div>
                    </div>
                    <div class="grupo-receita">
                        <div class="div-img">
                            <div class="img">
                                <img src="img/img/coxas.png" alt="Coxinha Crocante"> 
                                <img src="img/imgFixa.png" alt="Imagem Fixa">
                            </div>
                        </div>
                        <div class="info">    
                            <span class="text-filtro">Vegetariano</span>
                            <br>
                            <span class="text-titulo">Ratatouille</span>
                            <br>
                            <span class="text-user1">Por</span>
                            <span class="text-user"></span>Marquinhos</span>
                            <br>
                            <span>2022-11-13</span>
                        </div>
                    </div>
                    <div class="grupo-receita">
                        <div class="div-img">
                            <div class="img">
                                <img src="img/img/coxas.png" alt="Coxinha Crocante"> 
                                <img src="img/imgFixa.png" alt="Imagem Fixa">
                            </div>
                        </div>
                        <div class="info">    
                            <span class="text-filtro">Bebida</span>
                            <br>
                            <span class="text-titulo">Suco de Laranja</span>
                            <br>
                            <span class="text-user1">Por</span>
                            <span class="text-user"></span>Marquinhos</span>
                            <br>
                            <span>2022-11-12</span>
                        </div>
                    </div>-->
                    </a>
                </div>  
                <?php
                    }
                } 
                else{
                    $_SESSION['msg'] = "Para acessar essa página você precisa ser um usuário!";
                    header("Location: login.php");
                }
                    ?>
            </div>
          
        </div>
    </main>
</body>
</html>