<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Título</title>
    <script>


    </script>
</head>
<body>
<form>
    Novo Usuário:<input type="text" name="nome"/><br>
    Senha:<input type="password" name="senha"/><br>
    <input type="submit" name="action" value="Enviar"/>
</form>
</body>
</html>


<?php


$senhaAberta = filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);


if(!is_null($senhaAberta)){
    echo 'Senha passada pelo usuario: ' . $senhaAberta . '<br>';


    $senhaParaArmazenarNoBanco = password_hash($senhaAberta, PASSWORD_DEFAULT);
    echo 'Senha para ser armazenada no banco: ' . $senhaParaArmazenarNoBanco . '<br>';
}


?>
