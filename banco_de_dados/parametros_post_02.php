<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>

<body>
 
<?php
session_start();
function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['firstName'];
    echo '<br><br>';
    echo 'Sobrenome: '.$_POST['lastName'];

    require_once('dados_banco.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuario (nome, sobrenome) VALUES ('$_POST[firstName]', '$_POST[lastName]')";
    $result = $conn->query($sql);
    
    $conn->close();
    
    header('Location: painel.html');
    exit();
}

?>
</body>
</html>