<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
   <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
</head>
<body>
<?php
    include("conexao.php");

    $excluir=$_POST['excluir'];

    $sql="DELETE FROM pousada WHERE cpf='$excluir'";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro excluído";
    }
    else{
        echo "Não foi realizada a operação".mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>
</body>
</html>