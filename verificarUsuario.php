    <?php
        session_start();
        include_once("conexaoDB.php");

        if (isset($_POST['send'])){
            $nome=$_POST['nome'];
            $userName=$_POST['userName'];
            $email=$_POST['email'];
            $email2=$_POST['email2'];
            $senha=$_POST['senha'];
            $senha2=$_POST['senha2'];

        
        $sqlselect= "SELECT * FROM cadastro WHERE userName = '$userName'";
        $resultadoselect = @mysqli_query($connect,$sqlselect);

    
        if (@mysqli_num_rows($resultadoselect)==0){ 

            if ($senha != $senha2 || $email != $email2) {
                $_SESSION['msg'] = "Senha ou email não conferem!";
                header("Location: cad.php");
            } else {
            $sql = "INSERT INTO cadastro VALUES ('$userName', '$nome', '$email','$senha')";
            $resultado = @mysqli_query($connect,$sql);
        }
            if (!$resultado) {
                die ('Query Inválida: ' . @mysqli_error($connect));
                exit;
            }
            else {
                    mysqli_close($connect);
                    $_SESSION['msg'] = "$userName cadastrado com sucesso!";
                    header("Location: login.php");
            } 
            
        } else{
                $_SESSION['msg'] = "$userName já possui cadastro!";
                header("Location: cad.php");
        }
    }
        
     ?>