<?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    } 

    if (isset($_POST['send'])){
        $userName = $userName_cookie;
        $newName = $_POST['newName'];
        $newEmail = $_POST['newEmail'];
        $newSenha = $_POST['newSenha'];
           
    //         UPDATE `ratatouilledb`.`cadastro` SET `nome` = 'Carol Almeida',
    // `email` = 'carol@gmail.com' WHERE `cadastro`.`userName` = 'carol';
        $updateUser = "UPDATE cadastro SET nome='$newName', email='$newEmail', senha='$newSenha' WHERE userName = '$userName'";
    
            // if($newName != null){
            //     $updateUser = "UPDATE ratatouilledb . cadastro SET nome = '$newName' WHERE userName = '$userName'";
            // }
            
            // if ($newEmail != null) {
            //     $updateUser = "UPDATE ratatouilledb . cadastro SET email = '$newEmail' WHERE userName = '$userName'";
            // }

            // if ($newSenha != null) {
            //     $updateUser = "UPDATE ratatouilledb . cadastroo SET senha = '$newSenha' WHERE userName = '$userName'";
            // }
        $updateResult = @mysqli_query($connect,$updateUser);

        if (@mysqli_num_rows($updateResult)==0){
            $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
            header("Location: dados.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
            header("Location: dados.php");
        }
    }
?>
