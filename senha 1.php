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
    Usuário:<input type="text" name="nome"/><br>
    Senha:<input type="password" name="senha"/><br>
    <input type="submit" name="action" value="Enviar"/>
</form>
</body>
</html>


<?php


$senhaParaArmazenarNoBanco = '$2y$10$dMtPtpkG1e7YNE/MVDgGE.HRHtldm2xfGOyhfPmXjYFzAKS9iJLUy';


$senhaAberta = filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);


if (password_verify($senhaAberta, $senhaParaArmazenarNoBanco)) {

    echo 'Senha válida';
} else {

    echo 'Senha inválida.';
}




?>
