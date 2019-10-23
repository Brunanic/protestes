<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Mansalva|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
include "Bdados.php";
if(isset($_POST["nome"])){
   

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $texto = $_POST["text"];

    try{
        $query = "INSERT INTO contato (nome,email,mensagem) VALUES ('$nome','$email','$texto')";
        $pdo->exec($query);
        echo "Deu Bom!";
    }catch(PDOException $e){
        echo "Deu Ruim!";
    }
    unset ($pdo);
}
?> 
    <div id="area">
        <form id="formulario" autocomplete="off" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <fieldset>
                <h1>Formulário</h1>
                <input class="campo_nome" name="nome" type="text" placeholder="Nome"><br>
                <input class="campo_email" name="email" type="email" placeholder="Email"><br>
                <br><textarea class="msg" name="text" cols="35" rows="8" placeholder="Mensagem"></textarea><br>
                <input class="btn_submit" type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>  
    
</body>

</html>