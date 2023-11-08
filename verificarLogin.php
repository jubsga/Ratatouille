<?php
        session_start();
        include_once("conexaoDB.php");

        if(isset($_POST['login'])){
        $userName=$_POST['userName'];
        $senha=$_POST['senha'];
        $login = $_POST['login'];
        }
       
        if (isset($login)){
            $sqlverifica= "SELECT * FROM cadastro WHERE userName = '$userName' AND senha = '$senha'";
            $resultadoverifica = @mysqli_query($connect,$sqlverifica);

            if (@mysqli_num_rows($resultadoverifica)==0){
                
                $_SESSION['msg'] = "UserName ou senha incorretos, tente novamente*";
                header("Location: login.php");
                die();
            } else {
                setcookie("userName",$userName);
                $_SESSION['parametro'] = true;
                header("Location: index.php");
               exit;
            }
               
        }
?>