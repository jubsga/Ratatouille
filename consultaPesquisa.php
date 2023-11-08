<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<body>
<!-- <form action="" method="post">
  <label for="">Digite o Nome da Receita: </label>
        <input type="text" name="nomeR" id="nomeR" placeholder="nomeR" required><br><br>

        <br><br><input type="submit" value="Consultar"><br><br>
  </form> -->

  <?php
    session_start();
    include_once("conexaoDB.php");
  
     
    // if (isset($_POST['nomeR'])){
    //         $nomeR=$_POST['nomeR'];
    //     } else {
    //         $nomeR = '';
    //     }
    // if(isset($_POST['consultar'])){
    //   $nomeR=$_POST['nomeR'];
    //   $consultar = $_POST['consultar'];
    //   }

      $nomeR=$_GET['nomeR'];

        $sqlverifica= "SELECT * FROM  receita WHERE nome = '$nomeR'";
        $resultadoverifica = @mysqli_query($connect,$sqlverifica);
        
        while ($registro = mysqli_fetch_array($resultadoverifica)) {
          $nome = $registro['nome'];
          $tempoPreparo = $registro['tempoPreparo'];
          $quantidade = $registro['quantidade'];
          $ingredientes = $registro['ingredientes'];
          $modoPreparo = $registro['modoPreparo'];
          $categoria = $registro['categoria'];
          $dataPublicacao = $registro['dataPublicacao'];
          $infoAdicionais = $registro['infoAdicionais'];
          $userName = $registro['userName'];
          $imagem = $registro['imagem'];

          $_SESSION['msg1'] = $nome;    

          $_SESSION['msg2'] = $tempoPreparo;

          $_SESSION['msg3'] = $quantidade;

          $_SESSION['msg4'] = $ingredientes;

          $_SESSION['msg5'] = $modoPreparo;

          $_SESSION['msg6'] = $categoria;

          $_SESSION['msg7'] = $dataPublicacao;

          $_SESSION['msg8'] = $userName;
          
          $_SESSION['msg9'] = $imagem;
          header("Location: receitaEspecifica.php");
        }  

        if (@mysqli_num_rows($resultadoverifica)==0){
          if (!$resultadoverifica) {
            die ('Query Inválida: ' . @mysqli_error($connect));
            exit;
        } else {
          $_SESSION['msg'] = "Receita não existe!";
          header("Location: receitaEspecifica.php");
           
        }
      }
   

?>


</body>
</html>