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

        while ($registro = mysqli_fetch_array($resultadoverifica)) {
            $userName = $registro['userName'];
            $nome = $registro['nome'];
            $email = $registro['email'];
            $senha = $registro['senha'];
        }

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
    <link rel="stylesheet" href="css/edit_dados.css">
    <link rel="shortcut icon" href="img/fav.png">
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
                        <!-- <form action="consultaPesquisa.php" method="get">
                            <input type="text" name="nomeR" id="search" placeholder="Faça sua busca" required>
                            <button type="submit"><i class="fa fas fa-search"></i></button>

                        </form> -->
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
                        <a class="nav-link" href="dados.php">
                            <li class="filter-list-item">
                                <span class="span">Dados</span>
                            </li>
                        </a>
                        <a class="nav-link" href="edit_dados.php">
                            <li class="filter-list-item">
                                <span class="span">Editar Dados</span>
                            </li>
                        </a>
                        <a class="nav-link" href="receita_cad.php">
                            <li class="filter-list-item">
                                <span class="span">Receitas Cadastradas</span>
                            </li>
                        </a>
                        <a class="nav-link" href="sair.php">
                            <li class="filter-list-item">
                                <span class="span">Sair / Excluir Conta</span>
                                <!-- <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOxJREFUSEtjZKAxYKSx+Qz0s4CnwMSBkfH/fKCPFIjw1YP//xkTv0w4c4CQWrgPeAuNHwAVyxPSgCT/4HP/WUVC6pEt+A9SDNREMNiAjiFa7agF4BAABtkCYNAmYIsPsoII3SBQnAANusD0/6/jhwkXPiDLU80CqKEf/v1ncvw64fQFmCUELYClGELJEUWe8X/i575zC0BiA28BMS5H8uVHYBA5kBREJFhwkfn/XweqRDJ6TqZ6Mh25RQUoB/ITE6lQNQ+BxQPBugOeD6AVDihzEFMnPARWOAkkVTgkuJwkpQQrF5JMw6KY5hYAAO74qBmX9FXHAAAAAElFTkSuQmCC"/> -->
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

          <div class="container-dados">
          <?php
          
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
                    <!-- <svg class="img" xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" style="fill: rgba(13, 113, 51, 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg> -->
                <div class="display1">
                <form action="update.php" method="post">
                    <!-- <div class="dados_nome">
                      
                        <span class="user">Nome</span>
                       
                        <input type="text" class="input" title="Insira o Nome"  disabled>
                    </div> -->
                    <div class="dados_nome">
                        <span class="user">Novo Nome</span>
                        <input type="text" class="input" title="Insira o Novo Nome" value=" <?php
                            echo $nome;
                        ?>" name="newName">
                    </div>
                    <!-- <div class="dados_user">
                        <span class="user">User</span>
                       
                        <input type="text" class="input" title="Insira o Username" value=" <?php
                            echo $userName;
                        ?>" disabled>
                    </div> -->
                    <!-- <div class="dados_user">
                        <span class="user">Novo User</span>
                        <input type="text" class="input" title="Insira o Novo Username" name="newUser" value="Não será possível editar o nome do usuário!" disabled>
                    </div> -->
                    <!-- <div class="dados_email">
                        <span class="user">E-mail</span>
                       
                        <input type="email" class="input" title="Insira o E-mail"  disabled>
                    </div> -->
                    <div class="dados_email">
                        <span class="user">Novo E-mail</span>
                        <input type="email" class="input" title="Insira o Novo E-mail" value=" <?php
                            echo $email;
                        ?>" name="newEmail">
                    </div>
                    <!-- <div class="dados_senha">
                        <span class="user">Senha</span>
                        
                        <input type="password" class="input" title="Insira a Senha" disabled>
                    </div> -->
                    <div class="dados_senha">
                        <span class="user">Nova Senha</span>
                        <input type="password" class="input" title="Insira a Nova Senha"  value="<?php
                            echo $senha;
                        ?>" name="newSenha">
                    </div>
                   
                </div>
            </div>
            <?php
            }
        } 
            else{
                $_SESSION['msg'] = "Para acessar essa página você precisa ser um usuário!";
                header("Location: login.php");
            }
        ?>
            <div class="botao-cad">
                <div class="cad">
                    <input type="submit" value="Editar dados" name="send" id="send2" class="action-cad" >      
                </div>
            </div>
          </div>
          </form>
          
        </div>
    </main>
</body>
</html>