<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
     $nomeprofessor = $_POST['nomeprofessor'];
     $inserirprofessor= mysqli_query($conexao, "INSERT INTO Professor(Nome_professor)
                                                VALUES ('$nomeprofessor')")
                                                or die (mysqli_error());
    echo "SUCESSO"
    ?>
</body>
</html>