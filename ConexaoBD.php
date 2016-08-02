<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
  $dsn="mysql:dbname=blog;host=localhost";
  $dbuser = "root";
  $dbpass = "";
  //Trecho de código para caso ocorra algum erro na conexão com o BD
  try{
      $pdo = new PDO($dsn, $dbuser, $dbpass);
       echo "CONECTOU COM SUCESSO";
  } catch(PDOEException $e){
         echo "Falhou:" .$e->getMessage();
  }
?>
</BODY>
</HTML>
