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
            $senha = $registro['senha'];
        }

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/index-responsividade.css">
        <!-- <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="css/edit_dados.css"> -->
    <link rel="shortcut icon" href="img/fav.png">
        <title>Delete</title>
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
        <form action="" method="post">
            <span>Deseja deletar sua conta? Confirme sua senha</span>
            <input type="password" name="confSenha" id="">
            <button type="submit" name="delete">
                <span>Deletar conta</span>
            </button>
        </form>
        <br>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
    </body>
    </html>
<?php

    if (isset($_POST['delete'])){
        $userName = $userName_cookie;
        $confSenha = $_POST['confSenha'];

        if ($confSenha != $senha) {
            $_SESSION['msg'] = "Verifique sua senha e tente novamente!";
            header("Location: delete.php");
        } else{
            $deleteUser = "DELETE FROM cadastro WHERE userName = '$userName'";
            $deleteResult = @mysqli_query($connect,$deleteUser);
        }

        if (!$deleteResult) {
            die ('Query Inválida: ' . @mysqli_error($connect));
            exit;
        }else {
            mysqli_close($connect);
            header("Location: logout.php");
        } 

        // if (@mysqli_num_rows($deleteResult)==0){
        //     header("Location: logout.php");
        // }else{
        //     $_SESSION['msg'] = "<p style='color:red;'>Não foi possível deletar conta</p>";
        //     header("Location: dados.php");
        // }
    }
    }
?>