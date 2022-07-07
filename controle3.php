<?php
 session_start();
 $id = $_GET['id'];

 include("conectar.php");
 $sql = "SELECT * FROM Pontuacao Where id='$id' Order By id";
 if(mysqli_query($conn, $sql)
 {
   Mostradados();
 }
 mysqli_close()
?>
<html>
 <head>
  <title>
    Versão
  </title>
 </head>
<body>
 <h1>Ver Pontuação</h1>
 <br>
 <?php xmostardados() ?>
</body>
</html>