<?php
    session_start();
    include_once("conexaoDB.php");

	if (isset($_COOKIE['userName'])){
		$userName_cookie = $_COOKIE['userName'];
        $userName = $userName_cookie;
	} else {
        $userName = "";
    }
		
		// if(isset($userName_cookie)){
		// 	echo"Bem Vindo, $userName_cookie <br>";
		// 	echo"<a href='logout.php'>Sair dessa conta </a><br>";
		// $userName = $userName_cookie;
    if(!empty($_POST['estrela'])){
        $qtdEstrela = $_POST['estrela'];
            
        $result_avaliacao= "INSERT INTO avaliacao VALUES (DEFAULT, '$qtdEstrela', NOW(), '$userName')";
        $resultado_avaliacao = mysqli_query($connect, $result_avaliacao);
            
            if(mysqli_insert_id($connect)){
                $_SESSION['msg'] = "Avaliação cadastrada com sucesso!";
                header("Location: about-us.php");
                die();
            }else{
                $_SESSION['msg'] = "Erro ao cadastrar a avaliação!";
                header("Location: about-us.php");
                die();
            }
    }else{
        $_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela!";
        header("Location: about-us.php");
        die();
    }
	// } else{
    //     $_SESSION['msg'] = "Para cadastrar uma avaliação você precisa ser um USUÁRIO!<br>
    //     <a href='login.php'>Faça Login</a> ou <a href='cad.php'>Cadastre-se</a>";
    //     header("Location: estrela.php");
    //     exit;
    //   }
?>