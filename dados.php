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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index-responsividade.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/dados.css">
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

    <!-- Index -->
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
    <title>Ratatouille - Dados </title>
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

        <div class="container-dados">
            <?php
          while ($registro = mysqli_fetch_array($resultadoverifica)) {
            $userName = $registro['userName'];
            $nome = $registro['nome'];
            $email = $registro['email'];
            $senha = $registro['senha'];
        }

        if (@mysqli_num_rows($resultadoverifica)==0){
            if (!$resultadoverifica) {
                die ('Query Inválida: ' . @mysqli_error($connect));
                exit;
            } 
        } 
        else {
        ?>
            <div class="org">
                    <!-- <img class="img" src="img/bx-user.svg" alt="User"> -->
                    <svg class="img" xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" style="fill: rgba(13, 113, 51, 1);transform: msFilter;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                    <?php
                                        if(isset($_SESSION['msg'])){
                                            echo $_SESSION['msg'];
                                            unset ($_SESSION['msg']);
                                        }
                                        
                                    ?>
                <div class="dados_nome">
                    <span class="user">Nome</span>
                   
                    <input type="text" class="input" value=" <?php
                    echo $nome;
                    ?>" disabled>
                </div>
                <div class="dados_user">
                    <span class="user">User</span>
                    
                    <input type="text" class="input" value="<?php
                    echo $userName;
                    ?>" disabled> </input>
                </div>
                <div class="dados_email">
                    <span class="user">E-mail</span>
                   
                    <input type="email" class="input" value=" <?php
                    echo $email
                    ?>" disabled>
                </div>
                <div class="dados_senha">
                    <span class="user">Senha</span>
                   
                    <input type="password" class="input" value=" <?php
                    echo $senha;
                    ?>" disabled>
                </div>
            </div>

          </div>
          <?php
           }
        } else{
            $_SESSION['msg'] = "Para acessar essa página você precisa ser um usuário!";
            header("Location: login.php");
        }
        ?>
        </div>
    </main>
</body>
</html>