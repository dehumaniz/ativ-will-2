<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username= "root";
        $password="";
        $dbname="agendamento";
    
      $conexao = new mysqli ($servername, $username,$password,$dbname);
   
     if($conexao-> connect_error){
                              die("Falha na Conexão com o BD"+$conexao->connect_error);
                            }
    $codsala= $_POST=['codsala']
    $nomesala=$_POST['nomesala']
    
    
    
?>
</body>
</html>