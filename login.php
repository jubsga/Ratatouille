<?php
    session_start();
    if(isset($_SESSION['parametro'])){
        header('location: index.php');
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/estilo_login.css">
    <link rel="stylesheet" href="css/receita-banner.css">
    <link rel="stylesheet" href="css/receita-responsividade.css">
    <link rel="stylesheet" href="css/mediaquerys.css">
    <link rel="shortcut icon" href="img/fav.png">
    <link type="text/css" rel="stylesheet" href="css/mediaquerys.css"/>
    <link type="text/css" rel="stylesheet" href="footer.css"/>
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <title>Login do Usuário</title>
</head>
<?php
 

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
                        <div class="sobrenos"><a href="about-us.php">Sobre nós </a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
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
                        <div class="sobrenos"><a href="about-us.php">Sobre nós </a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
                            <div class="login"><a href="login.php">Entrar</a></div>
                            <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                        </div>

                </div>
            </nav>  
        </header>
        <?php
    }?>
<body>

    <main class="page-main">
        <!-- Header -->
     
        <!-- Area de Login -->
        <div class="columns">
            <div class="column-main">
                <div class="login-container">
                    <div class="block-login">
                        <div class="block-title">
                            <h4 class="h4-title">Bem-Vindo(a)</h4>
                            <h1 class="h1-title">Fazer Login</h1>
                        </div>
                    </div>
                    <!-- Area Botoes -->
                    <div class="block-container">
                        <form action="verificarLogin.php" class="form-login" method="post" id="login-form">
                            <fieldset class="login-fieldset">
                                <div class="control">
                                    <div class="field email">
                                        <label for="email" class="label">
                                            <span>User: </span>
                                        </label>
                                        <input name="userName" id="email" title="userName"  type="text" class="input-email" required>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="field senha">
                                        <label for="password" class="label">
                                            <span>Senha:</span>
                                        </label>
                                        <input name="senha" id="password" title="Senha"  type="password" class="input-senha" required>
                                        <!-- <div class="eye" id="toggle-password">
                                            <img class="eye" src="img/view.png" alt="Mostrar ou Esconder Senha">
                                        </div> -->
                                    </div>
                                   <div class="msg">
                                    <?php
                                    
                                        if(isset($_SESSION['msg'])){
                                            echo $_SESSION['msg'];
                                            unset ($_SESSION['msg']);
                                        }
                                        
                                    ?>
                                    </div>
                                   <div class="botao-entrar">
                                        <div class="entrar">
                                            <button type="submit" class="action-entrar" name="login" id="send2">
                                                <span>Entrar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="mensagem">
                        <p>Ainda não tem uma conta Ratatouille?</p>
                        <a href="cad.php" class="texto" title="Criar uma conta">
                            <button type="submit" class="button" name="create" id="create2">
                                <span class="create">Criar uma Conta</span> 
                            </a> 
                        </button> 
                    </div> 
                </div>
            </div>
        </div>

        <!-- Footer -->

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
        
        <!-- <footer>
            <div class="footer-content">
                <h3>Siga nossas redes sociais</h3>
                <p>Fique por dentro de nossas novidades e junte-se a comunidade</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer> -->
    </main>

</body>
</html> 