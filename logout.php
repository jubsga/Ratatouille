<?php
      session_start();
      session_destroy();
      setcookie("userName", "", time() -3600);
      header('Location: login.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <a href="logout.php">
      <span>Sair?</span>
      <button type="submit">Sair</button>
</a>
</body>
</html> -->